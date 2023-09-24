<?php

    $a=2;
    $b=5;
    $c=3;
    $d=0;
    $e=1;
    $f=2;
    $g=0;
    $h=4;
    $i=6;
    $j=5;

    $k=1;
    $l=3;
    $m=7;
    $n=9;

    $liczenie1= $a * $k + $b * $l + $c * $m + $d * $n + $e * $k + $f * $l + $g * $m + $h * $n + $i * $k + $j * $l; 
    $mod = $liczenie1 % 10;
    $lkon = 10 - $mod;
    
    $dzien = $e.$f; /*lacze dwie zmienne, aby uzyskac dzien miesiaca*/
    $miesiac = $c.$d; /*lacze dwie zmienne, aby uzyskac miesiac*/
    $numer_miesiaca = $miesiac - 20; /*odejmuje 20 od miesiaca, aby uzyskac dokladny numer miesiaca*/

    if($lkon>=10)
    {
        $ostcyf = $lkon%10;
    }
    else{
        $ostcyf = $lkon;
    };

    echo"Ostatnia cyfra PESELu $a $b $c $d $e $f $g $h $i $j wynosi $ostcyf. Pesel jest poprawny.";
    
    if ($j%2==1)
    {
        echo"<br>Wlascicielem peselu jest mezczyzna";
    }
    else{
        echo"<br>Wlascicielem peselu jest kobieta<br>";
    };


    if($a==0){
        echo"<br>Wlasciciel peselu urodzil sie $dzien.$numer_miesiaca.200$b";
    };
    if($a>0){
        echo"<br>Wlasciciel peselu urodzil sie w $dzien.$numer_miesiaca.19$a$b roku";
    };

?>