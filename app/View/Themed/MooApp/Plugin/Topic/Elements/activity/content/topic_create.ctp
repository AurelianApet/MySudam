<?php 
$topic = $object;
$topicHelper = MooCore::getInstance()->getHelper('Topic_Topic');
?>
<?php if (!empty($activity['Activity']['content'])): ?>
<div class="feed_text comment_message">
<?php echo $this->viewMore(h($activity['Activity']['content']),null, null, null, true, array('no_replace_ssl' => 1)); ?>
</div>
<?php endif; ?>
<div class="activity_item topic_feed">
    <div class="activity_left">
        <img style="background-image:url(<?php echo $topicHelper->getImage($topic, array())?>)" width="150" class="thum_activity" src="<?php echo $this->request->webroot ?>theme/<?php echo $this->theme ?>/img/s.png"/>
    </div>
    <div class="activity_right ">
        <div class="activity_header">
            <a class="feed_title" href="<?php if (!empty($topic['Topic']['group_id'])): ?><?php echo  $this->request->base ?>/groups/view/<?php echo  $topic['Topic']['group_id'] ?>/topic_id:<?php echo  $topic['Topic']['id'] ?><?php else: ?><?php echo  $this->request->base ?>/topics/view/<?php echo  $topic['Topic']['id'] ?>/<?php echo  seoUrl($topic['Topic']['title']) ?><?php endif; ?>"><b><?php echo  h($topic['Topic']['title']) ?></b></a>
        </div>
        <div class="feed_detail_text">
            <?php echo  $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>', '&nbsp;'), array(' ', ''), $topic['Topic']['body'])), 200, array('exact' => false)), Configure::read('Topic.topic_hashtag_enabled')) ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
