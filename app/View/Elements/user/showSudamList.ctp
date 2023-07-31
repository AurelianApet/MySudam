
<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $userfollowModel = Moocore::getInstance()->getModel('UserFollow');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
?>

    <div>
<?php
    if(count($users) > 0):
    foreach ($users as $user):
    {
        $cuser = $userModel->find('first', array('conditions'=>array('User.id'=>$user['Stroke']['user_id'])));
        if(empty($cuser))
            continue;
        $ani_id = $cuser['User']['ani_id'];
        $cam = $campanionModel->find('first', array('conditions' => array('Companion.id' => $ani_id)));
        $cam_name = $cam['Companion']['name'];
        $cam_birthday = $cam['Companion']['c_birthday'];
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
        <table style="width:100%;height:50px;">
            <tr>
                <td style="width:20%">
                    <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                </td>
                <td style="width:50%">
                    <table style="width:100%">
                        <tr style="height:30px;">
                            <td style="width:60%;">
                                <a href="<?php echo $this->Html->url('/', true); ?>users/view/<?php echo $cuser['User']['id']; ?>">
                                <?php echo $cam_name; ?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:50%">
                                <a href="<?php echo $this->Html->url('/', true); ?>users/view/<?php echo $cuser['User']['id']; ?>">
                                <?php echo $ani_type . " / "; ?>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $this->Html->url('/', true); ?>users/view/<?php echo $cuser['User']['id']; ?>">
                                <?php echo $c_old; ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
<?php
        $userfollows = $userfollowModel->find('first', array('conditions' => array('UserFollow.user_id' => $uid, 'UserFollow.user_follow_id'=>$cuser['User']['id'])));
        if(count($userfollows) == 0):
        {
?>
            <td id="follow_<?php echo $cuser['User']['id']; ?>"><a style="cursor:pointer;" onclick="set_follow(<?php echo $uid; ?>, <?php echo $cuser['User']['id']; ?>)"><img src='<?php echo $this->webroot; ?>img/follow1.png' width='40px;' /></a></td>
<?php
        }
        else:
        {
?>
            <td id="follow_<?php echo $cuser['User']['id']; ?>"><a style="cursor:pointer;" onclick="set_follow(<?php echo $uid; ?>, <?php echo $cuser['User']['id']; ?>)"><img src='<?php echo $this->webroot; ?>img/follow.png' width='40px;' /></a></td>
<?php
        }
        endif;
?>
            </tr>
        </table>
<?php
    }
    endforeach;
    else:
?>
        <div align="center"><?php echo __('No result found')?></div>
<?php
    endif;
?>
    </div>
