<?php
$userImageArray = array();
$userImageArray = array(
    '50_square' => $this->Moo->getItemPhoto(array('User' => $me), array('prefix' => '50_square'), array(), true),
    '100_square' => $this->Moo->getItemPhoto(array('User' => $me), array('prefix' => '100_square'), array(), true),
    '200_square' => $this->Moo->getItemPhoto(array('User' => $me), array('prefix' => '200_square'), array(), true),
    '600' => $this->Moo->getItemPhoto(array('User' => $me), array('prefix' => '600'), array(), true),
);
echo json_encode(array_merge(array(
    'id' => $me['id'],
    'name' => $me['name'],
    'email' => $me['email'],
    'avatar' => $userImageArray,
    'last_login' => $me['last_login'],
    'photo_count' => $me['photo_count'],
    'friend_count' => $me['friend_count'],
    'notification_count' => $me['notification_count'],
    'friend_request_count' => $me['friend_request_count'],
    'blog_count' => $me['blog_count'],
    'topic_count' => $me['topic_count'],
    'conversation_user_count' => $me['conversation_user_count'],
    'video_count' => $me['video_count'],
    'gender' => $me['gender'],
    'birthday' => $me['birthday'],
    'timezone' => $me['timezone'],
    'about' => $me['about'],
    'lang' => $me['lang'],
    'cover' =>  $this->storage->getUrl($me["id"],'',$me['cover'],"moo_covers"),
    'profile_url'=>FULL_BASE_URL.$me['moo_href'],
),$extra));