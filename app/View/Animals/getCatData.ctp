
<div id="container">
<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $cuser = $userModel->find( 'all' );
?>
    <table style="width: 395px;">
        <tbody><tr>
            <td>
                <table style="width: 100%;">
                    <tbody><tr>
                        <td style="width:50%">
                            <input type="button" value="강아지" style="width: 100%;" onclick='onDogList()'>
                        </td>
                        <td>
                            <input type="button" value="고양이" style="width: 100%;" onclick='onCatList()'>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr style="height: 300px;">
            <td>
                <table style="width:100%;height:50px;">
            <?php
                foreach($cuser as $user):
                {
            //        $userid = $this->Auth->user('id');
                    $ani_id = $user['User']['ani_id'];
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
                    if($type == "2"):
                    {
            ?>
                    <tr>
                        <td>
                            <a href="<?php echo $this->request->base ?>/blogs/profile_user_blog/<?php echo $user['User']['id']?>" rel="profile_content">
                                <table width="100%">
                                    <tr>
                                        <td style="width:20%">
                                            <img src="<?php echo $this->webroot; ?>img/circle.png" width="40px;" />
                                        </td>
                                        <td style="width:50%">
                                            <table style="width:100%">
                                                <tr style="height:30px;" onclick="">
                                                    <td style="width:60%;">
                                                        <?php echo $cam_name; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:50%">
                                                        <?php echo $ani_type . " / "; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $c_old; ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src="<?php echo $this->webroot; ?>img/circle.png" width="40px;" />
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
            <?php
                    }
                    endif;
                }
                endforeach;
            ?>
                </table>
            </td>
        </tr>
    </tbody></table>
    </div>
