<?php
    $check_privacy_type = true;
    $admins_current = (isset($admins) ? array_merge($admins,array($data['Activity']['user_id'])) : array($data['Activity']['user_id']));
    $feed = $this->Api->renderAFeed($data,$activity_likes);
echo json_encode($feed['items']);