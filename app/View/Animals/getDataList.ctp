<?php
    $ani = explode(",", $content);
    for($i = 0; $i < count($ani) - 1; $i ++)
    {
        echo "<option>"
          . $ani[$i]
          . "</option>";
    }
    echo "";
?>
