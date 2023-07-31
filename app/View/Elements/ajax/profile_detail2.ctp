
<script>

    function updateProfile()
    {

    }

</script>

<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $user['User']['id'] ) ) );
    $ani_id = $cuser['User']['ani_id'];
    $point = $cuser['User']['point'];
    $donation_count = $cuser['User']['donation_count'];
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
    $strokeModel = Moocore::getInstance()->getModel('Stroke');
    $strokes = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.user_id' => $user['User']['id'] ) ) );
?>

<div class="p_7" style="background-color:white;">
    <div style="padding-top:20px;">
        <table width="100%" style="margin-left:30px;">
            <tr>
                <td width="20%">
                    <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
                </td>
                <td>
                    <table width="100%" height="50px;">
                        <tr height="50%">
                            <td style="font-size:13pt;font-weight:600;">
                                <?php echo $cam_name; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <span style="border-style:groove;">
                                <?php echo $ani_type;?>
                                </span>
                            </td>
                            <td>
                                <span style="border-style:groove;">
                                <?php echo $c_old; ?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div style="padding-top:10px;">
        <?php if ( ($cuser['User']['ani_id'] == $user['User']['id'] ) || ( !empty( $cuser['User']['ani_id'] ) && !empty($cuser) && $cuser['Role']['is_admin'] ) ): ?>
        <center>
        <input type="button" value="프로필 수정" onclick="updateProfile();" style="width:90%">
        </center>
        <?php endif; ?>
    </div>
    <div style="padding-top:30px;padding-left:60px;">
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="<?php echo $this->webroot; ?>img/hand.png" width="30px;" />
                </td>
                <td>
                    총 쓰담포인트 <?=$point?>
                </td>
            </tr>
        </table>
    </div>
    <div style="padding-top:20px;padding-left:70px;">
        <table width="100%">
            <tr>
                <td width="40%">
                    <table width="100%">
                        <tr style="height:30px;">
                            <td>
                                기부가능쓰담
                            </td>
                        </tr>
                        <tr style="height:30px;">
                            <td style="padding-left:25px;">
                                <?php echo $point; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr style="height:30px;">
                            <td>
                                현재까지 기부한 쓰담
                            </td>
                        </tr>
                        <tr style="height:30px;">
                            <td style="padding-left:55px;">
                                <?php echo $donation_count; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table width="100%">
            <tr>
                <td width="33%">
                    <a href="<?php echo $this->Html->url('/', true);?>users/view/<?php echo $user['User']['id']; ?>/1/1">
                        <table width="100%" style="border-style:groove;">
                            <tr style="height:30px;">
                                <td style="padding-left:40px;">
                                    게시물
                                </td>
                            </tr>
                            <tr style="height:30px;">
                                <td style="padding-left:55px;">
                                    <?php echo $blog_count?>
                                </td>
                            </tr>
                        </table>
                    </a>
                </td>
                <td width="33%">
                    <a href="<?php echo $this->Html->url('/', true);?>users/view/<?php echo $user['User']['id']; ?>/1/2">
                        <table width="100%" style="border-style:groove;">
                            <tr style="height:30px;">
                                <td style="padding-left:40px;">
                                    팔로워
                                </td>
                            </tr>
                            <tr style="height:30px;">
                                <td style="padding-left:55px;">
                                    <?php echo $follower_count ?>
                                </td>
                            </tr>
                        </table>
                    </a>
                </td>
                <td width="">
                    <a href="<?php echo $this->Html->url('/', true);?>users/view/<?php echo $user['User']['id']; ?>/1/3">
                        <table width="100%" style="border-style:groove;">
                            <tr style="height:30px;">
                                <td style="padding-left:40px;">
                                    팔로잉
                                </td>
                            </tr>
                            <tr style="height:30px;">
                                <td style="padding-left:55px;">
                                    <?php echo $following_count ?>
                                </td>
                            </tr>
                        </table>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div style="padding-top:50px;" id="content">
    <ul>
        <?php
            echo $this->element('ajax/profile_following');
        ?>
    </ul>
    </div>

<!--쓰담순위 현시-->

    <div>
        <table width="100%" height="50px;">
            <tr>
                <td width="100%">
<?php
    $strokeModel =  Moocore::getInstance()->getModel('Stroke');
    $strokes = $strokeModel->find( 'all', array(
        'conditions' => array( 'Stroke.target_id' => $user['User']['id'] ),
        'fields'=>array('DISTINCT user_id') ) );
    $stroke_users = array();
    $stroke_counts = array();
    for($i = 0; $i < count($strokes); $i ++)
    {
        array_push($stroke_users, $strokes[$i]['Stroke']['user_id']);
    }

    for($i = 0; $i < count($stroke_users); $i ++)
    {
        $strokes = $strokeModel->find( 'count', array(
            'conditions' => array( 'Stroke.target_id' => $user['User']['id'], 'Stroke.user_id' => $stroke_users[$i] ) ) );
        array_push($stroke_counts, $strokes);
    }

    $temp = null;
    for($i = 0; $i < count($stroke_users); $i ++)
    {
        for($j = $i; $j < floor(sqrt(count($stroke_users) ) ); $j ++)
        {
            if($stroke_counts[$i] < $stroke_counts[$j])
            {
                $temp = $stroke_counts[$i];
                $stroke_counts[$i] = $stroke_counts[$j];
                $stroke_counts[$j] = $temp;

                $temp = $stroke_users[$i];
                $stroke_users[$i] = $stroke_users[$j];
                $stroke_users[$j] = $temp;
            }
        }
    }
?>
        <table width="100%;"><tr>
<?php
    for($i = 0; $i < count($stroke_users); $i ++):
    {
        $s_user = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $stroke_users[$i] ) ) );
        $s_ani_id = $s_user['User']['ani_id'];
        $s_cam = $campanionModel->find('first', array('conditions' => array('Companion.id' => $s_ani_id)));
        $s_cam_name = $s_cam['Companion']['name'];
//        $ani = $s_cam_name['Companion']['type'];

?>
        <td width="40px;">
            <a href = "<?php echo $this->Html->url('/', true); ?> users/view/<?php echo $stroke_users[$i]; ?>"><?php echo $s_cam_name; ?> </a>
        </td>
<?php
    }
    endfor;
?>
        </tr></table>
                </td>
            </tr>
        </table>
    </div>
</div>