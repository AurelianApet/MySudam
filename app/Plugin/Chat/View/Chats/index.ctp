<script>
    function onAlarm(userid, targetid, val123)
    {
        var url = '<?php echo $this->Html->url('/', true); ?>' + 'chat/setAlarm/' + userid + '/' + targetid + '/' + val123;
        $.ajax({
            url: url,
            dataType: 'text',
            cache: false,
            type: "post",
            async: false,
            success: function (data) {
                var alarm_id = "alarm" + userid + "_" + targetid;
                if(val123 == 1)
                {
                    document.getElementById(alarm_id).innerHTML = "<a onclick='onAlarm(" + userid + "," + targetid + ", 0);'><span>알람 ON</span></a>";
                }
                else
                {
                    document.getElementById(alarm_id).innerHTML = "<a onclick='onAlarm(" + userid + "," + targetid + ", 1);'><span>알람 OFF</span></a>";
                }
            },
            error: function () {
            }
        });
    }

    function onDel(userid, targetid)
    {
        $.ajax({
            url: '<?php echo $this->Html->url('/', true); ?>' + 'chat/delChatting/' + userid + '/' + targetid,
            dataType: 'text',
            cache: false,
            type: "post",
            async: false,
            success: function (data) {
                location.reload();
            },
            error: function () {
            }
        });
    }

    function onShowChatting(userid)
    {
        window.app.onShowChatting(userid);
    }

    function onSearch()
    {
        var search_text = document.getElementById("keyword").value;
        if(search_text != "")
        {
            var url = '<?php echo $this->Html->url('/', true); ?>chat/index/2/' + search_text;
            document.location = url;
        }
        else
        {
            document.location = "<?php echo $this->Html->url('/', true); ?>chat/index";
        }
    }
</script>

        <div style="margin-top:15px;">
            <center>
                <table width="100%;">
                    <tr>
                        <td width="100%;">
                            <center>
                                <input type="text" id="keyword"/>
                                <input type="button" onclick="onSearch()" value="search"/>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </div>

<?php
    if(count($users)):
    {
?>
    <?php    echo $this->element('list/chat_users_list'); ?>
    <ul id="list-content" style="margin-top:15px;">
<?php
    echo $this->element('list/chat_users');
?>
    </ul>
<?php
    }
    else:
    {
        echo "No more result found";
    }
    endif;
?>
