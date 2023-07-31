<?php
    $conversationModel = Moocore::getInstance()->getModel('Conversation');
    $conversationuserModel = Moocore::getInstance()->getModel('ConversationUser');
    $userModel = Moocore::getInstance()->getModel('User');
    $commentModel = Moocore::getInstance()->getModel('Comment');
    $uid = $this->Auth->user('id');
    $target_users = $userModel->find('first', array('conditions' => array('User.id' => $targetid ) ) );
    $targetname = $target_users['User']['name'];
    $targetid = $target_users['User']['id'];
?>
<div class="bar-content">
    <div class="content_center">
        <div class="mo_breadcrumb">
            <h1><?php echo $targetname ?></h1>
            <a href="<?php echo $this->request->base?>/home/index/tab:messages" class="button topButton button-mobi-top"><?php echo __('Back to Messages')?></a>
        </div>
        <div class="full_content p_m_10">
            <div>
<?php
    $conversation_users = $conversationModel->find('all', array('conditions' => array('Conversation.user_id' => array($uid, $targetid) ), 'order' => array('Conversation.created DESC')) );
    for($j = 0; $j < count($conversation_users); $j ++)
    {
        $conversation_id = $conversation_users[$j]['Conversation']['id'];
        $conversation_contents = $conversationuserModel->find('all', array('conditions' => array('ConversationUser.conversation_id' => $conversation_id ) ) );
        for($i = 0; $i < count($conversation_contents); $i ++)
        {
            if($conversation_contents[$i]['ConversationUser']['user_id'] == $uid)
            {
                if($conversation_contents[$i + 1]['ConversationUser']['user_id'] == $targetid)
                {
                    $message = $conversation_users[$j]['Conversation']['message'];
                    echo "<div>" . $message . "</div>";
                    $comments = $commentModel->find('all', array('conditions' => array('Comment.target_id' => $conversation_id, 'Comment.user_id' => $uid ), 'order' => array('Comment.created DESC') ) );
                    for($k = 0; $k < count($comments); $k ++)
                    {
                        $reply_message = $comments[$k]['Comment']['message'];
                        echo "<div>" . $reply_message . "</div>";
                    }
                    continue;
                }
            }
            else if($conversation_contents[$i]['ConversationUser']['user_id'] == $targetid)
            {
                if($conversation_contents[$i + 1]['ConversationUser']['user_id'] == $uid)
                {
                    $message = $conversation_users[$j]['Conversation']['message'];
                    echo "<div>" . $message . "</div>";
                    $comments = $commentModel->find('all', array('conditions' => array('Comment.target_id' => $conversation_id, 'Comment.user_id' => $targetid ), 'order' => array('Comment.created DESC') ) );
                    for($k = 0; $k < count($comments); $k ++)
                    {
                        $reply_message = $comments[$k]['Comment']['message'];
                        echo "<div>" . $reply_message . "</div>";
                    }
                    continue;
                }
            }
        }
    }
?>
            </div>
        </div>
    </div>
</div>
<div class="bar-content full_content p_m_10">
    <div class="content_center">
        <?php if($pair_blocker && count($pair_blocker)): ?>
            <?php echo __('%1$s blocked %2$s so that this conversation can\'t continue!',$pair_blocker['block_user']['name'],$pair_blocker['blocked_user']['name']) ?>
        <?php endif; ?>
        	<?php if (!count($pair_blocker)): ?>
            <h2><?php echo __('Messages')?> (<span id="comment_count"><?php echo $conversation['Conversation']['message_count']?></span>)</h2>
            <?php endif;?>
            <?php if (Configure::read('core.comment_sort_style') == COMMENT_RECENT): ?>
            <?php
            if (!empty($uid) && !count($pair_blocker))
                    echo $this->element('comment_form', array('target_id' => $conversation['Conversation']['id'], 'type' => APP_CONVERSATION));
            ?>
            <ul class="list6 comment_wrapper" id="comments">
            <?php echo $this->element('comments');?>
            </ul>
            <?php elseif(Configure::read('core.comment_sort_style') == COMMENT_CHRONOLOGICAL): ?>
            <ul class="list6 comment_wrapper" id="comments">
            <?php echo $this->element('comments_chrono');?>
            </ul>
            <?php
            if (!empty($uid) && !count($pair_blocker))
                    echo $this->element('comment_form', array('target_id' => $conversation['Conversation']['id'], 'type' => APP_CONVERSATION));
            ?>
            <?php endif; ?>
    </div>
</div>