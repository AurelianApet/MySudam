
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


<?php
echo $this->element('user/showSudamList');
?>
<ul class="users_list" id="list-content">
<?php if (!empty($more_result)):?>
	<?php $this->Html->viewMore($more_url); ?>
<?php endif; ?>
</ul
