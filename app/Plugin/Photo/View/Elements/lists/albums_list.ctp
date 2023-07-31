<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooPhoto"], function($,mooPhoto) {
        mooPhoto.initOnListing();
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery','mooPhoto'), 'object' => array('$', 'mooPhoto'))); ?>
mooPhoto.initOnListing();
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>


<?php if (Configure::read('Photo.photo_enabled') == 1): ?>
<?php
$photoHelper = MooCore::getInstance()->getHelper('Photo_Photo');
$friendModel = MooCore::getInstance()->getModel('Friend');
$photoModel = MooCore::getInstance()->getModel('Photo_Photo');
$blogModel = MooCore::getInstance()->getModel('Blog_Blog');
?>
<ul class="albums photo-albums">
<?php
if (!empty($albums) && count($albums) > 0) {
    foreach ($albums as $album):
        $album_date = explode(' ', $album['Album']['created']);
        $album_month = explode('-', $album_date[0]);
        $album_month = $album_month[0] . '/' . $album_month[1];
        $album_id = $album['Album']['id'];
        $blog = $blogModel->find('first', array('conditions'=>array('Blog.album_id'=>$album_id, 'Blog.album_number'=>1)));
        $blog_thumbnail = $blog['Blog']['thumbnail'];
        $imagepath = "uploads/blogs/thumbnail/" . $blog['Blog']['id'] . '/75_square_' . $blog_thumbnail;
?>
        <li class="album-list-index full_content" style="width:100%;">
            <table width="100%;">
                <tr>
                    <td width="50%;">
                        <div class="p_2">
                            <a href="<?php echo  $this->request->base ?>/albums/view/<?php echo  $album['Album']['id'] ?>/<?php echo  seoUrl($album['Album']['moo_title']) ?>" class="album_cover layer_square">
                                <img src='<?php echo $imagepath; ?>'>
                            </a>
                        </div>
                        <?php $this->Html->rating($album['Album']['id'], 'albums', 'Photo'); ?>
                    </td>
                    <td>
                        <table style="width:100%;">
                            <tr>
                                <td>
                                    <center>
                                     <?php echo $album_month; ?>
                                     </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                       <a href = "<?php echo $this->Html->url('/', true); ?>photo/albums/order/<?php echo $album['Album']['id']; ?>" class="button button-action topButton button-mobi-top">Order Album</a>
                                       <a href = "<?php echo $this->Html->url('/', true); ?>photo/albums/view/<?php echo $album['Album']['id']; ?>" class="button button-action topButton button-mobi-top">View Album</a>
                                       <a href = "<?php echo $this->Html->url('/', true); ?>photo/albums/edit/<?php echo $album['Album']['id']; ?>" class="button button-action topButton button-mobi-top">Edit Album</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </li>
        <?php
    endforeach;
} else
    echo '<div class="clear text-center">' . __( 'No more results found') . '</div>';
?>

<?php if (!empty($album_more_result)): ?>
    <?php $this->Html->viewMore($album_more_url,'album-list-content') ?>
<?php endif; ?>

<?php endif; ?>
</ul>