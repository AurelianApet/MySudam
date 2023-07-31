<?php
App::uses('PhotoAppController','Photo.Controller');
App::uses('PhotoUploadController','Photo.Controller');
class UploadAlbumController extends PhotoUploadController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->autoRender = true;
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
    }
    
    public function upload_photo()
    {
        $data = $this->request->data;
        parent::album(true, true);
        exit;
    }
}