<?php

App::uses('UserBlocksController', 'Controller');

class ApiUserBlockController extends UserBlocksController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('UserBlock');
        $this->loadModel('User');
    }
    // check items exist , privacy , permission before do next action .

    public function do_block() {
        $user_id = $this->request->data['user_id'];
        $user = $this->User->findById( $user_id );
        $this->_checkExistence($user);
        $respond = parent::ajax_do_add(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __('The user has been blocked'),
                '_serialize' => array('message'),
            ));
        }
        
    }
    public function do_unblock() {
        $user_id = $this->request->data['user_id'];
        $user = $this->User->findById( $user_id );
        $this->_checkExistence($user);
        $uid = $this->Auth->user('id');

        if (!$this->UserBlock->areUserBlocks($uid, $user_id)) {
                throw new ApiBadRequestException(__('This user is not blocked by you'));
        }

        $respond = parent::ajax_do_remove(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __d("api",'Success'),
                '_serialize' => array('message'),
            ));
        }
    }

}
