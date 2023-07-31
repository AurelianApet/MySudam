<?php

App::uses('FollowsController', 'Controller');

class ApiFollowController extends FollowsController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('UserFollow');
    }
    // check items exist , privacy , permission before do next action .

    public function do_follow() {
        $user_id = $this->request->data['user_id'];
        $user = $this->User->findById( $user_id );
        $this->_checkExistence($user);
        $uid = MooCore::getInstance()->getViewer(true);
        $follow = $this->UserFollow->checkFollow($uid,$user_id);
        if ($follow) {
            throw new ApiBadRequestException(__d('api', "Already Followed"));
        }
        parent::ajax_update_follow(false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }
    public function do_unfollow() {
        $user_id = $this->request->data['user_id'];
        $user = $this->User->findById( $user_id );
        $this->_checkExistence($user);
        $uid = MooCore::getInstance()->getViewer(true);
        $follow = $this->UserFollow->checkFollow($uid,$user_id);
        if (!$follow) {
            throw new ApiBadRequestException(__d('api', "Already UnFollowed"));
        }
        parent::ajax_update_follow(false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

}
