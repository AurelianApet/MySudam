<?php
if (count($cats) > 0)
{
?>
    <table style='width:100%;height:50px;'>
<?php
    $uid = $this->Auth->user('id');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $userfollowModel =  Moocore::getInstance()->getModel('UserFollow');
	foreach ($cats as $user):
        $ani_id = $user['User']['ani_id'];
        $userid = $user['User']['id'];
        $cam = $campanionModel->find('first', array('conditions' => array('Companion.id' => $ani_id)));
        $cam_name = $cam['Companion']['name'];
        $cam_birthday = $cam['Companion']['c_birthday'];
        $type = $cam['Companion']['ani_type'];
        list($year, $month, $day) = split('[/.-]', $cam_birthday);
        $c_Ydate = (int)date("Y");
        $c_mdate = (int)date("m");
        $c_ddate = (int)date("d");
        $old = ($c_Ydate - $year) * 12 + ((int)$c_mdate - (int)$month);
        $y_old = (int)floor((int)$old / 12.0);
        $m_old = (int)((int)$old - (int)$y_old * 12);
        $c_old = $y_old . "살 " . $m_old . "개월";
        $ani = $cam['Companion']['type'];
        $cani = $animalModel->find('first', array('conditions' => array('Animal.id' => $ani)));
        $ani_type = $cani['Animal']['content'];
?>
    <tr>
        <td>
                <table width='100%'>
                    <tr>
                        <td style='width:20%'>
                            <a href='<?php echo $this->request->base ?>/users/view/<?php echo $userid ?>' rel='profile_content'>
                                <img src='<?php echo $this->webroot; ?>img/circle.png' width='40px;' />
                            </a>
                        </td>
                        <td style='width:50%'>
                            <a href='<?php echo $this->request->base ?>/users/view/<?php echo $userid ?>' rel='profile_content'>
                                <table style='width:100%'>
                                    <tr style='height:30px;'>
                                        <td style='width:60%;'><?php echo $cam_name; ?></td></tr><tr><td style='width:50%'>
                                            <?php echo $ani_type . ' / '; ?></td><td><?php echo $c_old; ?></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
<?php
        $userfollows = $userfollowModel->find('first', array('conditions' => array('UserFollow.user_id' => $uid, 'UserFollow.user_follow_id'=>$userid)));
        if(count($userfollows) == 0):
        {
?>
            <td id="follow_<?php echo $userid; ?>"><a style="cursor:pointer;" onclick="set_follow(<?php echo $uid; ?>, <?php echo $userid; ?>)"><img src='<?php echo $this->webroot; ?>img/follow1.png' width='40px;' /></a></td>
<?php
        }
        else:
        {
?>
            <td id="follow_<?php echo $userid; ?>"><a style="cursor:pointer;" onclick="set_follow(<?php echo $uid; ?>, <?php echo $userid; ?>)"><img src='<?php echo $this->webroot; ?>img/follow.png' width='40px;' /></a></td>
<?php
        }
        endif;
?>
                    </tr>
                </table>
        </td>
    </tr>
<?php
    endforeach;
?>
    </table>
<?php
}
else
    echo '<div class="clear">' . __('No more results found') . '</div>';
?>
