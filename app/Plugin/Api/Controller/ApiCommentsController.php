<?php

App::uses('ApiAppController', 'Api.Controller');
App::uses('ActivityController', 'Api.Controller');

/**
 * Comments Controller
 *
 * @property Comment $Comment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
App::uses('CommentsController','Controller');

class ApiCommentsController extends CommentsController {

    /**
     * Components
     *
     * @var array
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->autoRender = true;
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));

        $this->loadModel('User');
        $this->loadModel('Comment');
        $uid = $this->Auth->user('id');
    }


    // get item from item_id
    protected function _getItem($type, $item_id) {
        list($plugin, $model) = mooPluginSplit($type);

            if ($plugin)
                $this->loadModel($plugin . '.' . $model);
            else
                $this->loadModel($model);

            $item = $this->$model->findById($item_id);
            return $item;
    }
    
    // check items exist , privacy , permission before do next action .
    protected function _checkBeforeAction($type, $item_id) {
        $uid = $this->Auth->user('id');
        //check item exist

        if ($type == 'activity') {
            $this->loadModel('Activity');
            $activity = $this->Activity->findById($item_id);
        } else {
            $item = $this->_getItem($type, $item_id);
        }

        if (empty($item) && empty($activity)) {
            throw new ApiNotFoundException(__d('api', 'items not exist.'));
        }

        // check permission for conversation .
        if ($type == APP_CONVERSATION) {
            $this->loadModel('ConversationUser');
            $convo_users = $this->ConversationUser->findAllByConversationId($item_id);
            if (empty($convo_users)) {
                throw new ApiNotFoundException(__d('api', 'conversation not exist.'));
            }
            foreach ($convo_users as $user) {
                $users_array[] = $user['ConversationUser']['user_id'];

                if ($uid == $user['ConversationUser']['user_id'])
                    $convo_user = $user['ConversationUser'];
            }
            $this->_checkPermission(array('admins' => $users_array));
        }
        // check activity feed allow comment or not .
        elseif ($type == 'activity') {
            if ($activity['Activity']['params'] == 'no-comments') {
                throw new ApiBadRequestException(__d('api', 'This activity feed not allow to comment'));
            }
        }
        // check privacy 
        else {
            list($plugin, $model) = mooPluginSplit($type);
            if ($plugin) {
                $this->loadModel('Friend');
                $text = strtolower($plugin) . '_view';
                $this->_checkPermission(array('aco' => $text));
                $areFriends = $this->Friend->areFriends($uid, $item[$model]['id']);
                if (isset($item[$model]['privacy']))
                    $this->_checkPrivacy($item[$model]['privacy'], $item[$model]['id'], $areFriends);

                if ($plugin == 'Video' || $plugin == 'Topic') {
                    $this->loadModel('Group.GroupUser');
                    if ($item[$model]['group_id']) {
                        $is_member = $this->GroupUser->isMember($uid, $item[$model]['group_id']);
                        $cuser = $this->_getUser();
                        if (!$cuser['Role']['is_admin'] && !$is_member) {
                            $this->throwErrorCodeException('not_group_member');
                            throw new ApiBadRequestException(__d('api', 'This item is in a group. Only group members can leave or edit comment'));
                        }
                    }
                    if ($plugin == 'Topic') {
                        if ($item[$model]['locked']) {
                            $this->throwErrorCodeException('topic_is_blocked');
                            throw new ApiBadRequestException(__('This topic has been locked'));
                        }
                    }
                }
                if ($plugin == 'Photo' && $item[$model]['type'] == 'Group_Group') {
                    $this->loadModel('Group.GroupUser');
                    if ($item[$model]['target_id']) {
                        $is_member = $this->GroupUser->isMember($uid, $item[$model]['target_id']);
                        $cuser = $this->_getUser();
                        if (!$cuser['Role']['is_admin'] && !$is_member) {
                            $this->throwErrorCodeException('not_group_member');
                            throw new ApiBadRequestException(__('This a group photo. Only group members can leave comment'));
                        }
                    }
                }
            }
        }
    }

    public function add() {
        /*
         * type:Blog_Blog
            target_id:2
            thumbnail:uploads/tmp/fa02aa6653bae3d6563f4819e03d2007.png
            message:test
            activity:1
         */
        /*
        data[target_id]:2
data[type]:Blog_Blog
data[message]:test
data[message]:test
thumbnail:uploads/tmp/338c348caff73513264f2c11fe09099c.png
        */

        if(!empty($this->request->params['objectType'])){
            $this->request->data['type'] = $this->request->params['objectType'];
            if(isset($this->request->data['id'])){
                $this->request->data['target_id']= $this->request->data['id'];
                unset($this->request->data['id']);
            }
            if(isset($this->request->data['photo'])){
                $this->request->data['thumbnail'] = $this->request->data['photo'];
                unset($this->request->data['photo']);
            }
            if(isset($this->request->data['text'])){
                $this->request->data['message'] = $this->request->data['text'];
                unset($this->request->data['text']);
            }


            parent::ajax_share();
        }

        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    // edit a comment
    public function edit() {
        $commentdata = $this->request->data;
        $type = $this->_getType($this->request->params['objectType']);
        if($type == 'activity') {
            throw new ApiBadRequestException(__d('api', 'Something wrong with object type , please check again.'));
        }
        $this->_checkBeforeAction($type, $commentdata['item_id']);
        $id = $commentdata['comment_id'];
        // check comment is empty 
        $this->request->data['message'] = $this->request->data['comment_attach'] = '';
        if(isset($commentdata['photo'])) {
            $this->request->data['comment_attach'] = $commentdata['photo'];
        }
        if(isset($commentdata['text'])) {
            $this->request->data['message'] = $commentdata['text'];
        }
        if (empty($this->request->data['message']) && empty($this->request->data['comment_attach'])) {
            throw new ApiBadRequestException(__d('api', 'Comment can not be empty'));
        }
        parent::ajax_editComment($id);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    // delete a comment
    public function delete() {
        $commentdata = $this->request->data;
        $type = $this->_getType($this->request->params['objectType']);
        if($type == 'activity') {
            throw new ApiBadRequestException(__d('api', 'Something wrong with object type , please check again.'));
        }
        $this->_checkBeforeAction($type, $commentdata['item_id']);
        $this->request->data['id'] = $commentdata['comment_id'];
        $comment = $this->Comment->findById($this->request->data['id']);
        $this->_checkExistence($comment);
        if ($commentdata['item_id'] != $comment['Comment']['target_id']) {
                $this->throwErrorCodeException('data_not_match');
                throw new ApiBadRequestException(__d('api', 'Something wrong with your data , please check again.'));
        }
        parent::ajax_remove();
        $this->autoRender = true;
        $this->set(array(
            'success' => true,
            '_serialize' => array('success'),
        ));
    }

    // get comment from item object
    public function view() {
        $uid = $this->Auth->user('id');
        $id = $this->request->params['item_id'];
        $type = $this->_getType($this->request->params['objectType']);
        //$this->_checkBeforeAction($type, $id);
        $activity_likes = array();
        
        if ($type == 'activity') { 
            $this->loadModel('ActivityComment');
            $data = $this->ActivityComment->find('all', array('conditions' => array(
                'ActivityComment.activity_id' => $id
            ) ));
            if(!empty($data)) {
                $this->loadModel('Like');
                foreach ($data as $comment) {
                    $activity_likes[] = $this->Like->find( 'first', array( 'conditions' => array( 'user_id' => $uid,
                        'type' => 'core_activity_comment', 
                        'target_id' => $comment['ActivityComment']['id']
                        ),
                        'fields' => array( 'Like.target_id', 'Like.thumb_up','Like.type','Like.id','Like.user_id'  )
                        ) );
                }
                $this->set('activity_likes', $activity_likes);
            }
            else {
                throw new ApiNotFoundException(__d('api', 'comment not found'));
            }
            $this->set(array(
                'data' => $data,
                'type' => $type,
            ));
        }
        else {
            parent::browse($type,$id,false);
            $this->set(array(
                'type' => $type,
            ));
        }
        
    }
  
    // get list of edited comment
    public function listEdited() {
        $item_id = $this->request->params['item_id'];
        $comment_id = $this->request->params['comment_id'];
        $type = $this->_getType($this->request->params['objectType']);
        $this->_checkBeforeAction($type, $item_id);
        
        if ($type == 'activity') { 
            $activites = new ActivityController();
            $data = $activites->get($item_id , true);
            if(isset($data['ActivityComment']) && !empty($data['ActivityComment'])  ){
                $commentType = 'Core_Activity_Comment';
            }
            else {
                $commentType = 'Comment';
            }
        }
        else {
            $commentType = 'Comment';

        }
        $this->loadModel('CommentHistory');

        $histories = $this->CommentHistory->getHistory($commentType, $comment_id, null);
        $this->set(array(
            'histories' => $histories,
            'historiesCount' => $this->CommentHistory->getHistoryCount($commentType, $comment_id),
           ));
    }
   

}
