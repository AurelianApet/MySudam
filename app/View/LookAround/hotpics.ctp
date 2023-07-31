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
        <ul id="list-content">
            <li>
                <div style="text-align:center;">
                    <?php foreach ($hotpics as $hotpic): ?>
                        <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$hotpic["Blog"]["id"];?>">
                            <img src="<?php echo $blogHelper->getImage($hotpic);?>" style="width:30%; padding:5px;"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
