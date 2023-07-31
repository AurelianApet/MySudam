<?php
echo $this->Html->css(array('jquery.mp'), null, array('inline' => false));
echo $this->Html->script(array('jquery.mp.min'), array('inline' => false));
?>

<div class="bar-content">
    <div class="content_center">
        <ul id="list-content">
            <li>
                <div style="padding:20px; text-align:center;">
                    <table width="100%">
                        <tr>
                            <td width="50%">
                                <?php
                                    $color = "white;";
                                    $font_color = "black;";
                                    if($this->getPageId()=="page_Donation-index") {
                                        $color = "grey;";
                                        $font_color = "white;";
                                    }
                                ?>
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/index';?>">
                                    <button type="button" id="btnDonationState" style="width:100%; height:50px; border:1px solid grey; border-top-left-radius:10px; border-bottom-left-radius:10px; background-color: <?php echo $color; ?> color: <?php echo $font_color; ?>"><?php echo __("기부현황"); ?></button>
                                </a>
                            </td>
                            <td width="50%">
                                <?php
                                    $color = "white;";
                                    $font_color = "black;";
                                    if($this->getPageId()=="page_Donation-mydonation") {
                                        $color = "grey;";
                                        $font_color = "white;";
                                    }
                                ?>
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/mydonation';?>">
                                    <button type="button" id="btnMyDonation" style="width:100%; height:50px; border:1px solid grey; border-top-right-radius:10px; border-bottom-right-radius:10px; background-color: <?php echo $color; ?> color: <?php echo $font_color; ?>"><?php echo __("나의 기부"); ?></button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="padding:20px; text-align:center;">
                    <span style="font-size: 16px; font-weight: bold;">
                        <?php echo __("2차개발");?>
                    </span>
                </div>
            </li>
        </ul>
    </div>
</div>
