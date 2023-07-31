<?php
App::uses('VideosController','Video.Controller');
App::uses('VideoAppController','Video.Controller');
/**
 * Video Controller
 *
 */
class ApiVideoController extends VideosController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Video.Video');
    }

    public $scaffold;

    public function fetchVideo() {
        if (!isset($this->request->data['source']) || !isset($this->request->data['url']) || empty($this->request->data['source']) || empty($this->request->data['url'])) {
            throw new ApiBadRequestException(__d("api", "Please check type or url again."));
        }
        $respond = parent::aj_validate(false);
        if($respond) {
            $this->_throwException($respond);
        }
        $respond = parent::fetch(false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

    public function browse($type = null,$param = null,$isRedirect = false) {
        $param = '';
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
            $videos = $this->Video->getPopularVideos(null, Configure::read('core.popular_interval'));
            $this->set('videos', $videos);
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

    public function viewByCategory() {
        $type = 'category';
        $param = $this->request->params['category_id'];
        parent::browse($type,$param,false);
    }

    public function view($id=null) {
        $id = $this->request->params['id'];
        parent::view($id);
    }

    public function save($isReturn=true) {
        if (!isset($this->request->data['tags'])) {
            $this->request->data['tags'] = '';
        }
        $this->request->data['privacy'] = isset($this->request->data['privacy']) ? $this->request->data['privacy'] : 1;
        if (isset($this->request->data['group_id'])) {
            $this->request->data['category_id'] = 0;
        } else {
            if (!isset($this->request->data['category_id'])) {
                throw new ApiBadRequestException(__d('api', 'video category is missing.'));
            }
        }
        if (!isset($this->request->data['title'])) {
                throw new ApiBadRequestException(__d('api', 'video title is missing.'));
        }
        if (!isset($this->request->data['source'])) {
                throw new ApiBadRequestException(__d('api', 'video source is missing.'));
        }
        if (!isset($this->request->data['source_id'])) {
                throw new ApiBadRequestException(__d('api', 'video source id  is missing.'));
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

    public function delete($id=null,$isRedirect=false) {

        $id = $this->request->params['video_id'];
        parent::delete($id,false);
        $this->autoRender = true;
        
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }
    public function getVideoProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_video($id,false);
    }

}
