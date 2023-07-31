<?php
//App::uses('ApiAppController', 'Api.Controller');
App::uses('ActivitiesController','Controller');
/**
 * Activity Controller
 *
 */
class ApiActivityController extends ActivitiesController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->autoRender = true;
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));

        $this->loadModel('User');
        $this->loadModel('Activity');
        $uid = $this->Auth->user('id');
    }

    public function home() {
        $type = $this->request->query('filter') ? $this->request->query('filter') : 'everyone';
        parent::ajax_browse($type,null,false);
    }

    // --- POST /activity
    public function post(){
        // Hacking
        if(!isset($this->request->data['type'])){
            $this->request->data['type']= "User";
        }
        if(!isset($this->request->data['target_id'])){
            $this->request->data['target_id'] = 0;
        }
        $this->request->data['action'] = "wall_post";
        $this->request->data['description'] = "";
        //$this->request->data['userShareLink'] = "";
        $this->request->data['userShareVideo'] = "";
        $this->request->data['wall_photo'] = "";
        if(isset($this->request->data['wallPhoto'])){
            $this->request->data['wall_photo'] = join(",",$this->request->data['wallPhoto']);
        }
        if (!empty($this->request->data['userShareLink']))
        {
        	$this->request->data['share_image'] = true;
        	$this->request->data['share_text'] = true;
        }
        
        parent::ajax_share();
        $this->set(array(
            'message' => __d('api', 'success'),
            'id'=> $this->viewVars["activity"]["Activity"]["id"] ,
            '_serialize' => array('message','id'),
        ));
    }
    // --- POST /activity/{activity_id}/comment
    public function comment(){
        if(isset($this->request->params['activity_id'])){
            $this->request->data['activity_id']= $this->request->params['activity_id'];
            if(isset($this->request->data['id'])){
                unset($this->request->data['id']);
            }
        }
        if(isset($this->request->data['photo'])){
            $this->request->data['thumbnail'] = $this->request->data['photo'];
            unset($this->request->data['photo']);
        }
        if(isset($this->request->data['text'])){
            $this->request->data['comment'] = $this->request->data['text'];
            unset($this->request->data['text']);
        }
        parent::ajax_comment();
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }
    // --- POST /activity/{activity_id}/comment/edit
    public function editComment(){
        $commentdata = $this->request->data;
        $activity_comment = $this->Activity->findById($commentdata['activity_id']);
        $this->_checkExistence( $activity_comment );
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
        parent::ajax_editActivityComment($commentdata['comment_id']);
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }
    // --- POST /activity/{id}/comment/delete
    public function deleteComment(){
        $commentdata = $this->request->data;
        $this->loadModel('ActivityComment');
        $this->request->data['id'] = $commentdata['comment_id'];
        $comment = $this->ActivityComment->findById($commentdata['comment_id']);
        $this->_checkExistence($comment);
        if ($this->request->params['activity_id'] != $comment['ActivityComment']['activity_id']) {
                $this->throwErrorCodeException('data_not_match');
                throw new ApiBadRequestException(__d('api', 'Something wrong with your data , please check again.'));
        }
        parent::ajax_removeComment();
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }
    public function get($activity_id, $return = false) { 
        $uid = $this->Auth->user('id');
        if (is_numeric($activity_id)) {
            $this->loadModel('Activity');
            $activity = $this->Activity->findById($activity_id);
            if (empty($activity)):
                throw new ApiNotFoundException(__d('api', 'This activity feed not exist.'));
            endif;
            $activities = $this->Activity->getActivities('detail', $activity_id);
            $activity = $activities[0];

            // check group permission
            if (isset($activity['Activity']['type']) && $activity['Activity']['type'] == 'Group_Group') {
                $this->loadModel('Group.Group');
                $target_id = $activity['Activity']['target_id'];
                $group = $this->Group->find('first', array(
                    'conditions' => array(
                        'Group.id' => $target_id
                    )
                ));
                $this->loadModel('Group.GroupUser');
                $is_member = $this->GroupUser->isMember($uid, $target_id);
                $group['Group']['is_member'] = $is_member;
            }

            // check event permission
            if (isset($activity['Activity']['type']) && $activity['Activity']['type'] == 'Event_Event') {
                $this->loadModel('Event.Event');
                $target_id = $activity['Activity']['target_id'];
                $event = $this->Event->findById($activity['Activity']['target_id']);
                if ($event['Event']['type'] == PRIVACY_EVERYONE)
                    $is_invited = 1;
                else
                    $is_invited = $this->Event->EventRsvp->getMyRsvp($uid, $target_id);
            }

            if (isset($group['Group']['type'])):
                if ($group['Group']['type'] == PRIVACY_RESTRICTED && !$group['Group']['is_member']):
                    $this->throwErrorCodeException('access_denied');
                    throw new ApiBadRequestException(__d('api', 'This activity feed have content is private . You can not view this activity'));
                elseif ($group['Group']['type'] == PRIVACY_PRIVATE && !$group['Group']['is_member']):
                    $this->throwErrorCodeException('access_denied');
                    throw new ApiBadRequestException(__d('api', 'This activity feed is in a private group. You must be invited by a group admin in order to join and view this activity'));
                endif;
            elseif (isset($is_invited) && empty($is_invited)):
                $this->throwErrorCodeException('access_denied');
                throw new ApiBadRequestException(__d('api', 'This activity feed is in a private event. You can not view this activity .'));
            endif;
            if ($return) {
                return $activity;
            } else {
                $this->set('data', $activity);
            }
            if (!empty($uid)) {
                $this->loadModel('Like');
                $activity_likes = $this->Like->getActivityLikes($activities, $uid);
                $this->set('activity_likes', $activity_likes);
            }
            
        } else {
            throw new ApiNotFoundException(__d('api', 'This activity feed not exist.'));
        }
    }

    public function get_tag_user($tagging_id) {
        $this->loadModel('UserTagging');
        $tagging = $this->UserTagging->find('first', array('conditions' => array('UserTagging.id' => $tagging_id)));
        if (empty($tagging)):
                throw new ApiNotFoundException(__d('api', 'This tag id not exist.'));
            endif;
        $users_taggings = explode(',', $tagging['UserTagging']['users_taggings']);
        $users = $this->User->find('all', array('conditions' => array(
            'User.id' => $users_taggings
        )));
        $this->set('users',$users);
    }
    public function delete($id) {
        if(is_numeric($id)){
            $this->request->data['id'] = $id;
            parent::ajax_remove();
            // Hacking
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success'),
            ));
        }else{
            throw new ApiNotFoundException(__d('api', 'This activity feed not exist.'));
        }
    }
	
    public function fetchLink()
    {
    	$this->loadModel('Activity');
    	if (!isset($this->request->data['content']) || !trim($this->request->data['content']))
    	{
    		throw new ApiNotFoundException(__d('api', 'Link fetch not exist.'));
    	}
    	$this->Activity->parseLink($this->request->data);
    	if(isset($this->request->data['params'])){
    		$params = unserialize($this->request->data['params']);
    		
    		if (!isset($params['image']))
    		{
    			$params['image'] = '';
    		}
    		
    		if (!isset($params['description']))
    		{
    			$params['description'] = '';
    		}
    		
    		if (!isset($params['title']))
    		{
    			$params['title'] = '';
    		}
    		
    		if ($params['image'])
    		{
    			if (strpos($params['image'],'http') === false)
    			{
    				$params['image'] = FULL_BASE_URL . $this->request->webroot . 'uploads/links/' . $params['image'];
    			}
    		}
    		$this->set(array(
    			'image' => $params['image'],
    			'description' => $params['description'],
    			'title' => $params['title'],
    			'_serialize' => array('image','description','title'),
    		));
    		
    	}else{
    		throw new ApiNotFoundException(__d('api', 'Link fetch not exist.'));
    	}   
    }
}