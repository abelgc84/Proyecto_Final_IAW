<?php

# Función que devuelve el mayor de entre tres números.

function mayor ($num1, $num2, $num3) {
    $mayor=$num1;
    if ($mayor<$num2){
        $mayor=$num2;
    }
    if ($mayor<$num3){
        $mayor<$num3;
    }
}

# Escribe una función que reciba un número como parámetro de entrada y que
# imprima su tabla de multiplicar.

function tabla_multiplicar ($num) { 
    echo "Tabla de multiplicar para " . $num . "<br>";
    for ($i=1; $i<=10; $i++) {
        $resultado=$num*$i;
        echo $num . " por " . $i . " = " . $resultado . "<br>";
    }
}

# Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima
# las tablas de multiplicar entre esos dos números. Utilice la función del ejercicio anterior.

function tabla_multiplicar_v2 ($num_ini, $num_fin) {
    for ($i=$num_ini; $i<=$num_fin; $i++) {
        tabla_multiplicar($i);
    }
}

# Escribe una función llamada inicializar_array que reciba tres parémetros llamados numero_de_elementos, 
# min y max , y que devuelva un array de números enteros comprendidos entre los valores min y max. 
# El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos

function inizializar_array($num_ele, $num_min, $num_max) {
    $arreglo1=array();
    for ($i=0; $i<$num_ele; $i++) {
        $arreglo1[$i]=rand($num_min, $num_max);
    }
    return $arreglo1;
}

# Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que 
# devuelva la media de todos los valores que contiene.

function calcular_media ($array) {
    $elementos=count($array);
    $suma=0;
    for ($i=0; $i<$elementos; $i++) {
        echo "La posición " . $i . " del array tiene el valor <b>" . $array[$i] . "</b><br>";
        $suma=$suma+$array[$i];
    }
    $promedio=$suma/$elementos;
    return $promedio;
}

# Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y 
# que devuelva cuál es el máximo valor del array.

function calcular_maximo ($array) {
    $elementos=count($array);
    $max=$array[0];
    for ($i=0; $i<$elementos; $i++) {
        if ( $array[$i] > $max ) {
            $max = $array[$i];
        }
    }
    return $max;
}

# Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que 
# devuelva cuál es el mínimo valor del array.

function calcular_minimo ($array) {
    $elementos=count($array);
    $min=$array[0];
    for ($i=0; $i<$elementos; $i++) {
        if ( $array[$i] < $min ) {
            $min = $array[$i];
        }
        return $min;
    }
}

# Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre su 
# contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la segunda 
# el valor que hay en esa posición.

function imprimir_array($array) {
    $elementos=count($array);
    $html = "<table border=1>";
    $html = $html . "<tr><td>Posición</td><td>Valor</td></tr>";
    for ($i=0; $i<$elementos; $i++) {
        $html = $html . "<tr><td>" . $i . "</td><td>" . $array[$i] . "</td></tr>";
    }
    $html = $html . "</table>";
    return $html;
}

?>