<?php

App::uses('PhotoAppController', 'Photo.Controller');
App::uses('AlbumsController', 'Photo.Controller');
/**
 * Albums Controller
 *
 * @property Album $Album
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApiAlbumController extends AlbumsController {

    /**
     * Components
     *
     * @var array
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Photo.Album');
        $this->loadModel('Photo.Photo');
    }

    public $components = array('Paginator', 'Session');

    public function browse($type = null,$param = null,$isRedirect = false) {
        $param = '';
        if (!isset($this->request->params['type']))
            $type = 'search';
        else
            $type = $this->request->params['type'];
        if ($type == 'filter')
            $type = 'search';
        if (!empty($this->request->params['category_id'])) {
            $type = 'category';
            $param = $this->request->params['category_id'];
        }
        parent::browse($type,$param,false);
    }

    public function view($id = null) {
        $id = $this->request->params['album_id'];
        parent::view($id);
    }

    public function save($isRedirect =  true) {

        if (!isset($this->request->data['title']) || !isset($this->request->data['category_id'])) {
            if (!isset($this->request->data['title']))
                throw new ApiBadRequestException(__d('api', 'album title is missing.'));
            if (!isset($this->request->data['category_id']) && !isset($this->request->data['group_id']))
                throw new ApiBadRequestException(__d('api', 'album category is missing.'));
        }
        $id  = parent::save(true);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', 'success'),
            'id' => $id,
            '_serialize' => array('message', 'id'),
        ));
    }

//    public function uploadPhoto() {
//        $uid = $this->Auth->user('id');
//        $this->loadModel('Activity');
//        $this->_checkPermission(array('aco' => 'photo_upload'));
//        $album = $this->Album->findById($this->request->data['target_id']);
//        if (empty($album)) {
//            throw new ApiNotFoundException(__d('api', 'Album not found'));
//        }
//        $this->_checkPermission(array('aco' => 'album_view'));
//        $this->_checkPermission(array('user_block' => $album['Album']['user_id']));
//        if ( $uid != $album['User']['id'] ){
//            throw new ApiUnauthorizedException(__d('api', 'Only the poster can upload photo.'));
//        }
//        $photoList = array();
//
//        if (isset($_FILES['qqfile'])) {
//            foreach ($_FILES['qqfile']['name'] as $i => $wallphoto):
//                $wallphotos[$i]['name'] = $wallphoto;
//            endforeach;
//            foreach ($_FILES['qqfile']['size'] as $i => $wallphoto):
//                $wallphotos[$i]['size'] = $wallphoto;
//            endforeach;
//            foreach ($_FILES['qqfile']['type'] as $i => $wallphoto):
//                $wallphotos[$i]['type'] = $wallphoto;
//            endforeach;
//            foreach ($_FILES['qqfile']['tmp_name'] as $i => $wallphoto):
//                $wallphotos[$i]['tmp_name'] = $wallphoto;
//            endforeach;
//            foreach ($_FILES['qqfile']['error'] as $i => $wallphoto):
//                $wallphotos[$i]['error'] = $wallphoto;
//            endforeach;
//
//            foreach ($wallphotos as $wallphoto):
//                $_FILES['qqfile'] = $wallphoto;
//                $upload = $this->_uploadThumbnail();
//                $file[] = $upload['file'];
//            endforeach;
//            $photoList = $file;
//        }
//        else {
//            throw new ApiBadRequestException(__d('api', 'Please select photo'));
//        }
//        
//
//        $this->request->data['type'] = 'Photo_Album';
//        $this->request->data['user_id'] = $uid;
//
//        $photoId = array();
//        foreach ($photoList as $photoItem) {
//            if (!empty($photoItem)) {
//                $this->request->data['thumbnail'] = $photoItem;
//                $this->Photo->create();
//
//                $this->Photo->set($this->request->data);
//                $this->Photo->save();
//                array_push($photoId, $this->Photo->id);
//            }
//        }
//
//        $activity = $this->Activity->getItemActivity('Photo_Album', $this->request->data['target_id']);
//
//        if (!empty($activity)) { // update the existing one
//            $this->Activity->id = $activity['Activity']['id'];
//            $this->Activity->save(array('items' => join(',', $photoId), 'privacy' => $album['Album']['privacy']));
//        } else // insert new
//            $this->Activity->save(array('type' => APP_USER,
//                'action' => 'photos_add',
//                'user_id' => $uid,
//                'items' => join(',', $photoId),
//                'item_type' => 'Photo_Album',
//                'item_id' => $this->request->data['target_id'],
//                'privacy' => $album['Album']['privacy'],
//                'query' => 1,
//                'params' => 'item',
//                'plugin' => 'Photo'
//            ));
//
//        // update privacy photo album
//        $this->Photo->updateAll(array('Photo.privacy' => $album['Album']['privacy']), array('Photo.id' => $photoId));
//
//        $event = new CakeEvent('Plugin.Controller.Album.afterSaveAlbum', $this, array(
//            'uid' => $uid,
//            'id' => $album['Album']['id'],
//            'privacy' => $album['Album']['privacy']
//        ));
//
//        $this->getEventManager()->dispatch($event);
//        $this->set(array(
//            'message' => __d('api', 'success'),
//            '_serialize' => array('message'),
//        ));
//    }

    public function setAlbumCover() {


        $album = $this->Album->findById($this->request->data['id']);
        if (empty($album)) {
            throw new ApiNotFoundException(__d('api', 'Album not found'));
        }
        $this->_checkPermission(array('admins' => array($album['User']['id'])));
        $photo = $this->Photo->findById($this->request->data['photo_id']);
        if (empty($photo)) {
            throw new ApiNotFoundException(__d('api', 'Photo not found'));
        }
        if ($photo['Photo']['target_id'] != $this->request->data['id']) {
            throw new ApiBadRequestException(__d('api', 'Photo not belong to this album.'));
        }

        $nextCoverPhoto = $this->Photo->find('first', array('conditions' => array('Photo.type' => 'Photo_Album', 'Photo.id' => $photo['Photo']['id'])));
        $currentCoverPhoto = $this->Album->find('first', array('conditions' => array('Album.id' => $photo['Photo']['target_id'])));
        if (!empty($nextCoverPhoto)) {
            // cond1: delete item is cover => need to update cover
            // cond2: current album have no cover => need to update cover
            if ($photo['Photo']['thumbnail'] != $currentCoverPhoto['Album']['cover'] || empty($currentCoverPhoto['Album']['cover'])) {
                $this->Album->id = $photo['Photo']['target_id']; //echo $nextCoverPhoto['Photo']['thumbnail'];die;
                $this->Album->save(array(
                    'cover' => $nextCoverPhoto['Photo']['thumbnail']
                ));
            }
        }
        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    public function delete() {
        $respond = parent::do_delete($this->request->params['album_id'],false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

}
