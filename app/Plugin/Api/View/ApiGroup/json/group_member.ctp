<?php
foreach ($users as $mem) :
    $member[] = array(
        'id' => $mem['User']['id'],
        'name' => $mem['User']['name'],
        'avatar' => array(
                '50_square' => $this->Moo->getItemPhoto(array('User' => $mem['User']), array('prefix' => '50_square'), array(), true),
                '100_square' => $this->Moo->getItemPhoto(array('User' => $mem['User']), array('prefix' => '100_square'), array(), true),
                '200_square' => $this->Moo->getItemPhoto(array('User' => $mem['User']), array('prefix' => '200_square'), array(), true),
                '600' => $this->Moo->getItemPhoto(array('User' => $mem['User']), array('prefix' => '600'), array(), true),
            ),
        'profile_url' => FULL_BASE_URL.$mem['User']['moo_href'],
);
endforeach;

echo json_encode($member);