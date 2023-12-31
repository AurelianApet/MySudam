<?php $upload_video = Configure::read('UploadVideo.uploadvideo_enabled'); ?>

<?php if($this->request->is('ajax')):?>
<script type="text/javascript">
    require(["jquery","mooActivities"], function($,mooActivities) {
        mooActivities.initActivityForm();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery','mooActivities'), 'object' => array('$', 'mooActivities'))); ?>
mooActivities.initActivityForm();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>

<form id="wallForm">
	<?php
	echo $this->Form->hidden('type', array('value' => $type));
	echo $this->Form->hidden('target_id', array('value' => $target_id));
	echo $this->Form->hidden('action', array('value' => 'wall_post'));
	echo $this->Form->hidden('wall_photo');
	
	?>
	<div class="form-feed-holder">
            <div class="post-status">
                <?php
		   echo $this->Form->textarea('message', array('name' => 'messageText', 'placeholder' => $text),true);
		?>
            </div>
	
	</div>
	<div>
		<div id="wall_photo_preview" style="display:none">
			 <span id="addMoreImage" style="display:none;" class="addMoreImage"><i class="material-icons">add</i></span>            
        </div>
            
            <div id="video_pc_feed_preview" style="display: none;">
                <div class="left">
                    <div class="video_thumb">
                        <i class="icon-videocam-1"></i>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <?php echo $this->Form->text('title', array('value' => 'Untitled video', 'placeholder' => __('Untitled video'))); ?>
                    </div>
                    <?php if(empty($target_id)): ?>
                    <div>
                        <?php echo $this->Form->select('category_id', $video_categories, array('empty' => false, 'value' => '')); ?>
                    </div>
                    <?php endif; ?>
                    <div>
                        <?php echo $this->Form->textarea('description', array('value' => '', 'placeholder' => __('Description'))); ?>
                    </div>
                </div>
            </div>
            
        <?php echo $this->Form->userTagging('','userTagging',true);?>  
	</div>
        <div class="stt-action">
            
            <div style="width: 40px;" data-toggle="tooltip" title="<?php echo __('Add photos to your post');?>" id="select-2"></div>
            <div class="user-tagging-container bottom-container" data-toggle="tooltip" title="<?php echo __('Tag people in your post');?>">
            	<span class=" mdl-button mdl-js-button mdl-button--icon">
            	<i class="material-icons"   onclick="$('.userTagging-userTagging').toggleClass('hidden')">person_add</i>
                </span>
            </div>
            
            <?php if($upload_video): ?>
            <?php echo $this->Form->hidden('video_destination', array('value' => '')); ?>
            <div id="videoPcFeed"></div>
            <?php endif; ?>
            <?php $this->getEventManager()->dispatch(new CakeEvent('View.Elements.activityForm.afterRenderItems', $this)); ?>
            <div id="commentButton_0" class="post-stt-btn">
			<div class="wall-post-action">
				<?php if (strtolower($type) == 'user' && !$target_id):?>
					<?php echo $this->Form->select('privacy', array( PRIVACY_EVERYONE => __('Everyone'), PRIVACY_FRIENDS => __('Friends Only') ), array('empty' => false)); ?>
				<?php else:?>
					<?php echo $this->Form->hidden('privacy', array('value' => PRIVACY_EVERYONE));?>
				<?php endif;?>
				<a href="javascript:void(0)" class="btn btn-action" id="status_btn"> 
                                    <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                                        <?php echo __('Post') ?>
                                    </span>
                                </a>
			</div>
            </div>
        </div>
	
	
        
</form>