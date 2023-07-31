<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    for($i = 0; $i < count($followings); $i ++):
    {
        $user_id = $followings[$i]['UserFollow']['user_id'];
        $cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $user_id ) ) );
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
    <a href = "<?php echo $this->Html->url('/', true); ?>users/view/<?php echo $user_id; ?>">
        <table width="100%">
             <tr>
                <td width="20%">
                 <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;">
                </td>
                <td width="50%">
                    <table width="100%">
                        <tr>
                            <td>
                            <?php echo $cam_name ;?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <?php echo $ani_type .  "/" . $c_old; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <a href="">
                         <img src="<?php echo $this->webroot; ?>img/follow.png" width="30px;">
                    </a>
                </td>
            </tr>
        </table>
    </a>
<?php
    }
    endfor;
?>
