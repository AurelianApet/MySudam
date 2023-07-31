<?php

//App::uses('ApiAppController', 'Api.Controller');
App::uses('BlogsController','Blog.Controller');
App::uses('BlogAppController','Blog.Controller');
/**
 * Blogs Controller
 *
 */
class ApiBlogsController extends BlogsController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Blog.Blog');
    }

    public $scaffold;

    // browse blog by type : all,my,friend,popular,search
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
            $blogs = $this->Blog->getPopularBlogs(null, Configure::read('core.popular_interval'));
            $this->set('blogs', $blogs);
        }
        else {
            parent::browse($type,$param,false);
        }
    }

    public function view($id = null) {
        $uid = $this->Auth->user('id');
        $id = $this->request->params['id'];
        parent::view($id);
    }

    public function save($isRedirect = true) {
        $uid = $this->Auth->user('id');
        if (!isset($this->request->data['body']) || !isset($this->request->data['title']) || !isset($this->request->data['category_id']) ) {
            if (!isset($this->request->data['body']))
                throw new ApiBadRequestException(__d('api', 'blog body is missing.'));
            if (!isset($this->request->data['title']))
                throw new ApiBadRequestException(__d('api', 'blog title is missing.'));
            if (!isset($this->request->data['category_id']))
                throw new ApiBadRequestException(__d('api', 'blog category is missing.'));
        }
        if (!isset($this->request->data['tags'])) {
            $this->request->data['tags'] = '';
        }
        if (!isset($this->request->data['privacy'])) {
            $this->request->data['privacy'] = 1;
        }
        if (!isset($this->request->data['thumbnail'])) {
            $this->request->data['thumbnail'] = '';
        }

        $this->request->data['body'] = str_replace('../', '/', $this->request->data['body']);
//        if (isset($_FILES['qqfile'])) {
//            $upload = $this->_uploadThumbnail();
//            $this->request->data['thumbnail'] = $upload['file'];
//        }
        
        $id = parent::save(true);
        if($id) {
           $this->autoRender = true;
           $this->set(array(
                'message' => __d('api', 'success'),
                'id' => $id,
                '_serialize' => array('message', 'id'),
            ));
       }
        
    }

    public function delete($id = null,$isRedirect =  false) {
        $id = $this->request->params['blog_id'];
        parent::delete($id,false);
    }
    public function getBlogProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_blog($id,false);
    }
    public function viewByCategory() {
        $type = 'category';
        $param = $this->request->params['category_id'];
        parent::browse($type,$param,false);
    }

}
