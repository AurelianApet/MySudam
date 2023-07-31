<?php
if(empty($users)) {
            throw new ApiNotFoundException(__d('api', 'User not found'));
}
else {
foreach ($users as  $user ) :
    $imageArray = array();
    $imageArray = array(
        '50_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '50_square'), array(), true),
        '100_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '100_square'), array(), true),
        '200_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '200_square'), array(), true),
        '600' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '600'), array(), true),
    );
    
     $requestId = $userCase = $userStatus = '';
        if ( $this->MooPeople->sentFriendRequest($user['User']['id'])): 
            $userStatus =  __('Cancel');
            $userCase = 4;
        elseif ($this->MooPeople->respondFriendRequest($user['User']['id'])): 
            $userStatus =  __('Respond');
            $userCase = 3;
            $requestId = isset($request_id[$user['User']['id']]) ? $request_id[$user['User']['id']] : '';
        elseif ($this->MooPeople->isFriend($user['User']['id'])): 
            $userStatus =  __('Remove');     
            $userCase = 2;
        elseif ($user['User']['id'] != $uid): 
            $userStatus = __('Add');
            $userCase = 1;
        endif; 
    
    
    $userArray[] = array (
        'name' => $user['User']['name'],
        'url' =>  FULL_BASE_URL . $user['User']['moo_href'],
        'avatar' => $imageArray,
        'id' => $user['User']['id'] ,
        'type' => $user['User']['moo_type'],
        'friendCount' => __n('%s friend', '%s friends', $user['User']['friend_count'], $user['User']['friend_count']),
        'photoCount' => __n('%s photo', '%s photos', $user['User']['photo_count'], $user['User']['photo_count']),
        'userStatus' => $userStatus,
        'userCase' => $userCase ,
        'requestId' => $requestId
    );
endforeach;

echo json_encode($userArray);
}