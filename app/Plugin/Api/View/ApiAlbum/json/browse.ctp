<?php

$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
$photoHelper = MooCore::getInstance()->getHelper('Photo_Photo');
$friendModel = MooCore::getInstance()->getModel('Friend');
$photoModel = MooCore::getInstance()->getModel('Photo_Photo');
if (empty($albums)) {
    throw new ApiNotFoundException(__d('api', 'Album not found'));
}
else {
    foreach ($albums as $album): //echo '<pre>';print_r($album);die;
        $covert = array();
        if ($album['Album']['type'] == 'newsfeed' &&  $role_id != ROLE_ADMIN && $uid != $album['Album']['user_id'] && (!$uid || $friendModel->areFriends($uid,$album['Album']['user_id'])))  
        {    		
            $photo = $photoModel->getPhotoCoverOfFeedAlbum($album['Album']['id']);
                if ($photo)
                {
                    //$covert = $photoHelper->getImage($photo, array('prefix' => '150_square'));
                    foreach ($photoSizes as $size) {
                        $covert[$size] = $photoHelper->getImage($photo, array('prefix' => $size));
                    }
                }
                else
                {
                    //$covert = $photoHelper->getAlbumCover('', array('prefix' => '150_square'));
                    foreach ($photoSizes as $size) {
                        $covert[$size] = $photoHelper->getAlbumCover($photo, array('prefix' => $size));
                    }
                }
        }
        else
        {
            //$covert = $photoHelper->getAlbumCover($album['Album']['cover'], array('prefix' => '150_square'));
            foreach ($photoSizes as $size) {
                        $covert[$size] = $photoHelper->getAlbumCover($album['Album']['cover'], array('prefix' => $size));
                    }
        }

        $albumArray[] = array(
            'id' => $album['Album']['id'],
            'published' => h($album['Album']['created']),
            'publishedTranslated' => $this->Moo->getTime($album['Album']['created'], Configure::read('core.date_format'), $utz),
            'title' => h($album['Album']['title']),
            'description' => $album['Album']['description'],
            'thumbnail' => $covert,
            'privacy' => $album['Album']['privacy'],
            'type' => $album['Album']['type'],
            'categoryId' => $album['Album']['category_id'],
            'categoryName' => $album['Category']['name'],
            'commentCount' => $album['Album']['comment_count'],
            'likeCount' => $album['Album']['like_count'],
            'dislikeCount' => $album['Album']['dislike_count'],
            'userId' => $album['Album']['user_id'],
            'userName' => $album['User']['name'],
            'photoCount' => $album['Album']['photo_count'],
            'url' => FULL_BASE_URL . $album['Album']['moo_href'],
        );
    endforeach;
    echo json_encode($albumArray);
}