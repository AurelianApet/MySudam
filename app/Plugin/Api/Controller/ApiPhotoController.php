<?php

App::uses('PhotoAppController', 'Photo.Controller');
App::uses('PhotosController', 'Photo.Controller');
/**
 * Photo Controller
 *
 */
class ApiPhotoController extends PhotosController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold;

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Photo.Album');
        $this->loadModel('Photo.Photo');
    }

    // Browse photo from a group
    public function photoGroup() {
        $respond = parent::ajax_browse('group_group',$this->request->params['group_id'],false);
        if($respond) {
            $this->_throwException($respond);
        }
    }
    // Browse photo from album
    public function photoAlbum() {
        $respond = parent::ajax_browse('Photo_Album',$this->request->params['album_id'],false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

    public function view($id=null) {
        $id = $this->request->params['photo_id'];
        parent::view($id);
    }

    // Tag a user to photo
    public function tag() {
        $this->loadModel('User');
        $user_id = $this->request->data['uid'];
        $photo_id = $this->request->data['photo_id'];
        $photo = $this->Photo->findById($photo_id);
        if (empty($photo)) {
            throw new ApiNotFoundException(__d('api', 'Photo not found'));
        }
        $user = $this->User->findById($user_id);
        if (empty($user)) {
            throw new ApiNotFoundException(__d('api', 'User not found'));
        }
        $this->_checkPermission(array('aco' => 'photo_view'));
        $this->_checkPermission(array('user_block' => $photo['Photo']['user_id']));
        $respond  = parent::ajax_tag(false);
        if(is_numeric($respond)) {
            $this->autoRender = true;
            $this->set(array(
                'message' => __d('api', 'success'),
                'id' => $respond,
                '_serialize' => array('message', 'id'),
            ));
        }
        else {
            if(is_array($respond)) {
                $this->_throwException($respond);
            }
        }
    }

    // Remove tag a user to photo
    public function removeTag() {
        $respond  = parent::ajax_remove_tag(false);
         if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __d('api', 'success'),
                '_serialize' => array('message'),
            ));
        }
    }

    //Upload photo in a group
    public function groupUpload() {
        $this->loadModel('Activity');
        $this->loadModel('Group.Group');
        $this->_checkPermission(array('aco' => 'photo_upload'));
        $group = $this->Group->findById($this->request->data['target_id']);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->request->data['type'] = 'Group_Group';
         
        if (empty($this->request->data['photos']))
        {
            throw new ApiBadRequestException(__d('api', 'Please select photo'));
        }
        $this->request->data['new_photos'] = $this->request->data['photos'];
        parent::do_activity($this->request->data['type'], false);

        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    //Set photo as profile cover photo
    public function setCover() {
        $uid = $this->Auth->user('id');

        $path = 'uploads' . DS . 'tmp' . DS;
        $url = 'uploads/tmp/';



        $photo_id = $this->request->data['photo_id'];

        $this->loadModel('Photo.Photo');
        $this->loadModel('Photo.Album');
        $aPhoto = $this->Photo->findById($photo_id);
        if (!$aPhoto) {
            throw new ApiNotFoundException(__d('api', 'Photo not found.'));
        }

        if ($aPhoto['Photo']['year_folder']) {  // hacking for MOOSOCIAL-2771
            $year = date('Y', strtotime($aPhoto['Photo']['created']));
            $month = date('m', strtotime($aPhoto['Photo']['created']));
            $day = date('d', strtotime($aPhoto['Photo']['created']));
            $photo_path = WWW_ROOT . "uploads" . DS . "photos" . DS . "thumbnail" . DS . $year . DS . $month . DS . $day . DS . $aPhoto['Photo']['id'] . DS . $aPhoto['Photo']['thumbnail'];
        } else {
            $photo_path = WWW_ROOT . 'uploads' . DS . 'photos' . DS . 'thumbnail' . DS . $aPhoto['Photo']['id'] . DS . $aPhoto['Photo']['thumbnail'];
        }

        // copy to tmp path
        $file = $photo_path;
        $newTmpAvatar = WWW_ROOT . $path . $aPhoto['Photo']['thumbnail'];
        copy($file, $newTmpAvatar);
        $newTmpAvatar1 = WWW_ROOT . $path . 'tmp_' . $aPhoto['Photo']['thumbnail'];
        copy($file, $newTmpAvatar1);

        $album = $this->Album->getUserAlbumByType($uid, 'cover');
        $title = 'Cover Pictures';

        if (empty($album)) {
            $this->Album->save(array('user_id' => $uid, 'type' => 'cover', 'title' => $title), false);
            $album_id = $this->Album->id;
            $album = $this->Album->initFields();
        } else {
            $album_id = $album['Album']['id'];
        }

        // resize image
        App::import('Vendor', 'phpThumb', array('file' => 'phpThumb/ThumbLib.inc.php'));

        $photo = PhpThumbFactory::create($path . DS . $aPhoto['Photo']['thumbnail']);

        // save to db
        $this->loadModel('Photo.Photo');
        $this->Photo->create();
        $this->Photo->set(array('user_id' => $uid,
            'target_id' => $album_id,
            'type' => 'Photo_Album',
            'thumbnail' => $path . $aPhoto['Photo']['thumbnail'],
        ));
        $this->Photo->save();

        // save album cover
        if (isset($album['Album']['cover']) && !$album['Album']['cover']) {
            $this->Album->id = $album_id;
            $this->Album->save(array('cover' => $aPhoto['Photo']['thumbnail']));
        }

        /* Create and update cover */
        $cover_path = WWW_ROOT . 'uploads' . DS . 'covers';
        $cover_loc = $cover_path . DS . $aPhoto['Photo']['thumbnail'];

        if (!file_exists($cover_path)) {
            mkdir($cover_path, 0755, true);
            file_put_contents(WWW_ROOT . $path . DS . 'index.html', '');
        }

        // resize image
        $cover = PhpThumbFactory::create($path . 'tmp_' . $aPhoto['Photo']['thumbnail'], array('jpegQuality' => PHOTO_QUALITY));
        $cover->adaptiveResize(COVER_WIDTH, COVER_HEIGHT)->save($cover_loc);

        // delete tmp thumbnail
        if (file_exists(WWW_ROOT . $path . 'tmp_' . $aPhoto['Photo']['thumbnail'])) {
            unlink(WWW_ROOT . $path . 'tmp_' . $aPhoto['Photo']['thumbnail']);
        }

        $this->loadModel('User');
        $user = $this->User->findById($uid);

        // delete old files
        $this->User->removeCoverFile($user['User']);

        // update user cover pic in db
        $this->User->id = $uid;
        $this->User->save(array('cover' => $aPhoto['Photo']['thumbnail']));

        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    //Set photo as avatar photo
    public function setAvatar() {
        $uid = $this->Auth->user('id');

        $path = 'uploads' . DS . 'tmp' . DS;

        $photo_id = $this->request->data['photo_id'];

        $this->loadModel('Photo.Photo');
        $this->loadModel('Photo.Album');
        $aPhoto = $this->Photo->findById($photo_id);
        if (!$aPhoto) {
            throw new ApiNotFoundException(__d('api', 'Photo not found.'));
        }

        if ($aPhoto['Photo']['year_folder']) {  // hacking for MOOSOCIAL-2771
            $year = date('Y', strtotime($aPhoto['Photo']['created']));
            $month = date('m', strtotime($aPhoto['Photo']['created']));
            $day = date('d', strtotime($aPhoto['Photo']['created']));
            $photo_path = WWW_ROOT . "uploads" . DS . "photos" . DS . "thumbnail" . DS . $year . DS . $month . DS . $day . DS . $aPhoto['Photo']['id'] . DS . $aPhoto['Photo']['thumbnail'];
        } else {
            $photo_path = WWW_ROOT . 'uploads' . DS . 'photos' . DS . 'thumbnail' . DS . $aPhoto['Photo']['id'] . DS . $aPhoto['Photo']['thumbnail'];
        }

        // copy to tmp path
        $file = $photo_path;
        $newTmpAvatar = WWW_ROOT . $path . $aPhoto['Photo']['thumbnail'];
        $newTmpAvatar1 = WWW_ROOT . $path . 'tmp_' . $aPhoto['Photo']['thumbnail'];
        copy($file, $newTmpAvatar);

        copy($file, $newTmpAvatar1);

        $album = $this->Album->getUserAlbumByType($uid, 'profile');
        $title = 'Profile Pictures';

        if (empty($album)) {
            $this->Album->save(array('user_id' => $uid, 'type' => 'profile', 'title' => $title), false);
            $album_id = $this->Album->id;
            $album = $this->Album->initFields();
        } else {
            $album_id = $album['Album']['id'];
        }

        // save to db
        $this->loadModel('Photo.Photo');
        $this->Photo->create();
        $this->Photo->set(array('user_id' => $uid,
            'target_id' => $album_id,
            'type' => 'Photo_Album',
            'thumbnail' => $path . $aPhoto['Photo']['thumbnail'],
        ));
        $this->Photo->save();

        if (isset($album['Album']['cover']) && !$album['Album']['cover']) {
            $this->Album->save(array('cover' => $aPhoto['Photo']['thumbnail']));
            $this->Album->id = $album_id;
        }

        $this->loadModel('User');
        $user = $this->User->findById($uid);

        $this->User->id = $uid;
        $this->User->set(array('avatar' => $path . 'tmp_' . $aPhoto['Photo']['thumbnail']));
        $this->User->save();

        // insert into activity feed
        if ($user['User']['last_login'] != $user['User']['created']) {
            $this->loadModel('Activity');
            $activity = $this->Activity->getRecentActivity('user_avatar', $uid);

            if (empty($activity)) {
                $this->Activity->save(array('type' => 'user',
                    'action' => 'user_avatar',
                    'user_id' => $uid
                ));
            }
        }

        $this->set(array(
            'message' => __d('api', 'success'),
            '_serialize' => array('message'),
        ));
    }

    //Update caption photo
    public function caption() {
        $photo_id = '';
        if ($this->request->is('put')) {
            $data = $this->request->input('json_decode');
            $caption = $data->caption ? $data->caption : $this->request->data['caption'];
            $photo_id = $data->photo_id ? $data->photo_id : $this->request->data['photo_id'];
        } else {
            $caption = $this->request->data['caption'];
            $photo_id = $this->request->data['photo_id'];
        }
        $this->loadModel('Photo.Photo');
        $this->loadModel('Photo.Album');
        $aPhoto = $this->Photo->findById($photo_id);
        $this->_checkPermission(array('admins' => array($aPhoto['Photo']['user_id'])));
        $this->_checkPermission(array('aco' => 'album_create'));
        if (!$aPhoto) {
            throw new ApiNotFoundException(__d('api', 'Photo not found.'));
        }
        $this->Photo->id = $aPhoto['Photo']['id'];
        $this->Photo->save(array('caption' => $caption));
        $this->set(array(
            'message' => __d('api', 'success'),
            'id' => $this->Photo->id,
            '_serialize' => array('message', 'id'),
        ));
    }

    // Delete a photo
    public function delete() {
        $respond = parent::ajax_remove(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __d('api', 'success'),
                '_serialize' => array('message'),
            ));
        }
    }

    public function saveAlbumPhoto()
    {
        //validate
        $data = $this->request->data;
        if (empty($data['type']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Type is REQUIRED'));
        }
        else if (empty($data['target_id']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Target id is REQUIRED'));
        }
        else if(!$this->Album->hasAny(array(
            'Album.id' => $data['target_id']
        )))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Album could not be found'));
        }
        else if (empty($data['photos']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Photo is REQUIRED'));
        }
        $this->request->data['new_photos'] = $data['photos'];
        parent::do_activity($data['type'], false);
        
        /* Set cover photo for new album */
        $album = $this->Album->findById($data['target_id']);
        $photos = $this->Photo->getPhotos('Photo_Album', $data['target_id'], null, null);
        if (!$album['Album']['cover'] && count($photos) > 0) {
            $this->Album->id = $data['target_id'];
            $this->Album->save(array('cover' => $photos[0]['Photo']['thumbnail']));
        }
        
        $this->set(array(
            'message' => 'success',
            '_serialize' => array('message'),
        ));
    }
    
    public function getAlbumProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_album($id,false);
    }
}
