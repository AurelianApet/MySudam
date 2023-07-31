
<ul class="blog-content-list">
<?php
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
if (!empty($blogs) && count($blogs) > 0)
{
    $userModel = Moocore::getInstance()->getModel('User');
    $campanionModel = Moocore::getInstance()->getModel('Companion');
    $animalModel =  Moocore::getInstance()->getModel('Animal');
    $strokeModel = Moocore::getInstance()->getModel('Stroke');
//	$i = 1;
	for($i = 0; $i < count($blogs); $i++):
//	foreach ($blogs as $blog):
?>
<?php
//    $userid = $blog['Blog']['user_id'];
    $userid = $blogs[$i]['Blog']['user_id'];
    $cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $userid ) ) );
    if(count($cuser) == 0)
        continue;
    $ani_id = $cuser['User']['ani_id'];
    if($ani_id == null)
        continue;
?>
        <li class="full_content p_m_10">
            <div>
<?php
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

    $c_time = $this->Moo->getTime( $blogs[$i]['Blog']['created'], Configure::read('core.date_format'), $utz );
    $c_time = str_replace("hours","시간",$c_time);
    $c_time = str_replace("minutes","분",$c_time);
    $c_time = str_replace("ago","전",$c_time);
    $c_time = str_replace("hour","시간",$c_time);
    $c_time = str_replace("minute","분",$c_time);
?>
<?php
    $stroke_all = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $blogs[$i]['Blog']['user_id'], 'Stroke.blog_id' => $blogs[$i]['Blog']['id'] )
     , 'order' => array('Stroke.created DESC') ) );
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
        if(($stroke['Stroke']['message'] != null) && ($stroke['Stroke']['message'] != ""))
            $comment_count ++;
    }
?>
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
            <div class="blog-info" style="margin-left: 10px;">
                <div>
                <a href="<?php echo $this->request->base?>/blogs/view/<?php echo $blogs[$i]['Blog']['id']?>/<?php echo seoUrl($blogs[$i]['Blog']['title'])?>">
                    <img width="300" style="width: 300px!important;height: 300px!important;" src="<?php echo $blogHelper->getImage($blogs[$i], array('prefix' => '150_square'))?>" class="img_wrapper2 user_list thumb_mobile">
                </a>
                </div>
			<div>
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
                                <a href="<?php echo $this->Html->url( '/', true ); ?>users/getSudamList/<?php echo $blogs[$i]['Blog']['user_id']?>/<?php echo $blogs[$i]['Blog']['id'] ?>">쓰담한 사람</a>
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
//                                 if( !empty($uid) && (($blogs[$i]['Blog']['user_id'] == $uid ) || ( !empty($cuser) && $cuser['Role']['is_admin'] ) ) ):
                                 if( !empty($uid) && (($blogs[$i]['Blog']['user_id'] == $uid ) ) ):
                                 ?>
                                    <div class="list_option">
                                        <div class="dropdown">
                                            <button id="dropdown-edit" data-target="#" data-toggle="dropdown" >
                                                <i class="material-icons">more_vert</i>
                                            </button>
                                            <ul role="menu" class="dropdown-menu" aria-labelledby="dropdown-edit" style="float: right;">

                                                <?php if ($blogs[$i]['User']['id'] == $uid || ( !empty($cuser) && $cuser['Role']['is_admin'] )): ?>
                                                    <li><a href="<?php echo $this->request->base?>/blogs/create/<?php echo $blogs[$i]['Blog']['id']?>"> <?php echo __( 'Edit Entry')?></a></li>
                                                <?php endif; ?>
                                                <?php if ( ($blogs[$i]['Blog']['user_id'] == $uid ) || ( !empty( $blogs[$i]['Blog']['id'] ) && !empty($cuser) && $cuser['Role']['is_admin'] ) ): ?>
                                                    <li><a href="javascript:void(0)" data-id="<?php echo $blogs[$i]['Blog']['id']?>" class="deleteBlog" > <?php echo __( 'Delete Entry')?></a></li>
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
//                                echo $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''),
//                                $blogs[$i]['Blog']['body'])), 200, array('eclipse' => '')), Configure::read('Blog.blog_hashtag_enabled'));
                                echo $blogs[$i]['Blog']['body'] . "<br>";
                                $tagModel = Moocore::getInstance()->getModel('Tag');
                                $tags = $tagModel->find( 'first', array( 'conditions' => array( 'Tag.target_id' => $blogs[$i]['Blog']['id'], 'Tag.type' => 'Blog_Blog' ) ) );
                                if($tags != null)
                                    echo "<ul class='tags'><li><a>" . $tags['Tag']['tag'] . "</a></li></ul>";
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo $this->request->base ?>/blogs/view/<?php echo  $blogs[$i]['Blog']['id'] ?>/<?php echo seoUrl($blogs[$i]['Blog']['title'])?>">
                            더보기
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table style="width:100%;height:20px;">
                <?php
                    $stroke_all = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $blogs[$i]['Blog']['user_id'], 'Stroke.blog_id' => $blogs[$i]['Blog']['id'] )
                    , 'order' => array('Stroke.created DESC') ) );
                    foreach($stroke_all as $stroke):
                    {
                        $stroke_userid = $stroke['Stroke']['user_id'];
                        $s_cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $stroke_userid ) ) );
                        if(count($s_cuser) == 0)
                            continue;
                        $s_ani_id = $s_cuser['User']['ani_id'];
                        if($s_ani_id == null)
                            continue;
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
                ?>
                <tr>
                    <td>
                        <a href = "<?php echo $this->Html->url( '/', true ); ?>users/view/<?php echo $stroke_userid; ?>">
                            <table width="100%">
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
                                                                <?php echo $s_ani_type . " / " . $s_c_old; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                             <tr>
                                         </table>
                                     </td>
                                </tr>
                                <tr>
                                    <td width="100%">
                                        <table width="100%">
                                            <tr>
                                                <td width="100%">
                                                    <?php echo $s_time; ?>
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
                    endforeach;
                ?>
                </table>
            </div>
        </div>
        <div class="clear"></div>
        <div class="extra_info">
            <?php  $this->Html->rating($blogs[$i]['Blog']['id'],'blogs', 'Blog'); ?>
        </div>
    </div>
	</li>
<?php
//    $i++;
//	endforeach;
    endfor;
}
else
	echo '<div class="clear" align="center">' . __( 'No more results found') . '</div>';
?>
<?php if (isset($more_url)&& !empty($more_result)): ?>
    <?php $this->Html->viewMore($more_url) ?>
<?php endif; ?>
</ul>
<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooBlog"], function($,mooBlog) {
        mooBlog.initOnListing();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery','mooBlog'), 'object' => array('$', 'mooBlog'))); ?>
mooBlog.initOnListing();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>
