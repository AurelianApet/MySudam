<?php

App::uses('FriendsController','Controller');
/**
 * Friends Controller
 *
 */
class ApiFriendsController extends FriendsController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadmodel('Friend');
        $this->loadModel('FriendRequest');
        $this->loadModel('User');
    }

    // GET friend list
    public function getlist() {
        $uid = $this->Auth->user('id');
        $users = array();
        $this->_checkPermission();
        $users = $this->Friend->getUserFriends($uid, null, null);
        if (empty($users)):
            throw new ApiNotFoundException(__d('api', 'No friend found.'));
        endif;
        $this->set('users', $users);
    }

    //GET user friend list
    public function getuserlist($id) {
        $data = $this->User->findById($id);
        if (empty($data)) {
            throw new ApiNotFoundException(__d('api', 'User does not exist.'));
        }
        $canView = $this->_canViewProfile($data["User"]);
        if (!$canView) {
            throw new ApiUnauthorizedException(__d('api', 'User does not have access to this resource.'));
        }
        $users = array();
        $users = $this->Friend->getUserFriends($id, null, null);
        if (empty($users)):
            throw new ApiNotFoundException(__d('api', 'No friend found.'));
        endif;
        $this->set('users', $users);
    }

    //POST send friend request to a user.
    public function add() {
        
        $requestdata = $this->request->data;
        if (is_numeric($requestdata['user_id'])) {
            $user = $this->User->findById($requestdata['user_id']);
            if (empty($user)) {
                $this->throwErrorCodeException('user_not_exist');
                throw new ApiNotFoundException(__d('api', 'User does not exist.'));
            }
        } else {
            $this->throwErrorCodeException('');
            throw new ApiBadRequestException(__d('api', 'User id not correct.'));
        }
        if(!isset($requestdata['message'])) {
            $this->request->data['message'] = '';
        }
        $respond = parent::ajax_sendRequest(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success')
            ));
        }
    }

    //POST accept friend request from user.
    public function accept() {
        $this->request->data['status'] = 1;
        $respond = parent::ajax_respond(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success')
            ));
        }
    }

    //POST reject friend request from user.
    public function reject() {
        $this->request->data['status'] = 0;
        $respond = parent::ajax_respond(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success')
            ));
        }
    }

    //POST cancel friend request sent to user.
    public function cancel() {
        $id = intval($this->request->data['user_id']);
        $uid = $this->Auth->user('id');

        if (is_numeric($id)) {
            $user = $this->User->findById($id);
            if (empty($user)) {
                throw new ApiNotFoundException(__d('api', 'User does not exist.'));
            }
        } else {
            throw new ApiBadRequestException(__d('api', 'User id not correct.'));
        }

        if ($this->FriendRequest->existRequest($uid, $id)) {
            parent::ajax_cancel($id,false);
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success')
            ));
        } else {
            throw new ApiNotFoundException(__d('api', 'Friend request not found'));
        }
    }

    //POST delete friendship to a user
    public function delete() {
        $requestdata = $this->request->data;
        $uid = $this->Auth->user('id');
        $friend_id = $requestdata['user_id'];

        if (is_numeric($friend_id)) {
            $user = $this->User->findById($friend_id);
            if (empty($user)) {
                throw new ApiNotFoundException(__d('api', 'User does not exist.'));
            }
        } else {
            throw new ApiBadRequestException(__d('api', 'User id not correct.'));
        }
        if ($this->Friend->areFriends($uid, $friend_id)) {
            
            parent::ajax_removeRequest(false);
            
            $this->autoRender = true;
            $this->set(array(
                'success' => true,
                '_serialize' => array('success')
            ));
        }
        else {
            throw new ApiBadRequestException(__('You are not a friend of this user'));
        }
    }

}
