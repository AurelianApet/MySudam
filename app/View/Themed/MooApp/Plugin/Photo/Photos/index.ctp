
<?php $this->setNotEmpty('west');?>

 <div class="bar-content">
     <div class="content_center">
         <div class="mo_breadcrumb">
            <?php if (!empty($uid)): ?>
                <a href = "<?php echo $this->Html->url('/', true); ?>photo/albums/create" class="button button-action topButton button-mobi-top">Create New Album</a>
            <?php endif; ?>
         </div>
         <div>
            새로운 앨범을 추가하세요.
            해당월에 이미 앨범을 제작한 경우
            추가하실 수 없습니다
         </div>

	<ul class="albums photo-albums" id="album-list-content">
            <?php 
            if ( !empty( $this->request->named['category_id'] ) || !empty($cat_id) ){
                if (empty($cat_id)){
                    $cat_id = $this->request->named['category_id'];
                }
                
                echo $this->element( 'lists/albums_list', array( 'album_more_url' => '/albums/browse/category/' . $cat_id . '/page:2' ) );
            }
            else {
                echo $this->element( 'lists/albums_list', array( 'album_more_url' => '/albums/browse/all/page:2' ) );
            }
            ?>	
	</ul>
        <div class="clear"></div>
     </div>
 </div>