<?php

include ("funciones.php");

/*
$arreglo1=array();

$arreglo1[0]="Abel Gijón";
$arreglo1[1]="Rubén Gijón";
$arreglo1[2]="Desirée Gijón";
$arreglo1[3]="Feli Cordero";
$arreglo1[4]="Marina Cordero";

print_r($arreglo1);

echo "<br>Este array contiene " . count($arreglo1) . " elementos";

echo "<br>El valor de la posición 3 del array es " . $arreglo1[2];

$num_elem=count($arreglo1);

echo "<table border=1>";
for ($i=0; $i<$num_elem; $i++) {
    echo "<tr><td>" . $arreglo1[$i] . "</td><tr>";
}
echo "</table>";

#Arrays asociativos
echo "<br>";
$edades=array("María" => 34, "Pepe" => 23, "Juan" => 56, "Carlos" => 39);
echo "<br>";
print_r($edades);
echo "<br>";
echo "El array edades contiene " . count($edades) . " elementos";
echo "<br>";
echo "Carlos tiene " . $edades["Carlos"] . " años";
echo "<br>";
echo "<br>";
echo "foreach...";
foreach ($edades as $nombre => $edad) {
    echo "<br>";
    echo $nombre . " tiene " . $edad . " años";
}

//Array bidimensional

$notas_alumnos=array();

$notas_alumnos['Pelayo']= array('LM' => 5, 'PAR' => 5, 'BD' => 5, 'FOL' => 9);
$notas_alumnos['Pablo']= array('LM' => 6, 'PAR' => 7, 'BD' => 5, 'FOL' => 10);
$notas_alumnos['Miguel']= array('LM' => 8, 'PAR' => 10, 'BD' => 9, 'FOL' => 5);

 foreach ($notas_alumnos as $alumno => $notas) { 
    echo "<br>";
    echo "<b>$alumno</b>";
    echo "<br>";
    echo "Estas son sus notas:";
    foreach ($notas as $modulo => $nota) {
        echo $modulo . " " . $nota . " ";
    }
    echo "<br>";
}
*/

# encontrar un número en un array
$arreglo1=array();

$i=0;
while ($i<20) {
    $arreglo1[$i]=(rand(1,30));
    $i++;
}
print_r($arreglo1);
$encontrado=false;
$i=0;
while (($i<20) && ($encontrado==false)) {
    if ( $arreglo1[$i] == 10 ) {
        $encontrado=true;
        $pos=$i+1;
        echo "<br>El valor 10 está en la posición <b>" . $pos . "</b> del array.<br>";
    }
    $i++;
} 


?>