<?php

include ("funciones.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $boton = $_POST["ejercicio"];
        
        switch ($boton) {

            #####################################
            ### Ejercicios if - else - switch ###
            #####################################
            
            case 1:
                echo "<h2>Ejercicio 01</h2><br>";
                echo "Escribe un script que simule el comportamiento de lanzar una moneda
                    al aire y muestre una imagen con la cara o la cruz de la moneda.<br>";
                $moneda = rand(0, 1);
                if ($moneda == 0) {
                    echo "<h4>Ha salido cara.</h4><br>";
                    echo "<img src='cara.png'>";
                } else {
                    echo "<h4>Ha salido cruz.</h4><br>";
                    echo "<img src='cruz.png'>";
                }
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='1'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 2:
                echo "<h2>Ejercicio 02</h2><br>";
                echo "Escribe un script que genere un número aleatorio entre 1 y 10, simulando
                    una nota numérica y muiestre un mensaje indicando la calidifación obtenida
                    teniento en cuenta los siguientes rangos:<br>";
                echo "Insuficiente: 0, 5<br>
                    Suficiente: 5, 6<br>
                    Bien: 6,7<br>
                    Notable: 7, 9<br>
                    Sobresaliente: 9, 10<br>";
                $nota = rand(0, 10);
                if ($nota < 5) {
                    echo "<h4>Insuficiente.</h4>";
                } elseif ($nota < 6) {
                    echo "<h4>Suficiente.</h4>";
                } elseif ($nota < 7) {
                    echo "<h4>Bien.</h4>";
                } elseif ($nota < 9) {
                    echo "<h4>Notable.</h4>";
                } else {
                    echo "<h4>Sobresaliente.</h4>";
                }
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='2'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 3:
                echo "<h2>Ejercicio 03</h4><br>";
                echo "Escribe un script que genere un número aleatorio entre 1 y 7, y muestre
                    un mensaje indicando a qué día de la semana corresponde. Por ejemplo,
                    1 sería lunes, 2 martes, etc.<br>";
                $dia = rand(1, 7);
                switch ($dia) {
                    case 1:
                        echo "<h4>Hoy es lunes.</h4>";
                        break;
                    case 2:
                        echo "<h4>Hoy es martes.</h4>";
                        break;
                    case 3:
                        echo "<h4>Hoy es miércoles.</h4>";
                        break;
                    case 4:
                        echo "<h4>Hoy es jueves.</h4>";
                        break;
                    case 5:
                        echo "<h4>Hoy es viernes.</h4>";
                        break;
                    case 6:
                        echo "<h4>Hoy es sabado.</h4>";
                        break;
                    case 7:
                        echo "<h4>Hoy es domingo.</h4>";
                        break;
                    default:
                        echo "<h4>No salió ningún día</h4>";
                }
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='3'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 4:
                echo "<h2>Ejercicio 04</h4><br>";
                echo "Escribe un script que realice la simulación de lanzar un dado y muestre
                    una imagen ocn valor aleatorio entre 1 y 6. Resuelve el ejercicio utilizando
                    la estructura de control if-else.<br>";
                $dado = rand (1, 6);
                if ($dado == 1) {
                    echo "<h4>Ha salido 1.</h4><br>";
                    echo '<img src="1d6.png"><br>';
                } else {
                    if ($dado == 2) {
                        echo "<h4>Ha salido 2.</h4><br>";
                        echo '<img src="2d6.png"><br>';
                    } else {
                        if ($dado == 3) {
                            echo "<h4>Ha salido 3.</h4><br>";
                            echo '<img src="3d6.png"><br>';
                        } else {
                            if ($dado == 4) {
                                echo "<h4>Ha salido 4.</h4><br>";
                                echo '<img src="4d6.png"><br>';
                            } else {
                                if ($dado == 5) {
                                    echo "<h4>Ha salido 5.</h4><br>";
                                    echo '<img src="5d6.png"><br>';
                                } else {
                                    echo "<h4>Ha salido 6.</h4><br>";
                                    echo '<img src="6d6.png"><br>';
                                }
                            }
                        }
                    }
                }
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='4'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 5:
                echo "<h2>Ejercicio 5.</h2><br>";
                echo "Escribe un script que realice la simulación de lanzar un dado y muestre
                    una imagen con un valor aleatorio entre 1 y 6. Resuelve el ejercicio
                    utilizando la estructura de control switch.<br>";
                $dado = rand (1, 6);
                switch ($dado) {
                    case 1:
                        echo "<h4>Ha salido 1.</h4><br>";
                        echo '<img src="1d6.png"><br>';
                        break;
                    case 2:
                        echo "<h4>Ha salido 2.</h4><br>";
                        echo '<img src="2d6.png"><br>';
                        break;
                    case 3:
                        echo "<h4>Ha salido 3.</h4><br>";
                        echo '<img src="3d6.png"><br>';
                        break;
                    case 4:
                        echo "<h4>Ha salido 4.</h4><br>";
                        echo '<img src="4d6.png"><br>';
                        break;
                    case 5:
                        echo "<h4>Ha salido 5.</h4><br>";
                        echo '<img src="5d6.png"><br>';
                        break;
                    case 6:
                        echo "<h4>Ha salido 6.</h4><br>";
                        echo '<img src="6d6.png"><br>';
                        break;
                }
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='5'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 6:
                echo "<h2>Ejercicio 6.</h2><br>";
                echo "Escribe un script que realice la simulación de lanzar un dado y muestre
                    una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio 
                    sin utilizar las estructuras de control if - else y switch.<br>";
                $dado = rand(1, 6);
                echo "<h4>Ha salido " . $dado . "</h4><br>";
                echo '<img src="' . $dado . 'd6.png"><br>';
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='6'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 7:
                echo "<h2>Ejercicio 7.</h2><br>";
                echo "Escribe un script que realice la simulación de lanzar dos dados y muestre
                    una imagen con los valores obtenidos en cada uno de los dados.<br>";
                $dado1 = rand(1, 6);
                $dado2 = rand(1, 6);
                echo "<h4>Ha salido " . $dado1 . "</h4><br>";
                echo '<img src="' . $dado1 . 'd6.png"><br>';
                echo "<h4>Ha salido " . $dado2 . "</h4><br>";
                echo '<img src="' . $dado2 . 'd6.png"><br>';
                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='7'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;

            ############################
            ### Ejercicios de bucles ###
            ############################

            case 8:
                echo "<h2>Ejercicio 8.</h2><br>";
                echo "Escribe un algoritmo que indique si un número aleatorio dado es primo.<br>";
                
                # MEJORA
                # EMPEZAR EN EL 2 Y LLEGAR HASTA $NUM/2
                
                $primo=1;
                $num=rand(1, 100);
                $divisor=2;
                while (($divisor<=$num/2) && ($primo==1)) {
                    if ( $num % $divisor == 0 ) {
                        $primo=0;
                        echo "El número " . $num . " <b>no es</b> un número primo";
                    }
                    $divisor++;
                }
                if ( $primo == 1 ) {
                    echo "El número " . $num . " <b>es</b> un número primo";
                }

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='8'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 9:
                echo "<h2>Ejercicio 9.</h2><br>";
                echo "Escribe un algoritmo que muestre los cinco primeros números primos a partir
                    de un número aleatorio dado.<br>";
                
                $num=rand(1, 100);
                $cont=0;
                while ( $cont<5 ) {
                    $primo=1;
                    $divisor=2;
                    while (($divisor<=$num/2) && ($primo==1)) {
                        if ( $num % $divisor == 0 ) {
                            $primo=0;
                        }
                        $divisor++;
                    }
                    if ( $primo == 1 ) {
                        echo "El número " . $num . " es un número primo.<br>";
                        $cont++;
                    }
                    $num++;
                }

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='9'>Volver a lanzar</button>
                    </form><br>";
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 10:
                echo "<h2>Ejercicio 10.</h2><br>";
                echo "<h4>Escribe un algoritmo que nos diga si un número dado es perfecto o no.</h4><br>";
                
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero'>Número:</label>
                        <input type='number' name='numero' required>
                        <button type='submit' name='ejercicio' value='10'>Verificar</button>
                    </form>";
                $numero = $_POST['numero'];
                if ($numero) {
                    #$numero=rand(1, 100);
                    $divisor=1;
                    $sum_divisores=0;
                    echo "Analizando " . $numero . "...<br>";
                    while ($divisor<=$numero/2) {
                        if ($numero % $divisor == 0) {
                            echo $divisor . " es un divisor.<br>";
                            $sum_divisores=$sum_divisores+$divisor;
                        }
                        $divisor++;
                    }
                    echo "La suma de divisores es " . $sum_divisores . "<br>";
                    if ($numero == $sum_divisores) {
                        echo $numero . " es un número perfecto.";
                    } else {
                        echo $numero . " no es un número perfecto.";
                    }
                } 
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 11:
                echo "<h2>Ejercicio 11.</h2><br>";
                echo "<h4>Escribe un algoritmo que calcule el mímino común múltiplo de dos números.</h4><br>";

                echo "
                    <b>Ingrese dos números:</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número 1:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número 2:</label>
                        <input type='number' name='numero2' required>
                        <button type='submit' name='ejercicio' value='11'>Verificar</button>
                    </form>";
                
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];

                if ($numero1) {
                    $producto1=2;
                    $producto2=2;
                    $mcm1 = $numero1 * $producto1;
                    $mcm2 = $numero2 * $producto2;
                    while ( $mcm1 != $mcm2 ) {
                        if ( $mcm1 > $mcm2 ) {
                            $producto2++;
                            $mcm2 = $numero2 * $producto2;
                        } else {
                            $producto1++;
                            $mcm1 = $numero1 * $producto1;
                        }
                    }
                    echo "El mínimo común múltiplo de $numero1 y $numero2 es <b>$mcm1</b>";
                }
                
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 12:
                echo "<h2>Ejercicio 12.</h2><br>";
                echo "<h4>Escribe un algoritmo que calcule el máximo común divisor de dos números.</h4><br>";
                
                echo "
                    <b>Ingrese dos números:</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número 1:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número 2:</label>
                        <input type='number' name='numero2' required>
                        <button type='submit' name='ejercicio' value='12'>Verificar</button>
                    </form>";

                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];

                if ($numero1) {

                    if ( $numero1 > $numero2 ) {
                        $divisor = $numero2;
                    } elseif ( $numero1 < $numero2 ) {
                        $divisor = $numero1;
                    } else {
                        $divisor = $numero1;
                    }

                    $mcd = 1;
                    while ( ($divisor > 1) && ($mcd == 1) ) {
                        if ( ($numero1 % $divisor == 0) && ($numero2 % $divisor == 0) ) {
                            $mcd = $divisor;
                        }
                        $divisor--;
                    }
                    echo "El máximo común divisor de $numero1 y $numero2 es <b>$mcd</b>";     
                }
                
                
                echo "
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            
            ############################
            ### Ejercicios de Arrays ###
            ############################
            
            case 13:
                echo "<h2>Ejercicio 13</h><br>";
                echo "<h4>Escribe un script PHP que realice las siguientes acciones:<br>
                • Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.<br>
                • Una vez que ha inicializado el array, imprimir todos los valores que almacena. </h4><br>";

                $arreglo1=array();

                for ($i=0; $i<10; $i++) {
                    $arreglo1[$i]=(rand(1,30));
                }
                for ($i=0; $i<10; $i++) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                }

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='13'>Recargar</button>
                    </form><br>";
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 14:
                echo "<h2>Ejercicio 14</h2><br>";
                echo "<h4>Escribe un script PHP que realice las siguientes acciones:<br>
                • Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.<br>
                • Una vez que ha inicializado el array, imprima todos los valores que almacena.<br>
                • Calcular el valor medio de los valores del array.<br>
                • Mostrar el valor medio que ha calculado.</h4><br>";

                $arreglo1=array();
                $suma=0;
                $i=0;
                while ($i<10) {
                    $arreglo1[$i]=(rand(1,30));
                    $i++;
                }
                $i=0;
                while ($i<10) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                    $suma=$suma+$arreglo1[$i];
                    $i++;
                }
                $promedio=$suma/count($arreglo1);
                echo "El valor promedio de los elementos del array es <b>" . $promedio . "</b><br>";

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='14'>Recargar</button>
                    </form><br>";
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 15:
                echo "<h2>Ejercicio 15</h2><br>";
                echo "<h4>Escribe un script PHP que realice las siguientes acciones:<br>
                • Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.<br>
                • Una vez que ha inicializado el array, imprima todos los valores que almacena.<br>
                • Buscar el valor máximo de los valores del array.<br>
                • Muestre el valor máximo que ha encontrado.</h4><br>";

                $arreglo1=array();
                $i=0;
                do {
                    $arreglo1[$i]=(rand(1,30));
                    $i++;
                } while ($i<10);
                $max=$arreglo1[0];
                $i=0;
                do {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                    if ( $arreglo1[$i] > $max ) {
                        $max = $arreglo1[$i];
                    }
                    $i++;
                } while ($i<10);
                echo "El valor máximo de los elementos del array es <b>" . $max . "</b><br>";

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='15'>Recargar</button>
                    </form><br>";
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 16:
                echo "<h2>Ejercicio 16</h2><br>";
                echo "<h4>Escribe un script PHP que realice las siguientes acciones:<br>
                • Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.<br>
                • Una vez que ha inicializado el array, imprima todos los valores que almacena.<br>
                • Buscar el valor mínimo de los valores del array.<br>
                • Muestre el valor mínimo que ha encontrado.</h4><br>";

                $arreglo1=array();
                
                for ($i=0; $i<10; $i++) {
                    $arreglo1[$i]=(rand(1,30));
                }
                $min=$arreglo1[0];
                for ($i=0; $i<10; $i++) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                    if ( $arreglo1[$i] < $min ) {
                        $min = $arreglo1[$i];
                    }
                }
                echo "El valor mínimo de los elementos del array es <b>" . $min . "</b><br>";

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='16'>Recargar</button>
                    </form><br>";
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 17:
                echo "<h2>Ejercicio 17</h2><br>";
                echo "<h4>Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:<br>
                • Mostrar el listado ordenado de mayor a menor.<br>
                • Mostrar el listado ordenado de menor a mayor.</h4><br>";

                for ($i=0; $i<10; $i++) {
                    $arreglo1[$i]=(rand(1,30));
                }
                for ($i=0; $i<10; $i++) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                }
                echo "<br>Ordenando el array de mayor a menor...<br>";
                sort($arreglo1, SORT_NUMERIC);
                for ($i=0; $i<10; $i++) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                }
                echo "<br>Ordenando el array de menor a mayor...<br>";
                rsort($arreglo1, SORT_NUMERIC);
                for ($i=0; $i<10; $i++) {
                    echo "La posición " . $i . " del array tiene el valor <b>" . $arreglo1[$i] . "</b><br>";
                }

                echo "
                    <form method='post' action='ejercicios.php'>
                        <button type='submit' name='ejercicio' value='17'>Recargar</button>
                    </form><br>";
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 18:
                echo "<h2>Ejercicio 18</h2>";
                echo '<h4>Escribe un script PHP que permita ordenar el siguiente array asociativo:<br>
                array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")<br>
                • De forma ascendente ordenado por valor.<br>
                • De forma ascendente ordenado por clave.<br>
                • De forma descendente ordenado por valor.<br>
                • De forma descendetne ordenado por clave.</h4><br>';

                $edades=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
                foreach ($edades as $nombre => $edad ) {
                    echo $nombre . " tiene " . $edad . " años.<br>";
                }
                echo "<br>Ordenando de forma ascendente por valor.<br>";
                asort($edades);
                foreach ($edades as $nombre => $edad ) {
                    echo $nombre . " tiene " . $edad . " años.<br>";
                }
                echo "<br>Ordenando de forma ascendente por clave.<br>";
                ksort($edades);
                foreach ($edades as $nombre => $edad ) {
                    echo $nombre . " tiene " . $edad . " años.<br>";
                }
                echo "<br>Ordenando de forma descendente por valor.<br>";
                arsort($edades);
                foreach ($edades as $nombre => $edad ) {
                    echo $nombre . " tiene " . $edad . " años.<br>";
                }
                echo "<br>Ordenando de forma descendente por clave.<br>";
                krsort($edades);
                foreach ($edades as $nombre => $edad ) {
                    echo $nombre . " tiene " . $edad . " años.<br>";
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 19:
                echo "<h2>Ejercicio 19</h2><br>";
                echo '<h4>Escribe un script PHP que muestre el siguiente array asociativo ordenado por<br>
                la clave. El resultado deberá seguir el siguiente patrón:<br>
                La capital de ITALIA es ROMA<br>
                array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels")</h4><br>';

                $capitales=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels");

                ksort($capitales);
                foreach ($capitales as $pais => $ciudad) {
                    echo "La capital de " . strtoupper($pais) . " es " . strtoupper($ciudad) . "<br>";
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 20:
                echo "<h2>Ejercicio 20</h2>";
                echo "<h4>Escribe un script PHP que convierta el array del ejercicio anterior en un
                objeto JSON.</h4><br>";

                $capitales=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels");

                echo json_encode($capitales);

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;

            #############################
            ## Ejercicios de Funciones ##
            #############################

            case 21:
                echo "<h2>Ejercicio 21</h2>";
                echo "<h4>Escribe una función que reciba un número como parámetro de entrada y que<br>
                imprima su tabla de multiplicar.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero'>Número:</label>
                        <input type='number' name='numero' required>
                        <button type='submit' name='ejercicio' value='21'>Verificar</button>
                    </form>";

                $numero=$_POST['numero'];

                if ($numero){
                    tabla_multiplicar($numero);
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 22:
                echo "<h2>Ejercicio 22</h2>";
                echo "<h4>Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que<br>
                imprima las tablas de multiplicar entre esos dos números. Utilice la función del<br>
                ejercicio anterior.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de inicio:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número de fin:</label>
                        <input type='number' name='numero2' required>
                        <button type='submit' name='ejercicio' value='22'>Verificar</button>
                    </form>";

                $num_ini=$_POST['numero1'];
                $num_fin=$_POST['numero2'];

                if ($num_ini) {
                    tabla_multiplicar_v2($num_ini, $num_fin);
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 23:
                echo "<h2>Ejercicio 23</h2>";
                echo "<h4>Escribe una función llamada inicializar_array que reciba tres parémetros llamados<br> 
                numero_de_elementos , min y max , y que devuelva un array de números enteros comprendidos entre<br> 
                los valores min y max . El número de elementos que contiene el array será el especificado en el parámetro<br> 
                de entrada numero_de_elementos</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de elementos:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número mínimo:</label>
                        <input type='number' name='numero2' required>
                        <label for='numero2'>Número máximo:</label>
                        <input type='number' name='numero3' required>
                        <button type='submit' name='ejercicio' value='23'>Verificar</button>
                    </form>";

                $num_ele=$_POST['numero1'];
                $num_min=$_POST['numero2'];
                $num_max=$_POST['numero3'];

                if ($num_ele) {
                    $array = inizializar_array($num_ele, $num_min, $num_max);
                    print_r($array);
                }
            
                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 24:
                echo "<h2>Ejercicio 24</h2>";
                echo "<h4>Escribe una función llamada calcular_media que reciba un array como<br>
                parámetro de entrada y que devuelva la media de todos los valores que<br>
                contiene.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de elementos:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número mínimo:</label>
                        <input type='number' name='numero2' required>
                        <label for='numero2'>Número máximo:</label>
                        <input type='number' name='numero3' required>
                        <button type='submit' name='ejercicio' value='24'>Verificar</button>
                    </form>";

                $num_ele=$_POST['numero1'];
                $num_min=$_POST['numero2'];
                $num_max=$_POST['numero3'];

                if ($num_ele) {
                    $array = inizializar_array($num_ele, $num_min, $num_max);
                    print_r($array);
                    echo "<br>";
                    $promedio=calcular_media($array);
                    echo "<br>El valor promedio del array es: <b>" . $promedio . "</b>";
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 25:
                echo "<h2>Ejercicio 25</h2>";
                echo "<h4>Escribe una función llamada calcular_maximo que reciba un array como<br>
                parámetro de entrada y que devuelva cuál es el máximo valor del array.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de elementos:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número mínimo:</label>
                        <input type='number' name='numero2' required>
                        <label for='numero2'>Número máximo:</label>
                        <input type='number' name='numero3' required>
                        <button type='submit' name='ejercicio' value='25'>Verificar</button>
                    </form>";

                $num_ele=$_POST['numero1'];
                $num_min=$_POST['numero2'];
                $num_max=$_POST['numero3'];

                if ($num_ele) {
                    $array = inizializar_array($num_ele, $num_min, $num_max);
                    print_r($array);
                    echo "<br>";
                    $maximo=calcular_maximo($array);
                    echo "<br>El valor máximo del array es: <b>" . $maximo . "</b>";
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 26:
                echo "<h2>Ejercicio 26</h2>";
                echo "<h4>Escribe una función llamada calcular_minimo que reciba un array como<br>
                parámetro de entrada y que devuelva cuál es el mínimo valor del array.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de elementos:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número mínimo:</label>
                        <input type='number' name='numero2' required>
                        <label for='numero2'>Número máximo:</label>
                        <input type='number' name='numero3' required>
                        <button type='submit' name='ejercicio' value='26'>Verificar</button>
                    </form>";

                $num_ele=$_POST['numero1'];
                $num_min=$_POST['numero2'];
                $num_max=$_POST['numero3'];

                if ($num_ele) {
                    $array = inizializar_array($num_ele, $num_min, $num_max);
                    print_r($array);
                    echo "<br>";
                    $minimo=calcular_minimo($array);
                    echo "<br>El valor mínimo del array es: <b>" . $minimo . "</b>";
                }


                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;
            case 27:
                echo "<h2>Ejercicio 27</h2>";
                echo "<h4>Escribe una función llamada imprimir_array que reciba un array como<br>
                parámetro de entrada y muestre su contenido en una tabla con dos columnas.<br>
                La primera columna mostrará la posición del array y la segunda el valor que hay<br>
                en esa posición.</h2><br>";
                echo "
                    <b>Ingrese un número</b><br>
                    <form method='post' action='ejercicios.php'>
                        <label for='numero1'>Número de elementos:</label>
                        <input type='number' name='numero1' required>
                        <label for='numero2'>Número mínimo:</label>
                        <input type='number' name='numero2' required>
                        <label for='numero2'>Número máximo:</label>
                        <input type='number' name='numero3' required>
                        <button type='submit' name='ejercicio' value='27'>Verificar</button>
                    </form>";

                $num_ele=$_POST['numero1'];
                $num_min=$_POST['numero2'];
                $num_max=$_POST['numero3'];

                if ($num_ele) {
                    $array = inizializar_array($num_ele, $num_min, $num_max);
                    print_r($array);
                    echo "<br>";
                    $tabla=imprimir_array($array);
                    echo $tabla;
                }

                echo"
                    <form method='get' action='../index.php'>
                        <button type='submit'>Volver a la página principal</button>
                    </form>";
                break;

            default:
                echo "No se eligió ningún ejercicio";
        }
    }
?>
