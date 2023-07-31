<script>
    function isExist(chat_member, user)
    {
        for(i = 0; i < chat_member.length; i ++)
        {
            if(chat_member[i] == user)
                return true;
        }
        return false;
    }

    function onAlarm(userid, targetid, val123)
    {
        var url = '<?php echo $this->request->base?>' + '/Conversations/setAlarm/' + userid + '/' + targetid + '/' + val123;
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
            url: '<?php echo $this->request->base?>' + '/Conversations/delChatting/' + userid + '/' + targetid,
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

    function onSearch()
    {
        var search_text = document.getElementById("keyword").value;
        if(search_text != "")
        {
            document.getElementById("userlist").innerHTML = "";
    <?php
        $uid = $this->Auth->user('id');
        $conversationModel = Moocore::getInstance()->getModel('Conversation');
        $conversationuserModel = Moocore::getInstance()->getModel('ConversationUser');
        $userModel = Moocore::getInstance()->getModel('User');
        $conversations = $conversationModel->find('all');
        $alarmModel = Moocore::getInstance()->getModel('Alarm');

        if(count($conversations) == 0):
        {
    ?>
            document.getElementById("userlist").innerHTML = "No result found!";
    <?php
        }
        else:
        {
    ?>
            chat_memembers = new Array();
    <?php
            for($i = 0; $i < count($conversations); $i ++):
            {
                $conversation_id = $conversations[$i]['Conversation']['id'];
                $conversation_users = $conversationuserModel->find('all', array('conditions' => array('ConversationUser.conversation_id' => $conversation_id ) ) );
                $temp1 = null;
                $temp2 = null;
                $tval = 0;
                for($j = 0; $j < count($conversation_users); $j ++):
                {
                    $c_userid = $conversation_users[$j]['ConversationUser']['user_id'];
                    if($tval == 1):
                    {
                        if($uid == $c_userid && !empty($temp2)):
                        {
                            $users = $userModel->find('first', array('conditions' => array('User.id' => $temp2 ) ) );
    ?>
                            if(!isExist(chat_memembers, '<?=$users['User']['name']?>'))
                            {
                                chat_memembers.push('<?=$users['User']['name']?>');
                                var name = '<?=$users['User']['name']?>'.toLowerCase();
                                if(name.indexOf(search_text.toLowerCase()) > -1)
                                {
    <?php
                                    $alarms = $alarmModel->find('first', array('conditions' => array('Alarm.user_id' => $uid, 'Alarm.target_id' => $temp2 ) ) );
                                    $is_alarm = $alarms['Alarm']['is_alarm'];
                                    if($is_alarm == 1):
                                    {
    ?>
                                        var content = '<table width="100%;"><tr><td style="width:20%;padding-left:50px;"><img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/></td>'
                                         + '<td><center><a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $temp2; ?>" ><?php echo $users['User']['name']; ?>님과의 메시지</a></center></td>'
                                         + '<td id="alarm<?php echo $uid; ?>_<?php echo $temp2; ?>" style="width:20%;"><a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $temp2; ?>, 0)"><span>알람 ON</span></a></td>'
                                         + '<td style="width:20%;"><a onclick="onDel(<?php echo $uid; ?>, <?php echo $temp2; ?>);">삭제</a></td></tr></table>';
                                         document.getElementById("userlist").innerHTML += content;
    <?php
                                    }
                                    else:
                                    {
    ?>
                                        var content = '<table width="100%;"><tr><td style="width:20%;padding-left:50px;"><img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/></td>'
                                         + '<td><center><a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $temp2; ?>" ><?php echo $users['User']['name']; ?>님과의 메시지</a></center></td>'
                                         + '<td id="alarm<?php echo $uid; ?>_<?php echo $temp2; ?>" style="width:20%;"><a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $temp2; ?>, 1)"><span>알람 OFF</span></a></td>'
                                         + '<td style="width:20%;"><a onclick="onDel(<?php echo $uid; ?>, <?php echo $temp2; ?>);">삭제</a></td></tr></table>';
                                         document.getElementById("userlist").innerHTML += content;
    <?php
                                    }
                                    endif;
    ?>
                                }
                            }
    <?php
                        }
                        elseif(!empty($temp1)):
                        {
                            $users = $userModel->find('first', array('conditions' => array('User.id' => $c_userid ) ) );
    ?>
                            if(!isExist(chat_memembers, '<?=$users['User']['name']?>'))
                            {
                                chat_memebers.push('<?=$users['User']['name']?>');
                                var name = '<?=$users['User']['name']?>'.toLowerCase();
                                if(name.indexOf(search_text.toLowerCase()) > -1)
                                {
    <?php
                                    $alarms = $alarmModel->find('first', array('conditions' => array('Alarm.user_id' => $uid, 'Alarm.target_id' => $temp2 ) ) );
                                    $is_alarm = $alarms['Alarm']['is_alarm'];
                                    if($is_alarm == 1):
                                    {
    ?>
                                        var content = '<table width="100%;"><tr><td style="width:20%;padding-left:50px;"><img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/></td>'
                                         + '<td><center><a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $c_userid; ?>" ><?php echo $users['User']['name']; ?>님과의 메시지</a></center></td>'
                                         + '<td id="alarm<?php echo $uid; ?>_<?php echo $c_userid; ?>" style="width:20%;"><a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $c_userid; ?>, 0);"><span>알람 ON</span></a></td>'
                                         + '<td style="width:20%;"><a onclick="onDel(<?php echo $uid; ?>, <?php echo $c_userid; ?>);">삭제</a></td></tr></table>';
                                         document.getElementById("userlist").innerHTML += content;
    <?php
                                    }
                                    else:
                                    {
    ?>
                                        var content = '<table width="100%;"><tr><td style="width:20%;padding-left:50px;"><img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/></td>'
                                         + '<td><center><a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $c_userid; ?>" ><?php echo $users['User']['name']; ?>님과의 메시지</a></center></td>'
                                         + '<td id="alarm<?php echo $uid; ?>_<?php echo $c_userid; ?>" style="width:20%;"><a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $c_userid; ?>, 1);"><span>알람 OFF</span></a></td>'
                                         + '<td style="width:20%;"><a onclick="onDel(<?php echo $uid; ?>, <?php echo $c_userid; ?>);">삭제</a></td></tr></table>';
                                         document.getElementById("userlist").innerHTML += content;
    <?php
                                    }
                                    endif;
    ?>
                                }
                            }
    <?php
                        }
                        endif;
                    }
                    else:
                    {
                        if($uid == $c_userid):
                        {
                            //뒤의거
                            $temp1 = $c_userid;
                        }
                        else:
                        {
                            //앞의거
                            $temp2 = $c_userid;
                        }
                        endif;
                        $tval ++;
                    }
                    endif;
                }
                endfor;
            }
            endfor;
        }
        endif;
    ?>
            if(document.getElementById("userlist").innerHTML == "")
            {
                document.getElementById("userlist").innerHTML = "No result found!";
            }
        }
    }
</script>
<?php
    $uid = $this->Auth->user('id');
    $conversationModel = Moocore::getInstance()->getModel('Conversation');
    $conversationuserModel = Moocore::getInstance()->getModel('ConversationUser');
    $userModel = Moocore::getInstance()->getModel('User');
    $alarmModel = Moocore::getInstance()->getModel('Alarm');
    $conversations = $conversationModel->find('all');

    function isExist($chat_member, $user)
    {
        for($i = 0; $i < count($chat_member); $i ++)
        {
            if($chat_member[$i] == $user)
                return true;
        }
        return false;
    }

    if(count($conversations) == 0)
    {
        echo '<div style="margin-top:15px;"><center>No result found!</center></div>';
    }
    else
    {
        $chat_memembers = array();
        echo '<div style="margin-top:15px;"><center><table width="100%;"><tr><td width="100%;"><center><input type="text" id="keyword"/><input type="button" onclick="onSearch()" value="search"/></center></td></tr></table></center></div>';
        echo '<div id="userlist" style="margin-top:15px;">';
        for($i = 0; $i < count($conversations); $i ++)
        {
            $conversation_id = $conversations[$i]['Conversation']['id'];
            $conversation_users = $conversationuserModel->find('all', array('conditions' => array('ConversationUser.conversation_id' => $conversation_id ) ) );
            $temp1 = null;
            $temp2 = null;
            $tval = 0;
            echo '<table style="width:100%;">';
            for($j = 0; $j < count($conversation_users); $j ++)
            {
                $c_userid = $conversation_users[$j]['ConversationUser']['user_id'];
                if($tval == 1)
                {
                    if($uid == $c_userid && !empty($temp2))
                    {
                        $users = $userModel->find('first', array('conditions' => array('User.id' => $temp2 ) ) );
                        if(!isExist($chat_memembers, $users['User']['name']))
                        {
                            array_push($chat_memembers, $users['User']['name']);
                            $alarms = $alarmModel->find('first', array('conditions' => array('Alarm.user_id' => $uid, 'Alarm.target_id' => $temp2 ) ) );
                            $is_alarm = $alarms['Alarm']['is_alarm'];
                            if($is_alarm == 1):
                            {
?>
                            <tr>
                                <td style="width:20%;padding-left:50px;">
                                   <img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/>
                                </td>
                                <td>
                                     <center>
                                         <a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $temp2; ?>" >
                                             <?php echo $users['User']['name']; ?>님과의 메시지
                                         </a>
                                     </center>
                                </td>
                                 <td id="alarm<?php echo $uid; ?>_<?php echo $temp2; ?>" style="width:20%;">
                                     <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $temp2; ?>, 0);"><span>알람 ON</span></a>
                                 </td>
                                 <td style="width:20%;">
                                     <a onclick="onDel(<?php echo $uid; ?>, <?php echo $temp2; ?>);">삭제</a>
                                 </td>
                            </tr>
<?php
                            }
                            else:
                            {
?>
                                <tr>
                                    <td style="width:20%;padding-left:50px;">
                                       <img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/>
                                    </td>
                                    <td>
                                         <center>
                                             <a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $temp2; ?>" >
                                                 <?php echo $users['User']['name']; ?>님과의 메시지
                                             </a>
                                         </center>
                                    </td>
                                     <td id="alarm<?php echo $uid; ?>_<?php echo $temp2; ?>" style="width:20%;">
                                         <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $temp2; ?>, 1);"><span>알람 OFF</span></a>
                                     </td>
                                     <td style="width:20%;">
                                         <a onclick="onDel(<?php echo $uid; ?>, <?php echo $temp2; ?>);">삭제</a>
                                     </td>
                                </tr>
<?php
                            }
                            endif;
                        }
                    }
                    else if(!empty($temp1))
                    {
                        $users = $userModel->find('first', array('conditions' => array('User.id' => $c_userid ) ) );
                        if(!isExist($chat_memembers, $users['User']['name']))
                        {
                            array_push($chat_memembers, $users['User']['name']);
                            $alarms = $alarmModel->find('first', array('conditions' => array('Alarm.user_id' => $uid, 'Alarm.target_id' => $c_userid ) ) );
                            $is_alarm = $alarms['Alarm']['is_alarm'];
                            if($is_alarm == 1):
                            {
?>
                                <tr>
                                    <td style="width:20%;padding-left:50px;">
                                       <img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/>
                                    </td>
                                    <td>
                                         <center>
                                             <a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $c_userid; ?>" >
                                                 <?php echo $users['User']['name']; ?>님과의 메시지
                                             </a>
                                         </center>
                                    </td>
                                     <td id="alarm<?php echo $uid; ?>_<?php echo $c_userid; ?>" style="width:20%;">
                                         <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $c_userid; ?>, 0);"><span>알람 ON</span></a>
                                     </td>
                                     <td style="width:20%;">
                                         <a onclick="onDel(<?php echo $uid; ?>, <?php echo $c_userid; ?>);">삭제</a>
                                     </td>
                                </tr>
<?php
                            }
                            else:
                            {
?>
                                <tr>
                                    <td style="width:20%;padding-left:50px;">
                                       <img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/>
                                    </td>
                                    <td>
                                         <center>
                                             <a href="<?php echo $this->request->base;?>/conversations/view/<?php echo $c_userid; ?>" >
                                                 <?php echo $users['User']['name']; ?>님과의 메시지
                                             </a>
                                         </center>
                                    </td>
                                     <td id="alarm<?php echo $uid; ?>_<?php echo $c_userid; ?>" style="width:20%;">
                                         <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $c_userid; ?>, 1);"><span>알람 OFF</span></a>
                                     </td>
                                     <td style="width:20%;">
                                         <a onclick="onDel(<?php echo $uid; ?>, <?php echo $c_userid; ?>);">삭제</a>
                                     </td>
                                </tr>
<?php
                            }
                            endif;
                        }
                    }
                }
                else
                {
                    if($uid == $c_userid)
                    {
                        //뒤의거
                        $temp1 = $c_userid;
                    }
                    else
                    {
                        //앞의거
                        $temp2 = $c_userid;
                    }
                    $tval ++;
                }
            }
            echo '</table>';
        }
        echo '</div>';
    }
?>

<?php if (count($conversations) >= RESULTS_LIMIT): ?>

    <?php $this->Html->viewMore($more_url); ?>
<?php endif; ?>

<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooBehavior", "mooGlobal"], function($, mooBehavior, mooGlobal) {
        mooBehavior.initMoreResults();
        mooGlobal.initMsgList();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery', 'mooBehavior', 'mooGlobal'), 'object' => array('$', 'mooBehavior', 'mooGlobal'))); ?>
mooBehavior.initMoreResults();
mooGlobal.initMsgList();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>