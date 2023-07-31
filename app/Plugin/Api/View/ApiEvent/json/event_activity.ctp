<?php
//foreach ($eventActivities['activities'] as $i =>  $data ) :
//    $check_privacy_type = true;
//	$admins_current = (isset($admins) ? array_merge($admins,array($data['Activity']['user_id'])) : array($data['Activity']['user_id']));
//    $feed[$i] = $this->Api->renderAFeed($data,$eventActivities['activity_likes']);
//endforeach;
//if (!empty($feed)) :
//    echo json_encode($feed);
//else:
//    throw new ApiNotFoundException(__d('api', 'There are no new feeds to view at this time.'));
//endif;
foreach ($activities as $i =>  $data ) : 
    $check_privacy_type = true;
	$admins_current = (isset($admins) ? array_merge($admins,array($data['Activity']['user_id'])) : array($data['Activity']['user_id']));
    $feed[$i] = $this->Api->renderAFeed($data,$activity_likes);
endforeach;
echo json_encode($feed);
