<?php
    echo $this->element('ajax/profile_blog_detail');
    if (!empty($more_blog_result))
       $this->Html->viewMore($more_blog_url);
?>
