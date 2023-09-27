<?php

    // $a=4;
    // $p=sqrt($a);
    // echo"Pierwiastek z $a wynosi $p";

    $a=2;
    $b=6;
    $c=2;

    $Delta=$b*$b-4*$a*$c;
    $pierwiastek=sqrt($Delta);

    // echo"$Delta i $pierwiastek";

    if($Delta>0){
    $x1=(-$b-$pierwiastek)/(2*$a);
    $x2=(-$b+$pierwiastek)/(2*$a);

    echo"Rozwiazaniem rownania $a x^2 jest x1=$x1 i x2=$x2";
    };

    if($Delta==0){
    $x0=(-$b)/(2*$a);
    echo"<br>Rozwiazaniem tego rownania jest $x0";
    };

    if($Delta<0){
        echo"<br>Nie ma rozwiazania tego rownania";
    };
    
    // echo"</br>$x1 i $x2 i $x0";
    

?>