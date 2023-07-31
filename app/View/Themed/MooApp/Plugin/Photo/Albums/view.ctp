
<script src="<?php echo $this->Html->url( '/', true ); ?>js/jquery.js"></script>
<script src="<?php echo $this->Html->url( '/', true ); ?>js/turn.js"></script>
<script src="<?php echo $this->Html->url( '/', true ); ?>js/jquery.fullscreen.js"></script>
<script src="<?php echo $this->Html->url( '/', true ); ?>js/jquery.address-1.6.min.js"></script>
<script src="<?php echo $this->Html->url( '/', true ); ?>js/wait.js"></script>
<script src="<?php echo $this->Html->url( '/', true ); ?>js/onload.js"></script>
<link type="text/css" href="<?php echo $this->Html->url( '/', true ); ?>css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">

<script>
    var paths = null;
</script>
<?php
    $blogModel = Moocore::getInstance()->getModel('Blog_Blog');
    $blogs = $blogModel->find( 'all', array('conditions' => array('Blog.album_id' => $album_id), 'order' => array('Blog.album_number ASC') ));
    $paths = array();
    for($i = 0; $i < count($blogs); $i ++)
    {
        $photo_path = "75_square_" . $blogs[$i]['Blog']['thumbnail'];
        $photo_created = $blogs[$i]['Blog']['created'];
        $photo_id = $blogs[$i]['Blog']['id'];
        $path = $photo_id . "/" . $photo_path;
        array_push($paths, $path);
    }
?>
<script>
    paths = new Array();
<?php
    for($i = 0; $i < count($paths); $i ++):
    {
?>
        paths[<?php echo $i; ?>] = '<?php echo $paths[$i]; ?>';
<?php
    }
    endfor;
?>
</script>

<div style="width:100%;margin:0 auto">
    <div id="fb5-ajax">
          <div data-current="book5" class="fb5" id="fb5">
                <div id="fb5-container-book">
                    <div id="fb5-book">
<?php
                    for($i = 1; $i <= count($paths); $i ++):
                    {
?>
                    <div data-background-image="" class="">
                         <div class="fb5-cont-page-book">
                            <div class="fb5-page-book">
                                <div id="fb5-cover">
                                    <img data-src="<?php echo $this->Html->url( '/', true ); ?>uploads/blogs/thumbnail/<?php echo $paths[$i - 1];?>" style="width:100%;height:100%;" id="fb5-logo-cover">
                                </div>
                            </div>
                         </div>
                    </div>
<?php
                    }
                    endfor;
?>
                </div>
                <a class="fb5-nav-arrow prev"></a>
                <a class="fb5-nav-arrow next"></a>
          </div>
          <div id="fb5-all-pages" class="fb5-overlay">
            <section class="fb5-container-pages">
                <div id="fb5-menu-holder">
                    <ul id="fb5-slider">
<?php
                    for($i = 1; $i <= count($paths); $i ++):
                    {
?>
                        <li class="<?php echo $i;?>">
                            <img alt="" data-src="<?php echo $this->Html->url( '/', true ); ?>uploads/blogs/thumbnail/<?php echo $paths[$i - 1];?>">
                        </li>
<?php
                    }
                    endfor;
?>
                    </ul>
                </div>
            </section>
         </div>
   </div>
    <script>
        jQuery('#fb5').data('config',
        {
            "page_width":"1920",
            "page_height":"1080"
        })
    </script>
    </div>
</div>


