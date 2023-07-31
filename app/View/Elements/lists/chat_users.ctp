
        <?php    echo $this->element('list/chat_users_list'); ?>
        <?php if (!empty($more_result)):?>
            <?php $this->Html->viewMore($more_users_url); ?>
        <?php endif; ?>
