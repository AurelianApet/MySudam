<?php
echo $this->Html->css(array('jquery.mp'), null, array('inline' => false));
echo $this->Html->script(array('jquery.mp.min'), array('inline' => false));
?>

<div class="bar-content">
    <div id="divLoading" style="position:fixed; left:0; right:0; bottom:0; opacity:0.5; background:black; height:100%; box-shadow:0 1px 4px rgba(0,0,0,0.5); z-index:21; display:none;">
        <div style="position: fixed; width:100%; text-align:center; bottom: 50%; z-index: 22;">
            <img width="50" height="50" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/spinner.svg';?>"/>
            <br><br>
            <span style="font-size: 14px; color:white;">
                <?php echo __('기부중...');?>
            </span>
        </div>
    </div>

    <div class="content_center">
        <ul id="list-content">
            <li>
                <div style="padding:20px; text-align:center;">
                    <table width="100%">
                        <tr>
                            <td width="20%" style="padding:10px;">
                                <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'users/view/'.$uid;?>">
                                    <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'uploads/users/avatar/'.$uid.'/'.$donation_info["avatar"];?>" style="width:70px; height:70px; border-radius:35px;" />
                                </a>
                            </td>
                            <td width="80%" align="left" style="padding:10px;">
                                <ul id="list-content">
                                    <li>
                                        <span style="font-size: 20px; font-weight: bold;"><?php echo $donation_info["name"];?></span>
                                    </li>
                                    <li>
                                        <span style="font-size: 14px; border:1px solid grey; border-radius:10px; padding:2px;">
                                            <?php echo $donation_info["content"];?>
                                        </span>
                                        &nbsp;
                                        <span style="font-size: 14px; border:1px solid grey; border-radius:10px; padding:2px;">
                                            <?php echo $donation_info["birthday"];?>
                                        </span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr height="20"><td></td></tr>
                        <tr>
                            <td width="100%" colspan="2">
                                <span style="font-size: 16px; font-weight: bold;">
                                    <?php echo __("총 ".$donation_info["sd_count"]."회 쓰담쓰담했어요.");?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="padding:20px; text-align:center; border-top: 1px solid grey;">
                    <table width="100%" >
                        <tr>
                            <td width="80%">
                                <ul id="list-content">
                                    <li>
                                        <span style="font-size: 20px; font-weight: bold;">
                                            <?php echo __("현재 기부가능한 쓰담쓰담");?>
                                        </span>
                                    </li>
                                    <li>
                                        <span id="available_amount" style="font-size: 30px; font-weight: bold;">
                                            <?php echo $donation_info["available_amount"];?>
                                        </span>
                                    </li>
                                </ul>
                            </td>
                            <td width="20%">
                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'/img/hand.png';?>" style="width:100%; padding:10px;" />
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="padding:20px; text-align:center; border-top: 1px solid grey;">
                    <table width="100%" >
                        <tr>
                            <td width="80%">
                                <ul id="list-content">
                                    <li>
                                        <span style="font-size: 20px; font-weight: bold;">
                                            <?php echo __("이번달 기부한 쓰담쓰담");?>
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-size: 30px; font-weight: bold;">
                                            <?php echo $donation_info["month_amount"];?>
                                        </span>
                                    </li>
                                </ul>
                            </td>
                            <td width="20%">
                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'/img/hand.png';?>" style="width:100%; padding:10px;" />
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="padding:20px; text-align:center; border-top: 1px solid grey;">
                    <table width="100%" >
                        <tr>
                            <td width="80%">
                                <ul id="list-content">
                                    <li>
                                        <span style="font-size: 20px; font-weight: bold;">
                                            <?php echo __("현재까지 기부한 쓰담쓰담");?>
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-size: 30px; font-weight: bold;">
                                            <?php echo $donation_info["total_amount"];?>
                                        </span>
                                    </li>
                                </ul>
                            </td>
                            <td width="20%">
                                <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'/img/hand.png';?>" style="width:100%; padding:10px;" />
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="padding:20px; text-align:center; border-top: 1px solid grey;">
                    <?php if($donation_info["available_amount"] >0):?>
                        <script>
                            function donate(type){
                                $("#divLoading").fadeIn();
                                var url = "<?php echo $this->request->base; ?>/Donation/donatePoint/" + type;
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    success: function () {
                                        location.reload();
                                    }
                                });
                            }
                        </script>
                        <a onclick="donate(<?php echo $type; ?>);">
                            <button type="button" style="width:80%; height:50px; border:1px solid grey; border-radius:10px; background-color:grey; color:white;"><?php echo __('기부하기') ?></button>
                        </a>
                    <?php else: ?>
                        <script>
                            function showMessage(){
                                alert("현재 기부가능한 쓰담쓰담이 존재하지 않아 기부할수 없습니다.");
                            }
                        </script>
                        <a onclick="showMessage();">
                            <button type="button" style="width:80%; height:50px; border:1px solid grey; border-radius:10px; background-color:#aaaaaa; color:white;"><?php echo __('기부하기') ?></button>
                        </a>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
