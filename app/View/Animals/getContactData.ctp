<?php
    $ani = explode(",", $content);
    echo "<tbody><tr><td><table style='width: 100%;'><tbody>";
    for($i = 0; $i < count($ani) - 1; $i ++)
    {
        echo "<tr><td style='width:20%'>동그라미</td>"
          . "<td style='width:50%'>"
          . $ani[$i]
          . "</td><td>이미지</td></tr>";
    }
    echo "</tbody></table></td></tr></tbody>";
?>
