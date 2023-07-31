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
                <div style="paddin:20px; text-align:center;">
                    <span style="font-size: 24px;"><?php echo $title; ?></span>
                </div>
            </li>
            <li>
                <div style="padding-top:20px; text-align:center;">
                    <table width="100%" style="padding:10px;">
                        <tr>
                            <td width="50%" align="center" style="vertical-align: bottom;">    
                                <span style="font-size:16px; font-weight:bold;"><?php echo $dog_donation_amounts; ?></span>
                            </td>
                            <td width="50%" align="center" style="vertical-align: bottom;">    
                                <span style="font-size:16px; font-weight:bold;"><?php echo $cat_donation_amounts; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center" style="vertical-align: bottom;">    
                                <div style="width:50%; height:<?php echo $dog_height; ?>px; text-align:center; background-color: #5555FF;">
                                </div>
                            </td>
                            <td width="50%" align="center" style="vertical-align: bottom;">
                                <div style="width:50%; height:<?php echo $cat_height; ?>px; text-align:center; background-color: #FFFF55;">
                                </div>
                            </td>
                        </tr>
                        <tr height="50">
                            <td width="50%">
                                <span style="font-size:18px;"><?php echo __('강아지'); ?></span>
                            </td>
                            <td width="50%">
                                <span style="font-size:18px;"><?php echo __('고양이'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'/img/dog.png';?>" style="width:80%; padding:10px;"/>
                            </td>
                            <td width="50%">
                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'/img/cat.png';?>" style="width:80%; padding:10px;"/>
                            </td>
                        <tr>
                        <tr height="60">
                            <td width="50%">
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/donate/1';?>">
                                    <button type="button" style="width:80%; height:50px; border:1px solid grey; border-radius:10px; background-color:grey; color:white;"><?php echo __('기부하기') ?></button>
                                </a>
                            </td>
                            <td width="50%">
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/donate/2';?>">
                                    <button type="button" style="width:80%; height:50px; border:1px solid grey; border-radius:10px; background-color:grey; color:white;"><?php echo __('기부하기') ?></button>
                                </a>
                            </td>
                        <tr>
                        <tr height="80">
                            <td width="50%">
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/news/1';?>">
                                    <button type="button" style="width:80%; height:70px; border:1px solid grey; border-radius:10px; background-color:#cccccc; color: black;"><?php echo __('기부뉴스') ?></button>
                                </a>
                            </td>
                            <td width="50%">
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'Donation/news/2';?>">
                                    <button type="button" style="width:80%; height:70px; border:1px solid grey; border-radius:10px; background-color:#cccccc; color: black;"><?php echo __('기부뉴스') ?></button>
                                </a>
                            </td>
                        <tr>
                    </table>
                </div>
            </li>

            <li>
                <div style="overflow:scroll; padding-top:5px;">
                    <table>
                        <tr>
                            <td width="100" style="padding:10px;">
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>
