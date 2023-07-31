<?php
    echo $this->element('ajax/profile_follower_detail');
    if (!empty($more_followers_result))
       $this->Html->viewMore($more_followers_url);
?>
