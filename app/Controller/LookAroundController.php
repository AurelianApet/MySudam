<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

class LookAroundController extends AppController {
	
        
	public $paginate = array( 'order' => 'User.id desc', 'limit' => RESULTS_LIMIT );
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->loadmodel('LookAround');
	}

	public function index() {
        $uid = $this->Auth->user('id');

        if(empty($uid))
        {
            $this->Session->setFlash( __('You have logged in, so you can not view that page.'), 'default', array('class' => 'error-message') );
            $this->redirect( '/users/member_login' );
        }

        $count = 10;
        $commended_friends = $this->LookAround->getRecommendedFriends($uid, $count);
        
        $count = 6;
        $hotpics = $this->LookAround->getHotPics($count);
        $hotdogs = $this->LookAround->getHotDogs($count);
        $coldcats = $this->LookAround->getColdCats($count);
        $otherpets = $this->LookAround->getOtherPets($count);

        $this->set('friends', $commended_friends);
        $this->set('hotpics', $hotpics);
        $this->set('hotdogs', $hotdogs);
        $this->set('coldcats', $coldcats);
        $this->set('otherpets', $otherpets);

        $this->set('show_count', $count);
    }

    public function hotpics() {
        $hotpics = $this->LookAround->getHotpics();
        $this->set('hotpics', $hotpics);

        $this->render('/LookAround/hotpics');
    }

    public function hotdogs() {
        $hotdogs = $this->LookAround->getHotdogs();
        $this->set('hotdogs', $hotdogs);

        $this->render('/LookAround/hotdogs');
    }

    public function coldcats() {
        $coldcats = $this->LookAround->getColdcats();
        $this->set('coldcats', $coldcats);

        $this->render('/LookAround/coldcats');
    }

    public function otherpets() {
        $otherpets = $this->LookAround->getOtherpets();
        $this->set('otherpets', $otherpets);

        $this->render('/LookAround/otherpets');
    }

    public function search($keyword){
        $uid = $this->Auth->user('id');

        $friends = $this->LookAround->search($uid, $keyword);

        $this->set('user_id', $uid);
        $this->set('friends', $friends);

        $this->render('/LookAround/search');
    }


}
 
