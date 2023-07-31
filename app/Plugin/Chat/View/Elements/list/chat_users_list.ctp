<div id="result">
<?php
        $uid = $this->Auth->user('id');
        $campanionModel = Moocore::getInstance()->getModel('Companion');
        $alarmModel = Moocore::getInstance()->getModel('Alarm');
        foreach ($users as $user):
            if($uid != $user['User']['id']):
            {
                $ani_id = $user['User']['ani_id'];
                $cam = $campanionModel->find('first', array('conditions' => array('Companion.id' => $ani_id)));
                $cam_name = $cam['Companion']['name'];
?>
                    <table style="width:100%;">
                        <tr>
                            <td style="width:20%;padding-left:50px;">
                               <img width="30px;" src="<?php echo $this->webroot; ?>img/circle.png"/>
                            </td>
                            <td>
                                 <center>
                                     <span onclick="onShowChatting('<?php echo $user['User']['id']; ?>')" >
                                         <?php echo $cam_name; ?>님과의 메시지
                                     </span>
                                 </center>
                            </td>
                             <td id="alarm<?php echo $uid; ?>_<?php echo $user['User']['id']; ?>" style="width:20%;">
<?php
            $alarm = $alarmModel->find('first', array('conditions'=>array('Alarm.user_id'=>$uid, 'Alarm.target_id'=>$user['User']['id'] ) ) );
            $is_alarm = $alarm['Alarm']['is_alarm'];
            if($is_alarm == 1):
            {
?>
                                 <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $user['User']['id']; ?>, 0);"><span>알람 ON</span></a>
<?php
            }
            else:
            {
?>
                                 <a onclick="onAlarm(<?php echo $uid; ?>, <?php echo $user['User']['id']; ?>, 1);"><span>알람 OFF</span></a>
<?php
            }
            endif;
?>
                             </td>
                             <td style="width:20%;">
                                 <a onclick="onDel(<?php echo $uid; ?>, <?php echo $user['User']['id']; ?>);">삭제</a>
                             </td>
                        </tr>
                    <table>

<?php
            }
            endif;
        endforeach;
?>
</div>