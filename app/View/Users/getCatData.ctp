<script>
    function onDogList()
    {
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Users/getDogData',
            type: "post",
            async: false,
            success: function (data) {
                $("#aniList").html(data);
            },
            error: function (data) {
            }
        });
    }

    function onCatList()
    {
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Users/getCatData',
            type: "post",
            async: false,
            success: function (data) {
                $("#aniList").html(data);
            },
            error: function (data) {
            }
        });
    }
</script>
<div id="container">
<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $users = $userModel->find( 'all' );
?>

    <table style="width: 395px;">
        <tbody>
        <tr style="height: 300px;">
            <td>
<?php
if (count($users) > 0)
{
?>
    <table style="width:100%;height:50px;">
<?php
	foreach ($users as $user):
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
        endforeach;
?>
                </table>
<?php
}
else
    echo '<div class="clear">' . __('No more results found') . '</div>';
?>
            </td>
        </tr>
    </tbody></table>
    <?php $this->Html->rating($user['User']['id'],'users'); ?>
</div>
