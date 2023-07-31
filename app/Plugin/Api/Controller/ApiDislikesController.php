<?php

App::uses('LikesController','Controller');

/**
 * Likes Controller
 *
 */
class ApiDislikesController extends LikesController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Activity');
        $this->loadModel('Like');
    }

    // POST unlike an item
    public function delete() {
        
        $objectType = $this->request->params['objectType'];
        $id = $this->request->data['id'];
        $uid = $this->Auth->user('id');

        $type = $this->_getType($objectType);
        $like = $this->Like->getUserLike($id, $uid, $type);
        if (empty($like) ||  $like['Like']['thumb_up'] != 0) {
            throw new ApiBadRequestException(__d('api', 'This item is not disliked yet '));
        }
        $thumb_up = 0;
        parent::ajax_add($type,$id,$thumb_up,false);

        $this->autoRender = true;
        $this->set(array(
            'success' => true,
            '_serialize' => array('success')
        ));
        
    }

    // POST like an item
    public function add() {
        $objectType = $this->request->params['objectType'];
        $id = $this->request->data['id'];
        $uid = $this->Auth->user('id');

        $type = $this->_getType($objectType);
        $like = $this->Like->getUserLike($id, $uid, $type);
        if (!empty($like)) { // user already disliked this item
            if ($like['Like']['thumb_up'] == 0) {
                throw new ApiBadRequestException(__d('api', 'Item already disliked'));
            }
        }
        $thumb_up = 0;
        parent::ajax_add($type,$id,$thumb_up,false);

        $this->autoRender = true;
        $this->set(array(
            'success' => true,
            '_serialize' => array('success')
        ));
    }

    // GET display people who liked that item 
    public function view() {
        
        $objectType = $this->request->params['objectType'];
        $id = $this->request->params['id'];
        $type = $this->_getType($objectType);
        parent::ajax_show($type,$id,1,false);
    }

}
