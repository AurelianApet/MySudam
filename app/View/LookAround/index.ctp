<?php
echo $this->Html->css(array('jquery.mp'), null, array('inline' => false));
echo $this->Html->script(array('jquery.mp.min'), array('inline' => false));
?>

<?php
$tags_value = '';
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
if (!empty($tags)) $tags_value = implode(', ', $tags);
?>

<div class="bar-content">
    <div class="content_center">
        <div class="filter_block">
            <div id="filters" style="margin-top:5px;">
                <?php echo $this->Form->text( 'keyword', array( 'placeholder' => __('친구찾기'), 'class' => 'json-view') );?>
            </div>
        </div>
        <ul id="list-content">
            <li>
                <div style="padding-top:20px;">
                    <span style="font-size: 24px;"><?php echo __('추천친구') ?></span>
                </div>
            </li>
            <li>
                <div style="overflow:scroll; padding-top:5px;">
                    <table>
                        <tr>
                            <?php foreach ($friends as $frind): ?>
                                <td width="100" style="padding:10px;">
                                    <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'users/view/'.$frind["result"]["id"];?>">
                                        <img src="<?php echo FULL_BASE_URL.$this->request->webroot.'uploads/users/avatar/'.$frind["result"]["id"].'/'.$frind["result"]["avatar"];?>" style="width:70px; height:70px; border-radius:35px;" />
                                    </a>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:20px;">
                    <table style="width:100%">
                        <tr>
                            <td align="left">
                                <span style="font-size: 24px;"><?php echo __('Hot pics') ?></span>
                            </td>
                            <td align="right">
                                <?php if (!empty($hotpics) && (count($hotpics) == $show_count)): ?>
                                    <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'LookAround/hotpics';?>"><span style="padding: 10px;"><?php echo __('더보기>') ?></span></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:10px;">
                    <?php if (!empty($hotpics)): ?>
                        <?php foreach ($hotpics as $hotpic): ?>
                            <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$hotpic["Blog"]["id"];?>">
                                <img src="<?php echo $blogHelper->getImage($hotpic);?>" style="width:30%; padding:5px;"/>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span style="font-size: 14px;"><?php echo __('게시물이 존재하지 않습니다.') ?></span>
                    <?php endif; ?>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:20px;">
                    <table style="width:100%;">
                        <tr>
                            <td align="left">
                            <span style="font-size: 24px;"><?php echo __('뜨거운 강아지') ?></span>
                            </td>
                            <td align="right">
                                <?php if (!empty($hotdogs) && (count($hotdogs) == $show_count)): ?>
                                    <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'LookAround/hotdogs';?>"><span style="padding: 10px;"><?php echo __('더보기>') ?></span></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:10px;">
                    <?php if (!empty($hotdogs)): ?>
                        <?php foreach ($hotdogs as $hotdog): ?>
                            <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$hotdog["Blog"]["id"];?>">
                                <img src="<?php echo $blogHelper->getImage($hotdog);?>" style="width:30%; padding:5px;"/>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span style="font-size: 14px;"><?php echo __('게시물이 존재하지 않습니다.') ?></span>
                    <?php endif; ?>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:20px;">
                    <table style="width:100%;">
                        <tr>
                            <td align="left">
                                <span style="font-size: 24px;"><?php echo __('차가운 고양이') ?></span>
                            </td>
                            <td align="right">
                                <?php if (!empty($coldcats) && (count($coldcats) == $show_count)): ?>
                                    <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'LookAround/coldcats';?>"><span style="padding: 10px;"><?php echo __('더보기>') ?></span></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:10px;">
                    <?php if (!empty($coldcats)): ?>
                        <?php foreach ($coldcats as $coldcat): ?>
                            <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$coldcat["Blog"]["id"];?>">
                                <img src="<?php echo $blogHelper->getImage($coldcat);?>" style="width:30%; padding:5px;"/>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span style="font-size: 14px;"><?php echo __('게시물이 존재하지 않습니다.') ?></span>
                    <?php endif; ?>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:20px;">
                    <table style="width:100%;">
                        <tr>
                            <td align="left">
                                <span style="font-size: 24px;"><?php echo __('Oh my pets') ?></span>
                            </td>
                            <td align="right">
                                <?php if (!empty($otherpets) && (count($otherpets) == $show_count)): ?>
                                    <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'LookAround/coldcats';?>"><span style="padding: 10px;"><?php echo __('더보기>') ?></span></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div style="text-align:center; padding-top:10px;">
                    <?php if (!empty($otherpets)): ?>
                        <?php foreach ($otherpets as $otherpet): ?>
                            <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$otherpet["Blog"]["id"];?>">
                                <img src="<?php echo $blogHelper->getImage($otherpet);?>" style="width:30%; padding:5px;"/>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span style="font-size: 14px;"><?php echo __('게시물이 존재하지 않습니다.') ?></span>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
