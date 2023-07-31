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
                    <?php foreach ($coldcats as $coldcat): ?>
                        <a href="<?php echo FULL_BASE_URL.$this->request->webroot.'blogs/view/'.$coldcat["Blog"]["id"];?>">
                            <img src="<?php echo $blogHelper->getImage($coldcat);?>" style="width:30%; padding:5px;"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
