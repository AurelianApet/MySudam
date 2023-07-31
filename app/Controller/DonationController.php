<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

class DonationController extends AppController {
	
        
	public $paginate = array( 'order' => 'User.id desc', 'limit' => RESULTS_LIMIT );
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->loadmodel('Donation');
	}

	public function index() {
        $uid = $this->Auth->user('id');

        if(empty($uid))
        {
            $this->Session->setFlash( __('You have logged in, so you can not view that page.'), 'default', array('class' => 'error-message') );
            $this->redirect( '/users/member_login' );
        }

        $title = date("Y년 m월")." 기부현황";
        $dog_donation_amounts = $this->Donation->getDonationAmountsByMonth(1);
        $cat_donation_amounts = $this->Donation->getDonationAmountsByMonth(2);

        $dog_height = 100;
        $cat_height = 100;
        if($dog_donation_amounts == 0){
            $dog_height = 0;
        }
        
        if($cat_donation_amounts == 0){
            $cat_height = 0;
        }

        if($dog_donation_amounts > 0 && $cat_donation_amounts > 0){
            if($dog_donation_amounts > $cat_donation_amounts) {
                $cat_height = $cat_donation_amounts / $dog_donation_amounts * 100;
            }
            else{
                $dog_height = $dog_donation_amounts / $cat_donation_amounts * 100;
            }
        }

        $this->set('title', $title);
        $this->set('dog_donation_amounts', $dog_donation_amounts);
        $this->set('cat_donation_amounts', $cat_donation_amounts);
        $this->set('dog_height', $dog_height);
        $this->set('cat_height', $cat_height);
    }

    public function donate($type = 1) {
        $uid = $this->Auth->user('id'); 

        if(empty($uid))
        {
            $this->Session->setFlash( __('You have logged in, so you can not view that page.'), 'default', array('class' => 'error-message') );
            $this->redirect( '/users/member_login' );
        }

        $donation_info = $this->Donation->getDonationInfo($uid, $type);
        $this->set('uid', $uid);
        $this->set('type', $type);
        $this->set('donation_info', $donation_info);
    }

    public function donatePoint($type = 1){
        $uid = $this->Auth->user('id'); 

        $this->loadModel("Users");
        $ret = $this->Users->find("first", array('conditions'=>array('Users.id'=>$uid)));
        $amount = $ret["Users"]["point"];

        if($amount > 0){
            $this->loadModel("Donation");
            $this->Donation->set(array(
                'user_id' => $uid,
                'target_id' => null,
                'message' => null,
                'created' => date('Y-m-d'),
                'type'  => $type,
                'amount' => $amount
            ));
            $this->Donation->save();

            $this->Users->id = $uid;
            $this->Users->set(array(
                'point' => '0'
            ));
            $this->Users->save();
        }

        $this->render('/Donation/donatePoint');
    }

    public function mydonation(){

    }
}
 
