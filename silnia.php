<?php
    $silnia = 1;

    echo"<table border=1 bgcolor=#999999;><tr><td>Liczba</td><td>Kwadrat</td><td>Szescian</td><td>Silnia</td></tr>";
    for($i=1; $i<=20; $i++){
        echo"<tr>";
        $kwadrat = $i*$i;
        $szescian = $i * $i * $i;
        $silnia = $silnia * $i;

        echo"<td>$i</td>";
        echo"<td>$kwadrat</td>";
        echo"<td>$szescian</td>";
        echo"<td>$silnia</td>";
    };

?>