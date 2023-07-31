<?php
$userList['totalFriendCount'] = count($users);
$photoSizes = array('50_square', '100_square', '200_square', '600');
foreach ($users as $i =>  $user ) :
    $imageArray = array();
    foreach ($photoSizes as $size) {
        $imageArray[$size] = $this->Moo->getImageUrl(array('User'=>$user['User']), array('prefix' => $size));
    }
    $userList['friend'][] = array(
        'url' => FULL_BASE_URL . $user['User']['moo_href'],
        'type' => $user['User']['moo_type'],
        'id' => $user['User']['id'],
        'name' => $user['User']['name'],
        'photoCount' => $user['User']['photo_count'],
        'friendCount' => $user['User']['friend_count'],
        'image' => $imageArray,
        );
endforeach; 
echo json_encode($userList);