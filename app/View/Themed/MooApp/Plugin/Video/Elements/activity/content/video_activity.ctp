<?php $video = json_decode($activity['Activity']['params'],true); ?>
<div class="video-activity-title">
	<?php echo $this->viewMore(h($activity['Activity']['content']),null, null, null, true, array('no_replace_ssl' => 1));?>
	<?php if(!empty($activity['UserTagging']['users_taggings'])) $this->MooPeople->with($activity['UserTagging']['id'], $activity['UserTagging']['users_taggings']); ?>
</div>
<div>
    <div class="video-feed-content">
        <?php echo $this->element('Video./video_snippet', array('video' => array('Video' => $video))); ?>
    </div>
    <div class="video-feed-info video_feed_content">
        <div class="video-title">
            <a class="feed_title" target="_blank" href="
            <?php if ( !empty( $video['group_id'] ) ): ?>
                <?php echo $this->request->base?>/groups/view/<?php echo $video['group_id']?>/video_id:<?php echo $video['id']?>
            <?php else: ?>
                <?php if(!empty($video['id'])):?>
                    <?php echo $this->request->base?>/videos/view/<?php echo $video['id']?>/<?php echo seoUrl($video['title'])?>
                <?php else:?>
                    <?php if($video['source'] == VIDEO_TYPE_YOUTUBE): ?>
                        <?php echo 'https://'.$video['source'].'.com/watch?v='.$video['source_id'];?>
                    <?php else: ?>
                        <?php echo 'https://'.$video['source'].'.com/'.$video['source_id'];?>
                    <?php endif; ?>
                <?php endif;?>
            <?php endif; ?>">
                <?php echo h($video['title'])?>
            </a>
        </div>
        
        <div class="video-description feed_detail_text">
            <?php echo h($this->Text->truncate($this->Text->convert_clickable_links_for_hashtags($video['description'], Configure::read('Video.video_hashtag_enabled') ), 200, array('exact' => false)))?>
        </div>
    </div>

</div>