<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooGroup","mooTopic"], function($, mooGroup, mooTopic) {
        mooTopic.initOnCreate();
        mooGroup.initOnCreateGroupTopic();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery','mooTopic', 'mooGroup'), 'object' => array('$', 'mooTopic', 'mooGroup'))); ?>
mooTopic.initOnCreate();
mooGroup.initOnCreateGroupTopic();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>

<?php if($this->request->is('ajax')) $this->setCurrentStyle(4) ?>

<?php
$topicHelper = MooCore::getInstance()->getHelper('Topic_Topic');
?>

<style>
.list6 .mce-tinymce { margin-left: 0; }
.attach_remove {display:none;}
#attachments_list li:hover .attach_remove {display:inline-block;}
</style>
<div class="create_form_ajax">
<div class="bar-content full_content p_m_10">
    <div class="content_center">
<form id="createForm">
<?php
$topicHelper = MooCore::getInstance()->getHelper('Topic_Topic');
echo $this->Form->hidden( 'attachments', array( 'value' => $attachments_list ) );
echo $this->Form->hidden('thumbnail', array('value' => $topic['Topic']['thumbnail']));
echo $this->Form->hidden( 'tags' );

if (!empty($topic['Topic']['id']))
	echo $this->Form->hidden('id', array('value' => $topic['Topic']['id']));

echo $this->Form->hidden('group_id', array('value' => $this->request->data['group_id']));
echo $this->Form->hidden('category_id', array('value' => 0));
echo $this->Form->hidden('topic_photo_ids');
?>	<div class="groupId" data-id="<?php echo $group_id; ?>"></div>
    <div class="form_content">
        <ul>
            <li>
                            <div class="thumb_content">
                                <div class="thumb_item">
                                <div id="topic_thumnail_preview">
                                    <?php if (!empty($topic['Topic']['thumbnail'])): ?>
                                    <img width="150" id="item-avatar" class="img_wrapper" style="background-image:url(<?php echo $topicHelper->getImage($topic, array('prefix' => '150_square'))?>)" src="<?php echo $this->request->webroot?>theme/<?php echo $this->theme ?>/img/s.png" />
                                    <?php else: ?>
                                        <img width="150" id="item-avatar" class="img_wrapper" style="display: none;" src="<?php echo $this->request->webroot?>theme/<?php echo $this->theme ?>/img/s.png" />
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="thumb_qq" id="topic_thumnail"></div>
                                <div class="thumb_text">
                                    <h4><?php echo __('Upload Topic Thumb') ?></h4>
                                    <div><?php echo __('Click thumb to upload') ?></div>
                                </div>
                            </div>    
                            
                        </li>
                <li>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input name="title" class="mdl-textfield__input" type="text" value="<?php echo $topic['Topic']['title'] ?>" />
                        <label class="mdl-textfield__label"><?php echo __( 'Topic Title')?></label>
                    </div>
                </li>
                <li>
                    <div >
                        <label> <?php echo __( 'Topic')?></label>
                    </div>
                    <div >
                        <?php echo $this->Form->tinyMCE( 'body', array( 'value' => $topic['Topic']['body'], 'id' => 'editor' ) ); ?>
                    </div>
                </li>
               
                <?php if (!empty($attachments)): ?>
                <li>
                    
                    <label><?php echo __( 'Attachments')?></label>
                    
                    
                    <ul class="list6 list6sm" id="attachments_list" style="overflow: hidden;">
                        <?php foreach ($attachments as $attachment): ?>
                        <li><i class="icon-attach"></i><a href="<?php echo $this->request->base?>/attachments/download/<?php echo $attachment['Attachment']['id']?>" target="_blank"><?php echo $attachment['Attachment']['original_filename']?></a>
                            &nbsp;<a href="#" data-id="<?php echo $attachment['Attachment']['id']?>" class="attach_remove tip" title="<?php echo __( 'Delete')?>"><i class="icon-trash icon-small"></i></a>              
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                </li>
            <?php endif; ?>
        </ul>
    </div>
</form>
      
        
            <div id="images-uploader" style="display:none;">
                <div id="attachments_upload"></div>
                <a href="#" class="button button-primary" id="triggerUpload"><?php echo __( 'Upload Queued Files')?></a>
            </div>
            <?php if(empty($isMobile)): ?>
                <a href="javascript:void(0)" id="toggleUploader"><?php echo __( 'Toggle Attachments Uploader')?></a>
            <?php endif; ?>
             <div style="margin:20px 0">           
                <a href="javascript:void(0)" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored" id="ajaxCreateButton" ><?php echo __( 'Save')?></a>

                <?php if ( !empty( $topic['Topic']['id'] ) ): ?>
                <a href="javascript:void(0)" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored cancelTopic1" data-url="<?php echo $this->request->base?>/topics/ajax_view/<?php echo $topic['Topic']['id']?>"><?php echo __( 'Cancel')?></a>

                <?php if ( ($topic['Topic']['user_id'] == $uid ) || ( !empty($my_status) && $my_status['GroupUser']['status'] == GROUP_USER_ADMIN ) || ( !empty($cuser) && $cuser['Role']['is_admin'] ) ): ?>
                <a href="javascript:void(0)" data-id="<?php echo $topic['Topic']['id']; ?>" data-group="<?php echo $topic['Topic']['group_id']; ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored deleteTopic"><?php echo __( 'Delete')?></a>
                <?php endif; ?> 

                <?php else: ?>
                <a href="javascript:void(0)" id="cancel-topic" data-url="<?php echo $this->request->base?>/topics/browse/group/<?php echo $this->request->data['group_id']?>" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored cancelTopic" ><?php echo __( 'Cancel')?></a>
                <?php endif; ?>     
            </div>
            <div class="error-message" id="errorMessage" style="display:none"></div>
        
</div>
</div>

</div>