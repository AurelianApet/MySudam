<?php
echo $this->Html->css(array('jquery.mp'), null, array('inline' => false));
echo $this->Html->script(array('jquery.mp.min'), array('inline' => false));
?>

<?php
$tags_value = '';
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
if (!empty($tags)) $tags_value = implode(', ', $tags);

$userfollowModel = Moocore::getInstance()->getModel('UserFollow');

?>

<div class="bar-content">
    <div class="content_center" style="padding-top:40px;">
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
        <ul id="list-content">
            <li>
                <div style="text-align:center;">
                    <table>
                        <?php if (!empty($friends)): ?>
                            <?php foreach ($friends as $friend): ?>
                                <tr>
                                    <td width="20%" style="padding:10px;">
                                        <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'users/view/'.$friend["result"]["id"];?>">
                                            <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'uploads/users/avatar/'.$friend["result"]["id"].'/'.$friend["result"]["avatar"];?>" style="width:70px; height:70px; border-radius:35px;" />
                                        </a>
                                    </td>
                                    <td width="60%" align="left">
                                        <ul id="list-content">
                                            <li>
                                                <span style="font-size: 20px; font-weight: bold;"><?php echo $friend["result"]["name"];?></span>
                                            </li>
                                            <li>
                                                <span style="font-size: 14px;">
                                                    <?php echo $friend["companions"]["c_name"];?>
                                                    /
                                                    <?php
                                                        list($year, $month, $day) = split('[/.-]', $friend["companions"]["c_birthday"]);
                                                        $c_Ydate = (int)date("Y");
                                                        $c_mdate = (int)date("m");
                                                        $c_ddate = (int)date("d");
                                                        $old = ($c_Ydate - $year) * 12 + ((int)$c_mdate - (int)$month);
                                                        $y_old = (int)floor((int)$old / 12.0);
                                                        $m_old = (int)((int)$old - (int)$y_old * 12);
                                                        $c_old = $y_old . "살 " . $m_old . "개월";
                                                        echo $c_old;
                                                    ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </td>
                                    <?php
                                        $userfollows = $userfollowModel->find('first', array('conditions' => array('UserFollow.user_id' => $user_id, 'UserFollow.user_follow_id'=>$friend["result"]["id"])));
                                        if(count($userfollows) == 0):
                                        {
                                    ?>
                                        <td width="60%" id="follow_<?php echo $friend["result"]["id"]; ?>">
                                            <a onclick="set_follow(<?php echo $user_id; ?>, <?php echo $friend["result"]["id"]; ?>)">
                                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/follow1.png';?>" style="width:40px; height:40px;" />
                                            </a>
                                        </td>
                                    <?php
                                        }
                                        else:
                                        {
                                    ?>
                                        <td width="60%" id="follow_<?php echo $friend["result"]["id"]; ?>">
                                            <a onclick="del_follow(<?php echo $user_id; ?>, <?php echo $friend["result"]["id"]; ?>)">
                                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/follow.png';?>" style="width:40px; height:40px;" />
                                            </a>
                                        </td>
                                    <?php
                                            }
                                            endif;
                                    ?>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td style="padding-top:40px;">
                                    <span style="font-size: 14px;"><?php echo __('검색결과가 존재하지 않습니다.') ?></span>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>
