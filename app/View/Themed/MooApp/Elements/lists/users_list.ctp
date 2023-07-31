<script>
    function set_follow(userid, targetid)
    {
        var url = "<?php echo $this->request->base; ?>/users/set_follow/" + userid + "/" + targetid;
        $.ajax({
            type: 'POST',
            url: url,
            success: function () {
                var id = "follow_" + targetid;
                var content = '<a onclick="del_follow(' + userid + ',' + targetid + ')"><img src="<?php echo $this->webroot; ?>img/follow.png" width="40px;" /></a>';
                document.getElementById(id).innerHTML = content;
            }
        });
    }

    function del_follow(userid, targetid)
    {
        var url = "<?php echo $this->request->base; ?>/users/del_follow/" + userid + "/" + targetid;
        $.ajax({
            type: 'POST',
            url: url,
            success: function () {
                var id = "follow_" + targetid;
                var content = '<a onclick="set_follow(' + userid + ',' + targetid + ')"><img src="<?php echo $this->webroot; ?>img/follow1.png" width="40px;" /></a>';
                document.getElementById(id).innerHTML = content;
            }
        });
    }
</script>

<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooUser"], function($, mooUser) {
        mooUser.initOnUserList();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery', 'mooUser'), 'object' => array('$', 'mooUser'))); ?>
mooUser.initOnUserList();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>

<?php
if($type == 1)
    echo $this->element('lists/users_list1');
else if($type == 2)
    echo $this->element('lists/users_list2');
?>
