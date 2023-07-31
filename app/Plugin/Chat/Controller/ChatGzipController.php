<?php
App::uses('Controller', 'Controller');
class ChatGzipController extends Controller{
    public $components = array('Cookie');
    public function moochat($type='desktop'){
        //error_reporting(0);
        header('Content-encoding: gzip');
        header('Content-Type: text/javascript;charset=utf-8');
        header('Cache-Control: public,max-age=31536000,immutable');
        header('Expires: ' . date('r', time() + 31536000));
        switch ($type){
            case 'mobi':
                echo file_get_contents(APP.WEBROOT_DIR.DS."chat".DS."js".DS."client".DS."mooChat-mobile.js.gz");
                break;
            default:
                echo file_get_contents(APP.WEBROOT_DIR.DS."chat".DS."js".DS."client".DS."mooChat.js.gz");
        }

        die();
    }
}