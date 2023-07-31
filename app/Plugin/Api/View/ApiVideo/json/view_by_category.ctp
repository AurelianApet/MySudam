<?php
$videoHelper = MooCore::getInstance()->getHelper('Video_Video');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
if (empty($videos)) {
    throw new ApiNotFoundException(__d('api', 'Video not found'));
}
else {
    foreach ($videos as $video):
        $imageArray = $userImageArray = array();
        $userImageArray = array(
            '50_square' => $this->Moo->getItemPhoto(array('User' => $video['User']), array('prefix' => '50_square'), array(), true),
            '100_square' => $this->Moo->getItemPhoto(array('User' => $video['User']), array('prefix' => '100_square'), array(), true),
            '200_square' => $this->Moo->getItemPhoto(array('User' => $video['User']), array('prefix' => '200_square'), array(), true),
            '600' => $this->Moo->getItemPhoto(array('User' => $video['User']), array('prefix' => '600'), array(), true),
        );
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $videoHelper->getImage($video, array('prefix' => $size));
        }
        $videoArray[] = array(
            'id' => $video['Video']['id'],
            'created' => $this->Moo->getTime($video['Video']['created'], Configure::read('core.date_format'), $utz),
            'title' => h($video['Video']['title']),
            'description' => $video['Video']['description'],
            'thumbnail' => $imageArray,
            'videoType' => $video['Video']['source'],
            'privacy' => $video['Video']['privacy'],
            'categoryId' => $video['Video']['category_id'],
            'commentCount' => $video['Video']['comment_count'],
            'likeCount' => $video['Video']['like_count'],
            'dislikeCount' => $video['Video']['dislike_count'],
            'userId' => $video['Video']['user_id'],
            'userName' => $video['User']['name'],
            'userAvatar' => $userImageArray,
            'url' => FULL_BASE_URL .  $video['Video']['moo_href'],
        );
    endforeach;
    echo json_encode($videoArray);
}