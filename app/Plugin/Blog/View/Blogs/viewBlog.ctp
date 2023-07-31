
<?php
echo $this->Html->css(array('jquery.mp'), null, array('inline' => false));
echo $this->Html->script(array('jquery.mp.min'), array('inline' => false));
?>
<div class="bar-content">
    <div class="content_center">
        <ul id="list-content">
            <ul class="blog-content-list">
            <?php
            $blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
//            if (!empty($blogs) && count($blogs) > 0)
//            {
                $userModel = Moocore::getInstance()->getModel('User');
                $campanionModel = Moocore::getInstance()->getModel('Companion');
                $animalModel =  Moocore::getInstance()->getModel('Animal');
                $strokeModel = Moocore::getInstance()->getModel('Stroke');
                $blogModel = Moocore::getInstance()->getModel('Blog_Blog');
                $blogs = $blogModel->find('all', array('conditions' => array('Blog.user_id' => $blogId)));
                $i = 1;
                foreach ($blogs as $blog):
            ?>
                    <li class="full_content p_m_10">
                        <div>
            <?php
                $userid = $blog['Blog']['user_id'];
                $cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $userid ) ) );
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
                $c_time = $this->Moo->getTime( $blog['Blog']['created'], Configure::read('core.date_format'), $utz );
                $c_time = str_replace("hours","시간",$c_time);
                $c_time = str_replace("minutes","분",$c_time);
                $c_time = str_replace("ago","전",$c_time);
                $c_time = str_replace("hour","시간",$c_time);
                $c_time = str_replace("minute","분",$c_time);
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
                            <a href="<?php echo $this->request->base?>/blogs/view/<?php echo $blog['Blog']['id']?>/<?php echo seoUrl($blog['Blog']['title'])?>">
                                <img width="300" style="width: 300px!important;height: 300px!important;" src="<?php echo $blogHelper->getImage($blog, array('prefix' => '150_square'))?>" class="img_wrapper2 user_list thumb_mobile">
                            </a>
                            </div>
                        <div>
                        <div>
                            <table style="width:100%;height:20px;">
                                <tr style="height:100%;">
                                    <td style="width:15%">
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
                                    </td>
                                    <td style="width:15%">
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
                                    </td>
                                    <td style="width:15%">
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
                                    </td>
                                    <td style="width:15%">
                                        <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?php echo $this->Html->url( '/', true ); ?>users/getSudamList/<?php echo $blog['Blog']['user_id']/<?php echo $blog['Blog']['id'] ?>">쓰담한 사람</a>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table style="width:100%;height:20px;">
                                <tr style="height:100%">
                                    <td style="width:10%;">
                                        <img src="<?php echo $this->webroot; ?>img/hand.png" width="50px;" />
                                    </td>
                                    <td style="width:10%">
                                        <?php echo $blog['Blog']['stroke_count']; ?>
                                    </td>
                                    <td style="width:10%">
                                        <img src="<?php echo $this->webroot; ?>img/chatting.png" width="50px;" />
                                    </td>
                                    <td style="width:10%">
                                        <?php echo $blog['Blog']['stroke_count']; ?>
                                    </td>
                                    <td>
                                        <div>
                                            <?php if( !empty($uid) && (($blog['Blog']['user_id'] == $uid ) || ( !empty($cuser) && $cuser['Role']['is_admin'] ) ) ): ?>
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
                                            echo $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''),
                                            $blog['Blog']['body'])), 200, array('eclipse' => '')), Configure::read('Blog.blog_hashtag_enabled'));
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $this->request->base ?>/blogs/view/<?php echo  $blog['Blog']['id'] ?>/<?php echo seoUrl($blog['Blog']['title'])?>">
                                        더보기
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table style="width:100%;height:20px;">
                            <?php
                                $stroke_all = $strokeModel->find( 'all', array( 'conditions' => array( 'Stroke.target_id' => $blog['Blog']['user_id'], 'Stroke.blog_id' => $blog['Blog']['id'] ) ) );
                                foreach($stroke_all as $stroke):
                                {
                                    $stroke_userid = $stroke['Stroke']['user_id'];
                                    $s_cuser = $userModel->find( 'first', array( 'conditions' => array( 'User.id' => $stroke_userid ) ) );
                                    $s_ani_id = $s_cuser['User']['ani_id'];
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
                                <td style="width:15%">
                                    <img src="<?php echo $this->webroot; ?>img/circle.png" width="50px;" />
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
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $s_time; ?>
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
                        <?php // $this->Html->rating($blog['Blog']['id'],'blogs', 'Blog'); ?>
                    </div>
                </div>
                </li>
            <?php
                $i++;
                endforeach;
//            }
//            else
//                echo '<div class="clear" align="center">' . __( 'No more results found') . '</div>';
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
        </ul>
    </div>
</div>

