<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

class AnimalsController extends AppController {

	public function index() {

    }

    public function getDogData(){
/*
        $this->loadModel("Animal");
        $animal = $this->Animal ->find('all', array('conditions'=>array('Animal.type'=>1)));
        $animalContent = "";
        foreach($animal as $ani)
        {
            $animalContent .= $ani['Animal']['content'] . ",";
        }
        $this->set('content', $animalContent);
*/
        $this->render('/Animals/getDogData');
    }

    public function getDogDataList(){
        /*
                $user_id = $this->Auth->user('id');
                $user = $this->User->findById($user_id);
                $this->loadModel("Animal");
                $animalType = $this->Animal->findById($user['User']['ani_id']);
                $this->set('content', $animalType['Animal']['content']);
                $this->render('/Animals/getDogData');
        */
        $this->loadModel("Animal");
        $animal = $this->Animal ->find('all', array('conditions'=>array('Animal.type'=>'1')));
        $animalContent = "";
//        echo count($animal);
        foreach($animal as $ani)
        {
            $animalContent .= $ani['Animal']['content'] . ",";
        }
        $this->set('content', $animalContent);
        $this->render('/Animals/getDataList');
    }

    public function getCatData(){
/*
        $this->loadModel("Animal");
        $animal = $this->Animal->find('all', array('conditions'=>array('Animal.type'=>2)));
        $animalContent = "";
        foreach($animal as $ani)
        {
            $animalContent .= $ani['Animal']['content'] . ",";
        }
        $this->set('content', $animalContent);
*/
        $this->render('/Animals/getCatData');
    }

    public function getCatDataList(){
        $this->loadModel("Animal");
        $animal = $this->Animal->find('all', array('conditions'=>array('Animal.type'=>2)));
        $animalContent = "";
//        echo count($animal);
        foreach($animal as $ani)
        {
            $animalContent .= $ani['Animal']['content'] . ",";
        }
        $this->set('content', $animalContent);
        $this->render('/Animals/getDataList');
    }

    public function getContactData(){
        $this->render('/Animals/getContactData');
    }
}
 
