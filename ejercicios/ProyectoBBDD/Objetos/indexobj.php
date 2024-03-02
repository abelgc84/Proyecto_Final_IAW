<?php

include ('alumno.php');

$alumno1=new AlumnoASIR('Nerea', 'Perez', 20, 'nerea@gmail.com');
$alumno1->setNotasPrimero(7,9,6,8,10);
// $alumno1->nombre='Nerea';
// $alumno1->edad=20;
// $alumno1->email='nerea@gmail.com';

$alumno2=new AlumnoASIR('Joaquin', 'Sanchez', 29, 'joaquin@gmail.com');
$alumno2->setNotasPrimero(5,3,4,5,7);
// $alumno2->nombre='Joaquin';
// $alumno2->edad=26;
// $alumno2->email='joaquin@gmail.com';

$alumno3=new AlumnoASIR('Marco', 'Sanchez', 22, 'marcos@gmail.com');
$alumno3->setNotasPrimero(6,7,4,2,8);
echo "El nombre del objeto 1 " . $alumno1->getNombre() . "<br>";

echo "El nombre del objeto 2 " . $alumno2->getNombre() . "<br>";

$conjuntoAlumnos=array();

array_push($conjuntoAlumnos, $alumno1);
array_push($conjuntoAlumnos, $alumno2);
array_push($conjuntoAlumnos, $alumno3);

echo "<table border='2'>";
foreach ($conjuntoAlumnos as $al){
    echo "<tr><td>" . $al->getNombre() . "</td>";
    echo "<td>" . $al->getApellidos() . "</td>";
    echo "<td>" . $al->getEdad() . "</td>";
    echo "<td>" . $al->getEmail() . "</td>";
    echo "<td>" . $al->notaMediaPrimero() . "</tr>";
} 

?>