<?php
if (!empty($users)) {
    $userList['count'] = count($users);
    foreach ($users as $i =>  $user ) :
        $userList['user'][] = array(
            'url' => FULL_BASE_URL . $user['User']['moo_href'],
            'type' => $user['User']['moo_type'],
            'id' => $user['User']['id'],
            'name' => $user['User']['name'],
            'photoCount' => $user['User']['photo_count'],
            'friendCount' => $user['User']['friend_count'],
            );
    endforeach; 
    echo json_encode($userList);
}
else {
    throw new ApiNotFoundException(__d('api', 'Nobody liked this item'));
}