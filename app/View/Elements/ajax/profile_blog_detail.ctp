
<table width="100%">
    <?php
        for($i = 0; $i < count($blogs) / 3; $i ++):
        {
    ?>
    <tr>
    <?php
            for($j = 0; $j < 3; $j ++):
            {
                $imagepath = $blogs[$i * 3 + $j]['Blog']['thumbnail'];
                if($imagepath != ""):
                {
    ?>
        <td style="border-style:groove;width:33%;">
            <a href="<?php echo $this->request->base ?>/blogs/view/<?php echo $blogs[$i * 3 + $j]['Blog']['id']; ?>/<?php echo seoUrl($blogs[$i * 3 + $j]['Blog']['title']); ?>">
                <img src="<?php echo $this->webroot; ?>uploads/blogs/thumbnail/<?php echo $blogs[$i * 3 + $j]['Blog']['id'] . '/' . $imagepath; ?>" style="width:100px;height:100px;" />
            </a>
        </td>
    <?php
                }
                endif;
            }
            endfor;
    ?>
    </tr>
    <?php
        }
        endfor;
    ?>
</table>
