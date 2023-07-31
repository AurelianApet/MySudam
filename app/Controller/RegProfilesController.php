<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

class RegProfilesController extends AppController
{
    public function _getExtension($filename = null) {
        $tmp = explode('.', $filename);
        $re = array_pop($tmp);
        return $re;
    }

    private function _prepareDir($path) {
        $path = WWW_ROOT . $path;

        if (!file_exists($path)) {
            mkdir($path, 0755, true);
            file_put_contents($path . DS . 'index.html', '');
        }
    }

    public  function index()
    {
        $this->loadModel("User");
        $user_id = $this->Auth->user('id');
        $user = $this->User->findById($user_id);
        $this->loadModel("Companion");
        $ani_id = $this->Companion->find('first', array('conditions'=>array('Companion.id'=>$user['User']['ani_id'])));
        $this->set('ani_type', $ani_id['Companion']['ani_type']);
        $this->set('ani_gender', $ani_id['Companion']['gender']);
        $this->set('ani_name', $ani_id['Companion']['name']);
        $this->set('ani_avatar', $ani_id['Companion']['imagePath']);
        $this->set('uid', $user_id);
        $this->loadModel("Animal");
        $animalType = $this->Animal->find('first', array('conditions'=>array('Animal.id'=>$ani_id['Companion']['type'])));
        $this->set('ani_style', $animalType['Animal']['content']);
    }

    public function save()
    {
        $this->loadModel("User");
        $user_id = $this->Auth->user('id');
        $ani_name = $this->request->data['ani_name'];
        $ani_type = $this->request->data['ani_type'];
        $ani_style = $this->request->data['ani_style'];
        $ani_gender = $this->request->data['ani_gender'];
        $ani_birthday = $this->request->data['ani_birthday'];

        $this->set('ani_type', $ani_type);
        $this->set('ani_gender', $ani_gender);
        $this->set('ani_name', $ani_name);
        $this->set('uid', $user_id);

        $user = $this->User->findById($user_id);
        $this->set('cuser', $user['User']);
        $this->loadModel("Companion");

        $ani_id = $this->Companion->find('first', array('conditions'=>array('Companion.id'=>$user['User']['ani_id'])));
        $this->Companion->id = $user['User']['ani_id'];
        $this->Companion->saveField('name', $ani_name);
        $this->Companion->saveField('gender', $ani_gender);
        $this->Companion->saveField('ani_type', $ani_type);
        $this->Companion->saveField('ani_birthday', $ani_birthday);



        $this->loadModel("Animal");
        $animalType = $this->Animal->find('first', array('conditions'=>array('Animal.content'=>$ani_style)));
        $this->Companion->saveField('type', $animalType['Animal']['id']);

        if ( 0 < $_FILES['file']['error'] ) {
            echo '사진 업로드중 오류가 발생했습니다.' . '<br>';
        }
        else {
            $path = WWW_ROOT . 'uploads' . DS . 'users' . DS . 'avatar' . DS . $user_id . DS;
            $filename = md5(microtime()) . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $file_path = $path . $filename;
            move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
            $this->User->saveField('avatar', $filename);
            $this->Companion->saveField('imagePath', $filename);
            $this->set('ani_avatar', $filename);
        }
        $this->render('/RegProfiles');
    }
}