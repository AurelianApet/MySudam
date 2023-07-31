<?php
    echo $this->element('ajax/profile_following_detail');
    if (!empty($more_followings_result))
       $this->Html->viewMore($more_followings_url);
?>
