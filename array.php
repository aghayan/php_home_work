<?php
    $number = [];
    $number_2 = [];
    
    for ($i = 0; $i <= 10; $i++) {
        $number[] = rand(1, $i);
    };

    function customSort( $a, $b ) {
        if ( $a > $b ) return 1; 
        elseif ( $a < $b ) return -1; 
        elseif ( $a == $b ) return 0;
        else return 0;
    }

    usort($number, 'customSort');

    echo "<pre> <h1>" ;
        print_r($number);
    echo "</pre> </h1>";

    echo "<hr>";


    for ($j = 0; $j <= 10; $j++) {
        $number_2[] = rand(1, $j);
    };

    function customRSort( $a, $b ) {
        if ( $a < $b ) return 1; 
        elseif ( $a > $b ) return -1; 
        elseif ( $a == $b ) return 0;
        else return 0;
    }

    usort($number_2, 'customRSort');

    echo "<pre> <h1>" ;
        print_r($number_2);
    echo "</pre> </h1>";
    
?>