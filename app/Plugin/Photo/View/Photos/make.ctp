<script>
function check(photo_id, thumbnail)
{
    if(document.getElementById("photoCheck_" + photo_id).style.display == "")
    {
        document.getElementById("photoCheck_" + photo_id).style.display = "none";
        var content = document.getElementById("tphoto_" + photo_id);
        content.remove();
    }
    else
    {
        document.getElementById("photoCheck_" + photo_id).style.display = "";
        var content = "<img src='" + thumbnail + "' id='tphoto_" + photo_id + "' class='thumbnails' />";
        $("#thumbnails").append(content);
    }
}

function uncheckAll(count)
{
    for(i = 0; i < count; i ++)
    {
        try
        {
            document.getElementById("photoCheck_" + i).style.display = "none";
        }
        catch(err)
        {
        }
        try
        {
            var content = document.getElementById("tphoto_" + i);
            content.remove();
        }
        catch(err)
        {
        }
    }
}

function complete(count)
{
    var thumb_photos = new Array();
    var thumb_contents = $("#thumbnails").children(".thumbnails");
    for(i = 0; i < thumb_contents.length; i ++)
    {
        try
        {
            var t_id = thumb_contents[i].attributes['id'].value;
            var id = t_id.substr(t_id.indexOf("tphoto_") + "tphoto_".length);
            thumb_photos.push(id);
        }
        catch(err)
        {
        }
    }

    $.ajax({
        url: '<?php echo $this->Html->url( '/', true ); ?>photos/album/make/' + thumb_photos,
        type: "post",
        async: false,
        success: function (data) {

        },
        error: function (data) {
        }
    });
}

</script>

<?php
    $blogModel = Moocore::getInstance()->getModel('Blog.Blog');
//    $current_date = date("Y-m");
    $uid = $this->Auth->user('id');
    $blogs = $blogModel->find( 'all', array('conditions' => array('Blog.user_id' => $uid ) ) );
?>
<div id="navigator" style="padding-top:10px;>
    <table width="100%;">
        <tr>
            <td width="100%;">
                <div id="thumbnails" style="padding-left: 10px;padding-top: 10px;width:100%;">
                </div>
            </td>
        </tr>
    </table>
</div>

<div id="sampleImage" style="padding-top:20px;>
    <table width="100%;">
        <tr>
            <td width="100%;">
                <center>
                <div class="thumbnails" style="padding-top: 10px;">
                    <img style="width:200px;" src="<?php echo $this->Html->url( '/', true ); ?>img/blank.png" class="page-1">
                    <img style="width:200px;" src="<?php echo $this->Html->url( '/', true ); ?>img/blank.png" class="page-2">
                </div>
                </center>
            </td>
        </tr>
    </table>
</div>

<div id="photos" style="padding-top:10px;height:300px;overflow:hidden;">
    <table width="100%;">
<?php
    for($i = 0; $i < ceil(count($blogs) / 3.0); $i ++):
    {
?>
        <tr>
<?php
        for($j = 0; $j < 3; $j ++):
        {
            if($i * 3 + $j == count($blogs))
                break;
            $blog_imagePath = $this->Html->url( '/', true ) . "uploads/blogs/thumbnail/" . $blogs[$i * 3 + $j]['Blog']['id'] . "/" . $blogs[$i * 3 + $j]['Blog']['thumbnail'];
            $blog_thumbnailPath = $this->Html->url( '/', true ) . "uploads/blogs/thumbnail/" . $blogs[$i * 3 + $j]['Blog']['id'] . "/" . "75_square_" . $blogs[$i * 3 + $j]['Blog']['thumbnail'];
?>
            <td style="width:33.3%;padding-top:10px;" onclick="check('<?php echo $blogs[$i * 3 + $j]['Blog']['id']; ?>', '<?php echo $blog_thumbnailPath; ?>')">
                <div class="thumbnails" style="padding-left: 10px;">
                    <img id="photo_<?php echo $blogs[$i * 3 + $j]['Blog']['id'];?>" src="<?php echo $blog_imagePath; ?>" style=" width:150px;height:150px;z-index: 1;position: absolute;top:<?php echo 400 + 150 *$i ;?>px">
                    <img id="photoCheck_<?php echo $blogs[$i * 3 + $j]['Blog']['id'];?>" src="<?php echo $this->Html->url( '/', true ); ?>img/check.png" style="display:none; width:150px;z-index: 2;position: absolute;top:<?php echo 400 + 150 *$i ;?>px">
                </div>
            </td>
<?php
        }
        endfor;
?>
        </tr>
<?php
    }
    endfor;
?>
    </table>
</div>

<div>
    <center>
    <input type="button" onclick="uncheckAll('<?php echo count($blogs); ?>')" value="전체해제" />
    <input type="button" onclick="complete('<?php echo count($blogs); ?>')" value="완료" />
    </center>
</div>

