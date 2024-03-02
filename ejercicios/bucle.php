<?php
    #for ($i = 1; $i <= 10; $i++) {
    #    echo $i * 7;
    #    echo "<br>";
    #}
    #$i = 1;
    #while ($i <= 10) {
    #    echo $i * 8;
    #    echo "<br>";
    #    $i++;
    #}
    #echo "<br>";
    #$i = 10;
    #while ($i > 0) {
    #    echo $i * 9;
    #    echo "<br>";
    #    $i--;
    #}
    
    $i = 1;
    $cont= 0;
    while ( $i < 100) {
        $resto = $i % 2;
        if ($resto==0) {
            echo $i;
            echo "<br>";
            $cont++;
            if ( $cont == 10 ) {
                break;
            }
        }
        $i++;
    }

    echo "<br>";

    $pares = 0;
    $numero = rand();
    while ( $pares <= 10 ) {
        $resto = $numero % 2;
        if ($resto==0) {
            echo $numero;
            echo "<br>";
            $pares++;
        }
        $numero++;
    }

    # Algoritmo que muestre los cinco primeros números primos a partir del 120

?>