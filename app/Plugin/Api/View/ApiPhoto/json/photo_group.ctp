<?php

$photoHelper = MooCore::getInstance()->getHelper('Photo_Photo');
$friendModel = MooCore::getInstance()->getModel('Friend');
$photoModel = MooCore::getInstance()->getModel('Photo_Photo');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
if (empty($photos)) {
    throw new ApiNotFoundException(__d('api', 'Photo not found'));
}
else {
    foreach ($photos as $photo):
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $photoHelper->getImage($photo, array('prefix' => $size));
        }
        $photoArray[] = array(
            'id' => $photo['Photo']['id'],
            'published' => h($photo['Photo']['created']),
            'publishedTranslated' => $this->Moo->getTime($photo['Photo']['created'], Configure::read('core.date_format'), $utz),
            'caption' => $photo['Photo']['caption'],
            'thumbnail' => $imageArray,
            'privacy' => $photo['Photo']['privacy'],
            'type' => $photo['Photo']['type'],
            'url' => FULL_BASE_URL . $photo['Photo']['moo_href'],
            'commentCount' => $photo['Photo']['comment_count'],
            'likeCount' => $photo['Photo']['like_count'],
            'dislikeCount' => $photo['Photo']['dislike_count'],
            'userId' => $photo['Photo']['user_id'],
            'userName' => $photo['User']['name'],
        );
    endforeach;
    echo json_encode($photoArray);
}