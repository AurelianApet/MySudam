<?php
if($user) {
$user = $user['User'];
$userImageArray = array();
$userImageArray = array(
    '50_square' => $this->Moo->getItemPhoto(array('User' => $user), array('prefix' => '50_square'), array(), true),
    '100_square' => $this->Moo->getItemPhoto(array('User' => $user), array('prefix' => '100_square'), array(), true),
    '200_square' => $this->Moo->getItemPhoto(array('User' => $user), array('prefix' => '200_square'), array(), true),
    '600' => $this->Moo->getItemPhoto(array('User' => $user), array('prefix' => '600'), array(), true),
);

$access = false;
if ($canView) $access = true ;

$requestId = $userCase = $userStatus = '';
        if ( $this->MooPeople->sentFriendRequest($user['id'])): 
            $userStatus =  __('Cancel');
            $userCase = 4;
        elseif ($this->MooPeople->respondFriendRequest($user['id'])): 
            $userStatus =  __('Respond');
            $userCase = 3;
            $requestId = isset($request_id) ? $request_id : '';
        elseif ($this->MooPeople->isFriend($user['id'])): 
            $userStatus =  __('Remove');     
            $userCase = 2;
        elseif ($user['id'] != $uid): 
            $userStatus = __('Add');
            $userCase = 1;
        endif;
    $follow = $enableFollow = false;
    if ($uid && Configure::read("core.enable_follow") && $uid != $user['id']):
        $followModel = MooCore::getInstance()->getModel("UserFollow");
        $follow = $followModel->checkFollow($uid,$user['id']);
       if ($follow) $follow = true;
       else $follow = false;
       $enableFollow = true;
    endif;

$userArray = array(
    'id' => $user['id'],
    'name' => $user['name'],
    'email' => $user['email'],
    'avatar' => $userImageArray,
    'last_login' => $user['last_login'],
    'photo_count' => $user['photo_count'],
    'friend_count' => $user['friend_count'],
    'notification_count' => $user['notification_count'],
    'friend_request_count' => $user['friend_request_count'],
    'blog_count' => $user['blog_count'],
    'topic_count' => $user['topic_count'],
    'conversation_user_count' => $user['conversation_user_count'],
    'video_count' => $user['video_count'],
    'gender' => $user['gender'],
    'birthday' => $user['birthday'],
    'birthdayFormat' => $this->Time->event_format($user['birthday'], '%B %d'),
    'timezone' => $user['timezone'],
    'about' => $user['about'],
    'lang' => $user['lang'],
    'cover' => FULL_BASE_URL.((!empty( $user['cover']) ? ($this->request->webroot."uploads/covers/".$user['cover']):($this->request->webroot."img/cover.jpg"))),
    'profile_url'=>FULL_BASE_URL.$user['moo_href'],
    'userStatus' => $userStatus,
    'userCase' => $userCase ,
    'requestId' => $requestId,
    'canView' =>$access,
    'follow' =>$follow,
    'enableFollow' =>$enableFollow,
);
echo json_encode($userArray);
} else {
    throw new ApiNotFoundException(__d('api', 'User does not exist.'));
}