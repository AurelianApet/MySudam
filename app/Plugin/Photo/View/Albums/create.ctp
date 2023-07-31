<?php
    $uid = $this->Auth->user('id');
    $albumModel = Moocore::getInstance()->getModel('Photo.Album');
    $current_date = date("Y-m");
    $albums = $albumModel->find( 'all', array('conditions' => array('Album.user_id' => $uid, 'Album.created LIKE' => "$current_date%" ) ) );
    if(count($albums) != 0):
    {
        echo "이번 달에 이미 포토북을 작성했습니다.";
    }
    else:
    {
?>
    <div id="sampleIamge" height="30%;">
        <table width="100%;">
            <tr>
                <td width="100%;">
                    <div class="thumbnails" style="padding-left: 190px;padding-top: 50px;">
                        <img src="<?php echo $this->Html->url( '/', true ); ?>img/blank.png" width="100" height="100" class="page-1">
                        <img src="<?php echo $this->Html->url( '/', true ); ?>img/blank.png" width="100" height="100" class="page-2">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="padding-top:10px;">
        <hr width="100%;" style="border-top: 1px solid black;">
    </div>
    <div height="20%;">
        <div>
            <center>
            사이즈 5.5*5.5(14cm*14cm)
            </center>
        </div>
        <div style="padding-top:10px;">
            <center>
            페이지수 22P
            </center>
        </div>
        <div style="padding-top:10px;">
            <center>
            사진 수 20Pics
            </center>
        </div>
    </div>
    <div>
        <hr width="100%;" style="border-top: 1px solid black;">
    </div>

    <div height="30%;" style="padding-top:50px;">
        <center>
        포토북은 나의 페이지에 등록된 사진만 선택이 가능합니다.
        </center>
    </div>
    <div height="20%;" style="padding-top:50px;">
        <center>
    <?php
          $this->MooPopup->tag(array(
                 'href'=>$this->Html->url(array("controller" => "albums",
                                                "action" => "startCreateAlbum",
                                                "plugin" => 'photo',
                                            )),
                 'title' => __( '앨범 제작 시작'),
                 'innerHtml'=> __( '앨범 제작 시작'),
              'data-backdrop' => 'static',
              'class' => 'button button-action topButton button-mobi-top'
         ));
     ?>
        </center>
    </div>
<?php
    }
    endif;
?>