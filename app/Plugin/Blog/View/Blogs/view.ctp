<?php
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
?>

<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery', 'mooBlog', 'hideshare'),'object'=>array('$', 'mooBlog'))); ?>
mooBlog.initOnView();
$(".sharethis").hideshare({media: '<?php echo $blogHelper->getImage($blog, array('prefix' => '300_square'));?>', linkedin: false});
<?php $this->Html->scriptEnd(); ?>

<?php
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $strokeModel = Moocore::getInstance()->getModel('Stroke');

    $userid = $blog['Blog']['user_id'];
    $cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $userid ) ) );
    $ani_id = $cuser['User']['ani_id'];
    $point = $cuser['User']['point'];
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

    $c_time = $this->Moo->getTime( $blog['Blog']['created'], Configure::read('core.date_format'), $utz );
    $c_time = str_replace("hours","시간",$c_time);
    $c_time = str_replace("minutes","분",$c_time);
    $c_time = str_replace("ago","전",$c_time);
    $c_time = str_replace("hour","시간",$c_time);
    $c_time = str_replace("minute","분",$c_time);
?>
<?php
    $stroke_all = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $blog['Blog']['user_id'], 'Stroke.blog_id' => $blog['Blog']['id'] ) ) );
    $stroke_count = 0;
    $comment_count = 0;
    foreach($stroke_all as $stroke)
    {
        $stroke_userid = $stroke['Stroke']['user_id'];
        $s_cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $stroke_userid ) ) );
        if(count($s_cuser) == 0)
            continue;
        $s_ani_id = $s_cuser['User']['ani_id'];
        if($s_ani_id == null)
            continue;
        $stroke_count ++;
        if(($stroke['Stroke']['message'] != null) && ($stroke['Stroke']['user_id'] != ""))
            $comment_count ++;
    }
?>

<?php $this->setNotEmpty('west');?>
<?php $this->start('west'); ?>
	<?php if(!empty($other_entries)): ?>
        <div class="box2">
            <h3><?php echo __( 'Other Entries')?></h3>
            <div class="box_content">
                <?php echo $this->element('blocks/blogs_block', array('blogs' => $other_entries)); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if(!empty($tags)): ?>
	<div class="box2">
            <h3><?php echo __( 'Tags')?></h3>
            <div class="box_content">
                <?php echo $this->element( 'blocks/tags_item_block' ); ?>
            </div>
	</div>
	<?php endif; ?>
<?php $this->end(); ?>

<div class="bar-content full_content p_m_10">
    <div class="content_center">
	<div class="post_body">
        <div class="mo_breadcrumb">
            <h1><?php echo h($blog['Blog']['title'])?></h1>
            <?php if(!empty($uid)): ?>
            <div class="list_option">
                <div class="dropdown">
                    <ul role="menu" class="dropdown-menu" aria-labelledby="dropdown-edit">
                        <?php if ($blog['User']['id'] == $uid || ( !empty($cuser) && $cuser['Role']['is_admin'] )): ?>
                            <li><a href="<?php echo $this->request->base?>/blogs/create/<?php echo $blog['Blog']['id']?>"> <?php echo __( 'Edit Entry')?></a></li>
                        <?php endif; ?>
                        <?php if ( ($blog['Blog']['user_id'] == $uid ) || ( !empty( $blog['Blog']['id'] ) && !empty($cuser) && $cuser['Role']['is_admin'] ) ): ?>
                            <li><a href="javascript:void(0)" data-id="<?php echo $blog['Blog']['id']?>" class="deleteBlog"> <?php echo __( 'Delete Entry')?></a></li>
                            <li class="seperate"></li>
                        <?php endif; ?>
                        <li>
                            <?php
                            $this->MooPopup->tag(array(

                                'href'=>$this->Html->url(array(
                                    "controller" => "reports",
                                    "action" => "ajax_create",
                                    "plugin" => false,
                                    'Blog_Blog',
                                    $blog['Blog']['id'],
                                )),
                                'title' => __( 'Report Blog'),
                                'innerHtml'=>__( 'Report Blog'),
                            ));
                            ?>
                        </li>
                        <?php if ($blog['Blog']['privacy'] != PRIVACY_ME): ?>

                        <?php endif; ?>

                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div>
            <table style="width:100%;height:50px;">
                <tr style="height:30px;">
                    <td style="width:60%;">
                        <?php echo $cam_name; ?>
                    </td>
                    <td>
                        <?php echo $c_time; ?> &nbsp;
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
        </div>
    </div>
    </div>
</div>

<div class="bar-content full_content p_m_10 blog-comment">
    <div>
        <div>
            <script>
                var data = new FormData();
                var hasMessage = 0;

                function sudamComment(val)
                {
                    hasMessage = val;
                    if(hasMessage == 1)
                    {
                        document.getElementById("sudam_comment").style.display = "";
                    }
                    else
                    {
                        confirmSudamComment(0);
                    }
                }

                function confirmSudamComment(val)
                {
                    document.getElementById("sudam_comment_alert").style.display = "none";
                    if(val == 1)
                    {
                        document.getElementById("sudam_comment").style.display = "none";
                    }
                    if(hasMessage != 0)
                    {
                        data.append("message", document.getElementById("sudamCommentText").value);
                    }
                    $.ajax({
                        url: '<?php echo $this->request->base?>/blogs/saveSudam',
                        dataType: 'text',
                        cache: false,
                        type: "post",
                        processData: false,
                        contentType: false,
                        async: false,
                        data:data,
                        success: function (data) {
                        },
                        error: function () {
                        }
                    });
                    location.reload();
                }

                function setSudam(id)
                {
/*
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!
                    var yyyy = today.getFullYear();
                    if(dd < 10) {
                        dd = '0' + dd
                    }
                    if(mm < 10) {
                        mm = '0' + mm
                    }
                    today = yyyy + '-' + mm + '-' + dd;
*/
                    <?php
                        $date = date('Y-m-d');
                        $user_id = $this->Auth->user('id');
                        $targetid = $blog['Blog']['user_id'];
                        $strokeModel = MooCore::getInstance()->getModel('Stroke');
                        $stroke = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $targetid, 'Stroke.user_id' => $user_id, 'Stroke.created' => $date )
                         , 'order' => array('Stroke.created DESC')) );
                        $sc = count($stroke);
                    ?>
                    if(<?=$user_id?> == <?=$targetid?>)
                    {
<?php
                        $target_users = $userModel->find('first', array('conditions' => array('User.id' => $blog['Blog']['user_id'])));
                        $responseid = $target_users['User']['response_self'];
                        $responsetxtModel = MooCore::getInstance()->getModel('ResponseText');
                        $responsetxts = $responsetxtModel->find( 'first', array( 'conditions' => array( 'ResponseText.id' => $responseid)));
                        if(!empty($responsetxts)):
                        {
                            $responsetxt = $responsetxts['ResponseText']['value'];
?>
                            var responseText = '<?php echo $responsetxt; ?>';
<?php
                        }
                        endif;
?>
                    }
                    else
                    {
                        if(id == <?=$blog['Blog']['like_id']?>)
                        {
                            var response = 1;
<?php
                            $target_users = $userModel->find('first', array('conditions' => array('User.id' => $blog['Blog']['user_id'])));
                            $responseid = $target_users['User']['response_very_like_id'];
                            $responsetxtModel = MooCore::getInstance()->getModel('ResponseText');
                            $responsetxts = $responsetxtModel->find( 'first', array( 'conditions' => array( 'ResponseText.id' => $responseid)));
                            if(!empty($responsetxts)):
                            {
                                $responsetxt = $responsetxts['ResponseText']['value'];
?>
                                var responseText = '<?php echo $responsetxt; ?>';
<?php
                            }
                            endif;
?>
                        }
                        else if(id == <?=$blog['Blog']['dislike_id']?>)
                        {
                            var response = 2;
<?php
                            $target_users = $userModel->find('first', array('conditions' => array('User.id' => $blog['Blog']['user_id'])));
                            $responseid = $target_users['User']['response_dislike_id'];
                            $responsetxtModel = MooCore::getInstance()->getModel('ResponseText');
                            $responsetxts = $responsetxtModel->find( 'first', array( 'conditions' => array( 'ResponseText.id' => $responseid)));
                            if(!empty($responsetxts)):
                            {
                                $responsetxt = $responsetxts['ResponseText']['value'];
?>
                                var responseText = '<?php echo $responsetxt; ?>';
<?php
                            }
                            endif;
?>
                        }
                        else
                        {
                            var response = 3;
<?php
                            $target_users = $userModel->find('first', array('conditions' => array('User.id' => $blog['Blog']['user_id'])));
                            $responseid = $target_users['User']['response_like_id'];
                            $responsetxtModel = MooCore::getInstance()->getModel('ResponseText');
                            $responsetxts = $responsetxtModel->find( 'first', array( 'conditions' => array( 'ResponseText.id' => $responseid)));
                            if(!empty($responsetxts)):
                            {
                                $responsetxt = $responsetxts['ResponseText']['value'];
?>
                                var responseText = '<?php echo $responsetxt; ?>';
<?php
                            }
                            endif;
?>
                        }
                    }

                    document.getElementById("sudamResponseText").value = responseText;
                    data.append('userid', '<?=$user_id?>');
                    data.append('targetid', '<?=$blog['Blog']['user_id']?>');
                    data.append('response', response);
                    data.append('blogid', '<?=$blog['Blog']['id']?>');
                    document.getElementById("sudam_comment_alert").style.display = "";
                }
            </script>

            <div id="sudam_comment_alert" style="z-index: 3;position: absolute;top: 300px;left: 150px;display:none;background-color:grey;">
                <table style="width:100%;height:100%">
                    <tbody><tr><td>
                        한마디 남겨주실래요?
                        </td></tr>
                    <tr><td>
                        <input type="button" value="네" onclick="sudamComment('1')"></td>
                        <td><input type="button" value="아니오" onclick="sudamComment('0')"></td></tr>
                </tbody></table>
            </div>

            <div id="sudam_comment" style="z-index: 4;position: absolute;top: 300px;left: 150px;display:none;">
                <table>
                <tr><td>
                    <input type="text" style="width:200px;height:100px;" placeholder="댓글작성" id="sudamCommentText">
                </td></tr>
                <tr><td>
                    <input type="text" style="width:200px;height:50px;" id="sudamResponseText"/>
                </td></tr>
                <tr><td>
                    <input type="button" value="확인" onclick="confirmSudamComment(1)"/>
                </td></tr>
                </table>
            </div>

            <div id="blog_sd_area" style="display:block;position:absolute;width:300px;height:300px;z-index:2;">
                <table style="width:300px;height:300px;">
                    <tr style="height:100px;">
                        <td style="width:100px;"><img id="sd_1" class="sd" onclick="setSudam(1);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_2" class="sd" onclick="setSudam(2);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_3" class="sd" onclick="setSudam(3);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                    </tr>
                    <tr style="height:100px;">
                        <td style="width:100px;"><img id="sd_4" class="sd" onclick="setSudam(4);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_5" class="sd" onclick="setSudam(5);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_6" class="sd" onclick="setSudam(6);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                    </tr>
                    <tr style="height:100px;">
                        <td style="width:100px;"><img id="sd_7" class="sd" onclick="setSudam(7);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_8" class="sd" onclick="setSudam(8);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                        <td style="width:100px;"><img id="sd_9" class="sd" onclick="setSudam(9);" style="cursor:pointer;width:100%;height:100%;" src="<?php echo $this->webroot; ?>img/blogs/transparent.png"/></td>
                    </tr>
                </table>
            </div>

            <div id="blog_grid" style="position:absolute;z-index:1;">
                <img width="300px;" src="<?php echo $this->webroot; ?>img/blogs/grid.png"/>
            </div>

            <div id="blog_thumnail_preview">
                <?php if (!empty($blog['Blog']['thumbnail'])): ?>
                    <img src="<?php echo $blogHelper->getImage($blog, array('prefix' => '150_square')); ?>" style="width:300px; height:300px;" />
                <?php else: ?>
                    <img style="display: none;" src="" style="width:450px; height:450px;" />
                <?php endif; ?>
            </div>
        </div>
        <div>
            <table style="width:100%;height:20px;">
                <tr style="height:100%;">
                    <td style="width:15%">
                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                    </td>
                    <td style="width:15%">
                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                    </td>
                    <td style="width:15%">
                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                    </td>
                    <td style="width:15%">
                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                    </td>
                    <td>
                        <center>
                            <a href="<?php echo $this->Html->url( '/', true ); ?>users/getSudamList/<?php echo $blog['Blog']['user_id']?>/<?php echo $blog['Blog']['id'] ?>">쓰담한 사람</a>
                        </center>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table style="width:100%;height:20px;">
                <tr style="height:100%">
                    <td style="width:10%;">
                        <img src="<?php echo $this->webroot; ?>img/hand.png" width="30px;" />
                    </td>
                    <td style="width:10%">
                        <?php echo $stroke_count; ?>
                    </td>
                    <td style="width:10%">
                        <img src="<?php echo $this->webroot; ?>img/chatting.png" width="30px;" />
                    </td>
                    <td style="width:10%">
                        <?php echo $comment_count; ?>
                    </td>
                    <td>
                        <div>
                            <?php
//                             if( !empty($uid) && (($blog['Blog']['user_id'] == $uid ) || ( !empty($cuser) && $cuser['Role']['is_admin'] ) ) ):
                             if( !empty($uid) && (($blog['Blog']['user_id'] == $uid ) ) ):
                             ?>
                                <div class="list_option">
                                    <div class="dropdown">
                                        <button id="dropdown-edit" data-target="#" data-toggle="dropdown" >
                                            <i class="material-icons">more_vert</i>
                                        </button>
                                        <ul role="menu" class="dropdown-menu" aria-labelledby="dropdown-edit" style="float: right;">

                                            <?php if ($blog['User']['id'] == $uid || ( !empty($cuser) && $cuser['Role']['is_admin'] )): ?>
                                                <li><a href="<?php echo $this->request->base?>/blogs/create/<?php echo $blog['Blog']['id']?>"> <?php echo __( 'Edit Entry')?></a></li>
                                            <?php endif; ?>
                                            <?php if ( ($blog['Blog']['user_id'] == $uid ) || ( !empty( $blog['Blog']['id'] ) && !empty($cuser) && $cuser['Role']['is_admin'] ) ): ?>
                                                <li><a href="javascript:void(0)" data-id="<?php echo $blog['Blog']['id']?>" class="deleteBlog" > <?php echo __( 'Delete Entry')?></a></li>
                                                <li class="seperate"></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table style="width:100%;height:20px;">
                <tr>
                    <td width="80%">
                        <?php
//                            echo $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''),
//                            $blog['Blog']['body'])), 200, array('eclipse' => '')), Configure::read('Blog.blog_hashtag_enabled'));
                            echo $blog['Blog']['body'];
                        ?>
                    </td>
<!--
                    <td>
                        <a href="<?php echo $this->request->base ?>/blogs/view/<?php echo  $blog['Blog']['id'] ?>/<?php echo seoUrl($blog['Blog']['title'])?>">
                        더보기
                        </a>
                    </td>
-->
                </tr>
            </table>
        </div>
        <div>
            <table style="width:100%;height:20px;">
            <?php
                $stroke_all = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $blog['Blog']['user_id'], 'Stroke.blog_id' => $blog['Blog']['id'] )
                , 'order' => array('Stroke.created ASC') ) );
//                foreach($stroke_all as $stroke):
                for($j = count($stroke_all); $j > 0; $j --):
                {
                    $stroke_userid = $stroke_all[$j - 1]['Stroke']['user_id'];
                    $s_cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $stroke_userid ) ) );
                    if(count(s_cuser) == 0)
                        continue;
                    $s_ani_id = $s_cuser['User']['ani_id'];
                    if($s_ani_id == null)
                        continue;
                    $s_user_id = $s_cuser['User']['id'];
                    $s_cam = $campanionModel->find('first', array('conditions' => array('Companion.id' => $s_ani_id)));
                    $s_cam_name = $s_cam['Companion']['name'];
                    $s_cam_birthday = $s_cam['Companion']['c_birthday'];
                    list($syear, $smonth, $sday) = split('[/.-]', $s_cam_birthday);
                    $s_Ydate = date("Y");
                    $s_mdate = date("m");
                    $s_ddate = date("d");
                    $s_old = ($s_Ydate - $syear) * 12 + ($s_mdate - $smonth);
                    $s_y_old = floor($s_old / 12);
                    $s_m_old = $s_old - $s_y_old * 12;
                    $s_c_old = $s_y_old . "살 " . $s_m_old . "개월";
                    $s_ani = $s_cam['Companion']['type'];
                    $s_cani = $animalModel->find('first', array('conditions' => array('Animal.id' => $s_ani)));
                    $s_ani_type = $s_cani['Animal']['content'];
                    $s_time = $this->Moo->getTime( $stroke['Stroke']['created'], Configure::read('core.date_format'), $utz );
                    $s_time = str_replace("hours","시간",$s_time);
                    $s_time = str_replace("minutes","분",$s_time);
                    $s_time = str_replace("ago","전",$s_time);
                    $s_time = str_replace("hour","시간",$s_time);
                    $s_time = str_replace("minute","분",$s_time);
                    if($stroke_all[$j - 1]['Stroke']['response'] == 1):
                        $response = "<font style='color:blue'>쓰담쓰담-" . $cam_name . " 기분이 너무 좋아졌어요</font>";
                    elseif($stroke_all[$j - 1]['Stroke']['response'] == 3):
                        $response = "<font style='color:green'>쓰담쓰담-" . $cam_name . " 기분이 좋아졌어요</font>";
                    elseif($stroke_all[$j - 1]['Stroke']['response'] == 2):
                        $response = "<font style='color:black'>쓰담쓰담-" . $cam_name . " 기분이 상했어요</font>";
                    elseif($stroke_all[$j - 1]['Stroke']['response'] == 4):
                        $response = "<font style='color:red'>쓰담쓰담-" . $cam_name . " 당신은 언제나 좋아요</font>";
                    endif;
            ?>
            <tr>
            <td>
                <a href = "<?php echo $this->Html->url( '/', true ); ?>users/view/<?php echo $blog['Blog']['user_id']?>">
                <table>
                    <tr>
                        <td width="100%">
                            <table width="100%">
                                <tr>
                                    <td style="width:15%">
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="30px;" />
                                    </td>
                                    <td style="width:50px;">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <?php echo $s_cam_name; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $stroke_all[$j - 1]['Stroke']['message']; ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <?php echo $s_time; ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <table width="100%">
                                <tr>
                                    <td width="80%">
                                        <?php echo $response; ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="20px;" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </a>
            </td>
            </tr>
            <?php
                }
//                endforeach;
                endfor;
            ?>
            </table>
        </div>
    </div>
   	<?php //echo $this->renderComment();?>
</div>