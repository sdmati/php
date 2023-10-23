<?php
    $x=10;
    $y=10;
    echo"<table border=1> <tr><td>x</td>";

    for($i=1; $i<=$y; $i++){
        echo"<td bgcolor=red;>$i</td>";
    }

    for($i=1; $i<=$x; $i++){
        echo"<tr></td><td bgcolor=green;>$i</td>";
        for($j=1; $j<=$y; $j++){
            $w=$j*$i;
            echo"<td>$w</td>";
        };        
        echo"</tr>";
    };
    echo"</table>";
?>

