<?php 
//echo '<pre>';print_r($activities);die;
foreach ($activities as $i =>  $data ) : 
    $check_privacy_type = true;
	$admins_current = (isset($admins) ? array_merge($admins,array($data['Activity']['user_id'])) : array($data['Activity']['user_id']));
    $feed[$i] = $this->Api->renderAFeed($data,$activity_likes,$is_member);
endforeach;
echo json_encode($feed);