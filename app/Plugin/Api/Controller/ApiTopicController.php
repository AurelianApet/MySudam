<?php

App::uses('TopicsController','Topic.Controller');
App::uses('TopicAppController','Topic.Controller');
/**
 * Topic Controller
 *
 */
class ApiTopicController extends TopicsController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Topic.Topic');
    }

    public $scaffold;

    // browse topic by type : all,my,friend,popular,search
    public function browse($type = null,$param = null,$isRedirect = false) {
        if (!isset($this->request->params['type']))
            $type = 'search';
            if (isset($this->request->data['keyword'])) {
                $param = $this->request->data['keyword'];
            }
        else
            $type = $this->request->params['type'];
        $uid = $this->Auth->user('id');
        if ($type == 'filter') {
            $type = 'search';       
        }
        if ($type == 'popular') {
            $topics = $this->Topic->getPopularTopics(null, Configure::read('core.popular_interval'));
            $this->set('topics', $topics);
        }
        else {
            parent::browse($type,$param,false);
        }
    }

    public function browseByGroup() {
        $type = 'group';
        $param = $this->request->params['group_id'];
        $this->loadModel('Group.Group');
        $group = $this->Group->findById($param);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $respond = parent::browse($type,$param,false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

    public function view($id = null) {
        $id = $this->request->params['id'];
        parent::view($id);
    }

    public function viewByCategory() {
        $type = 'category';
        $param = $this->request->params['category_id'];
        parent::browse($type,$param,false);
    }

    public function save($isRedirect = true) {

        $this->_checkPermission(array('confirm' => true));
        $uid = $this->Auth->user('id');

        if (!isset($this->request->data['body']) || !isset($this->request->data['title']) || !isset($this->request->data['category_id'])) {
            if (!isset($this->request->data['body']))
                throw new ApiBadRequestException(__d('api', 'topic body is missing.'));
            if (!isset($this->request->data['title']))
                throw new ApiBadRequestException(__d('api', 'topic title is missing.'));
            if (!isset($this->request->data['category_id']) && !isset($this->request->data['group_id']))
                throw new ApiBadRequestException(__d('api', 'topic category is missing.'));
        }
        if (isset($this->request->data['tags'])) {
            $this->_checkTags(array($this->request->data['tags']));
        }
        else {
            $this->request->data['tags'] = '';
        }
        $this->request->data['body'] = str_replace('../', '/', $this->request->data['body']);
//        if (isset($_FILES['qqfile'])) {
//            $upload = $this->_uploadThumbnail();
//            $this->request->data['thumbnail'] = $upload['file'];
//        }
        if (!isset($this->request->data['thumbnail'])) {
            $this->request->data['thumbnail'] = '';
        }
        if (!empty($this->request->data['group_id'])) {
            $this->request->data['category_id'] = 0;
        }

        $respond  = parent::save(true);
        if(is_numeric($respond)) {
           $this->autoRender = true;
           $this->set(array(
                'message' => __d('api', 'success'),
                'id' => $respond,
                '_serialize' => array('message', 'id'),
            ));
        }
        else {
            if(is_array($respond)) {
                $this->_throwException($respond);
            }
        }
    }

    public function delete($id = null,$isRedirect =  false) {

        $id = $this->request->params['topic_id'];
        parent::do_delete($id,false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    public function pin() {
        $uid = $this->Auth->user('id');

        $id = $this->request->params['topic_id'];
        parent::do_pin($id,false);

        $this->set(array(
            'message' => __('Topic has been pinned'),
            '_serialize' => array('message'),
        ));
    }

    public function unpin() {

        $id = $this->request->params['topic_id'];
        parent::do_unpin($id,false);

        $this->set(array(
            'message' => __('Topic has been unpinned'),
            '_serialize' => array('message'),
        ));
    }

    public function lock() {

        $id = $this->request->params['topic_id'];
        parent::do_lock($id,false);

        $this->set(array(
            'message' => __('Topic has been locked'),
            '_serialize' => array('message'),
        ));
    }

    public function unlock() {

        $id = $this->request->params['topic_id'];
        parent::do_unlock($id,false);
        $this->set(array(
            'message' => __('Topic has been unlocked'),
            '_serialize' => array('message'),
        ));
    }
    public function getTopicProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_topic($id,false);
    }

}
