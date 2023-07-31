<?php $this->setCurrentStyle(4) ?>
<?php
$tags_value = '';
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
if (!empty($tags))
    $tags_value = implode(', ', $tags);
?>

<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires' => array('jquery', 'mooBlog'), 'object' => array('$', 'mooBlog'))); ?>
mooBlog.initOnCreate();
<?php $this->Html->scriptEnd(); ?>

<div class="create_form">
    <div class="bar-content">
        <div class="content_center">
            <div class="box3">
                <form id='createForm' action="<?php echo $this->request->base; ?>/blogs/save" method="post">
                    <?php
                        echo $this->Form->hidden('id', array('value' => $blog['Blog']['id']));
                        echo $this->Form->hidden('thumbnail', array('value' => $blog['Blog']['thumbnail']));
                        echo $this->Form->hidden('blog_photo_ids');

                        //khs add
                        echo $this->Form->hidden('img_url', array('value' => FULL_BASE_URL.$this->request->webroot));
                        echo $this->Form->hidden('hd_step', array('value' => '0'));
                        
                        if(!empty($blog['Blog']['like_id'])){
                            echo $this->Form->hidden('like_id', array('value' => $blog['Blog']['like_id']));
                        }else{
                            echo $this->Form->hidden('like_id', array('value' => '0'));
                        }
                        
                        if(!empty($blog['Blog']['dislike_id'])){
                            echo $this->Form->hidden('dislike_id', array('value' => $blog['Blog']['dislike_id']));
                        }else{
                            echo $this->Form->hidden('dislike_id', array('value' => '0'));
                        }                   
                    ?>

                    <!--added by khs--> 
                    <div id="divThumbnail" style="position: fixed; left: 0; right: 0; bottom: 0; opacity: 0.5; background: black; height: 100%; box-shadow: 0 1px 4px rgba(0,0,0,0.5); z-index: 21;">
                        <div style="position: fixed; bottom: 50px; z-index: 22; left: 50%; margin-left: -120px;">
                            <div class="btn-group" style="width: 80px; text-align: center;">
                                <div class="thumb_content">
                                    <div id="camera_thumnail"></div>
                                </div>    
                            </div>
                            <div class="btn-group" style="width:80px; text-align: center;">
                                <div class="thumb_content">
                                    <div id="gallery_thumnail"></div>
                                </div>
                            </div>
                            <div class="btn-group" style="width:80px; text-align: center;">
                                <div class="thumb_content">
                                    <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/btn_upload_3.png';?>"/>
                                </div>
                            </div>
                        </div>
                        <div id="divLoading"  style="position: fixed; width:100%; text-align:center; bottom: 50%; z-index: 22; display:none;">
                            <img width="50" height="50" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/spinner.svg';?>"/>
                        </div>
                    </div>
                    <!--added by khs--> 

                    <div class="mo_breadcrumb" style="display:none;">
                        <?php print_r($blog); ?>
                        <h1><?php if (empty($blog['Blog']['id'])) echo __('Write New Entry');
                    else echo __('Edit Entry'); ?></h1>
                    </div>

                    <div id="divStep1" class="full_content p_m_10">
                        <div class="form_content">
                            <ul>
                                <li>
                                    <div id="blog_grid" style="position:absolute; z-index:1;">
                                        <img width="100%" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/grid.png';?>"/>
                                    </div>
                                    <div id="blog_sd_area" style="position:absolute; z-index:2;">
                                        <script>
                                            function setSDVal(id)
                                            {
                                                if($("#like_id").val() == 0 && $("#dislike_id").val() == 0){
                                                    $("#like_id").val(id);
                                                    $("#ch_1").attr("src", $("#img_url").val()+"img/blogs/ch_r.png");
                                                    $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/like_area.png");
                                                }else{
                                                    if($("#like_id").val() == 0 && $("#dislike_id").val() != 0){
                                                        if($("#dislike_id").val() == id){
                                                            $("#dislike_id").val(0);
                                                            $("#ch_2").attr("src", $("#img_url").val()+"img/blogs/ch.png");
                                                            $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/transparent.png");
                                                        }else{
                                                            $("#like_id").val(id);
                                                            $("#ch_1").attr("src", $("#img_url").val()+"img/blogs/ch_r.png");
                                                            $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/like_area.png");
                                                        }
                                                    }
                                                    else{
                                                        if($("#like_id").val() == id){
                                                            $("#like_id").val(0);
                                                            $("#ch_1").attr("src", $("#img_url").val()+"img/blogs/ch.png");
                                                            $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/transparent.png");
                                                        }
                                                        else{
                                                            if($("#dislike_id").val() == 0){
                                                                $("#dislike_id").val(id);
                                                                $("#ch_2").attr("src", $("#img_url").val()+"img/blogs/ch_r.png");
                                                                $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/dislike_area.png");
                                                            } 
                                                            else{
                                                                if($("#dislike_id").val() == id){
                                                                    $("#dislike_id").val(0);
                                                                    $("#ch_2").attr("src", $("#img_url").val()+"img/blogs/ch.png");
                                                                    $("#sd_"+id).attr("src", $("#img_url").val()+"img/blogs/transparent.png");
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                            function onbtnNext(){
                                                $("#hd_step").val("2");

                                                if($("#like_id").val() == 0){
                                                    alert("<쓰담쓰담> 영역을 선택하세요.");
                                                    return;
                                                }
                                                if($("#dislike_id").val() == 0){
                                                    alert("<여긴 싫어요> 영역을 선택하세요.");
                                                    return;
                                                }
                                                if($("#title").val() == ""){
                                                    alert("타이틀을 입력해주세요.");
                                                    $("#title").focus();
                                                    return;
                                                }

                                                $("#divStep1").fadeOut("slow");
                                                $("#divStep2").fadeIn("slow");

                                                $("#btnNext").css("display", "none");
                                            }

                                            function onbtnPrev(){
                                                if($("#hd_step").val() == "2"){
                                                    $("#hd_step").val("1");

                                                    $("#divStep1").fadeIn("slow");
                                                    $("#divStep2").fadeOut("slow");

                                                    $("#btnNext").css("display", "block");
                                                }else if($("#hd_step").val() == "1"){
                                                    $("#hd_step").val("0");

                                                    $("#divThumbnail").fadeIn("slow");

                                                    $("#btnNext").css("display", "none");
                                                    $("#btnPrev").css("display", "none");
                                                }
                                            }
                                        </script>
                                        <table>
                                            <tr>
                                                <td><img id="sd_1" class="sd" onclick="setSDVal(1);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_2" class="sd" onclick="setSDVal(2);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_3" class="sd" onclick="setSDVal(3);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><img id="sd_4" class="sd" onclick="setSDVal(4);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_5" class="sd" onclick="setSDVal(5);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_6" class="sd" onclick="setSDVal(6);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><img id="sd_7" class="sd" onclick="setSDVal(7);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_8" class="sd" onclick="setSDVal(8);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                                <td><img id="sd_9" class="sd" onclick="setSDVal(9);" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>"/></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="blog_thumnail_preview">
                                        <?php if (!empty($blog['Blog']['thumbnail'])): ?>
                                            <img id="item-avatar" width="100%" src="<?php echo $blogHelper->getImage($blog); ?>" />
                                        <?php else: ?>
                                            <img id="item-avatar" width="100%" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/transparent.png';?>" />
                                        <?php endif; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-10">
                                        <?php echo $this->Form->text('title', array('value' => $blog['Blog']['title'], 'placeholder' => '타이틀')); ?>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <label style="font-size: 18px;"><?php echo __('위의 이미지의 9개의 영역 중에서'); ?></label>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <table>
                                            <tr>
                                                <td width="10%">
                                                    <span style="font-size: 30px;"><?php echo __('1 '); ?></span>
                                                </td>
                                                <td width="70%">
                                                    <span style="font-size: 20px;"><?php echo __('“쓰담쓰담” 영역을 지정해 주세요.'); ?></span>
                                                </td>
                                                <td width="20%" align="center">
                                                    <img id="ch_1" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/ch.png';?>" style="width:50%;"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10%">
                                                    <span style="font-size: 30px;"><?php echo __('2 '); ?></span>
                                                </td>
                                                <td width="70%">
                                                    <span style="font-size: 20px;"><?php echo __('“여긴 싫어요” 영역을 지정해 주세요.'); ?></span>
                                                </td>
                                                <td width="20%" align="center">
                                                    <img id="ch_2" src="<?php echo FULL_BASE_URL.$this->request->webroot.'img/blogs/ch.png';?>" style="width:50%;"/>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="divStep2" class="full_content p_m_10" style="display:none;">
                        <div class="form_content">
                            <ul >
                                <li>
                                    <div class="col-md-10">
                                    <?php echo $this->Form->tinyMCE('body', array('value' => $blog['Blog']['body'], 'id' => 'editor')); ?>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                    <label><?php echo __( '카테고리')?></label>
                                    </div>
                                    <div class="col-md-10">
                                    <?php echo $this->Form->select( 'category_id', $cats, array( 'value' => $blog['Blog']['category_id'] ) ); ?>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <label><?php echo __('태그') ?></label>
                                    </div>
                                    <div class="col-md-10">
                                        <?php echo $this->Form->text('tags', array('value' => $tags_value)); ?>
                                    </div>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <label><?php echo __('보기권한') ?></label>
                                    </div>
                                    <div class="col-md-10">
                                        <?php
                                        echo $this->Form->select('privacy', array(PRIVACY_EVERYONE => __('누구나 다'),
                                            PRIVACY_FRIENDS => __('오직 친구만'),
                                            PRIVACY_ME => __('오직 나만')), array('value' => $blog['Blog']['privacy'],
                                            'empty' => false
                                        ));
                                        ?>
                                    </div>
                                    <div class="clear"></div>
                                </li>

                            </ul>

                            <div class="col-md-2">&nbsp;</div> 

                            <div class="col-md-10">
                                <div id="images-uploader" style="margin:10px 0; display: none;">
                                    <div id="photos_upload"></div>
                                    <a href="#" class="button button-primary" id="triggerUpload"><?php echo __('Upload Queued Files') ?></a>
                                </div>
                                <?php if (empty($isMobile)): ?>
                                    <a id="toggleUploader" href="javascript:void(0)"><?php echo __('Toggle Images Uploader') ?></a>
                                <?php endif; ?>
                                <div style="margin:20px 0; text-align:right;">
                                    <button type='button' id='saveBtn' class='btn btn-action'><?php echo __('쓰담 등록'); ?></button>

                                    <?php if (!empty($blog['Blog']['id'])): ?>
                                        <a href="<?php echo $this->request->base ?>/blogs/view/<?php echo $blog['Blog']['id'] ?>" class="button"><?php echo __('Cancel') ?></a>
                                    <?php endif; ?>
                                    <?php if (($blog['Blog']['user_id'] == $uid ) || (!empty($blog['Blog']['id']) && $cuser['Role']['is_admin'] )): ?>
                                        <a href="javascript:void(0)" data-id="<?php echo $blog['Blog']['id'] ?>" class="button deleteBlog"><?php echo __('Delete') ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="error-message" id="errorMessage" style="display: none;"></div>
                            </div>
                            
                            <div class="clear"></div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>