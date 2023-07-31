<?php

foreach ($users as  $user ) :
    $imageArray = array();
    $imageArray = array(
        '50_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '50_square'), array(), true),
        '100_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '100_square'), array(), true),
        '200_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '200_square'), array(), true),
        '600' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '600'), array(), true),
    );
    
    $userArray[] = array (
        'name' => $user['User']['name'],
        'url' =>  FULL_BASE_URL . $user['User']['moo_href'],
        'avatar' => $imageArray,
        'id' => $user['User']['id'] ,
        'type' => $user['User']['moo_type'],
        'friendCount' => __n('%s friend', '%s friends', $user['User']['friend_count'], $user['User']['friend_count']),
        'photoCount' => __n('%s photo', '%s photos', $user['User']['photo_count'], $user['User']['photo_count']),
    );
endforeach;

echo json_encode($userArray);