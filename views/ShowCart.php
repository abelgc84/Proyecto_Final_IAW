<?php
// echo "<br>_SESSION[cart]============<br>";
// print_r($_SESSION['cart']);
// echo "<br>data============<br>";
// print_r($data);

// foreach ($data as $article) {
//     echo "cantidad: " . $article['cantidad'] . "<br>";
//     // echo "producto: " . print_r($article['product']) . "<br>";
//     echo "Nombre: " . $article['product']['Nombre'] . "<br>";
//     echo "Precio: " . $article['product']['Precio'] . "<br>";
//     echo "Imagen: " . $article['product']['Imagen'] . "<br>";
//     echo "Descripción: " . $article['product']['Descripción'] . "<br>";
//     echo "Detalles: " . $article['product']['Detalles'] . "<br>";
//     echo "Categoría: " . $article['product']['Categoría'] . "<br>";
//     echo "Ref: " . $article['product']['Referencia'] . "<br>";
    
// }



    echo "<div class='container-fluid p-5'>";
        echo "<div class='card'>";
            echo "<div class='row'>";
                # Cabecera
                echo "<div class='col-md-8'>";
                    echo "<div class='row'>";
                        echo "<div class='col'><h4 class='ms-5'><b>Carrito</b></h4></div>";
                        echo "<div class='col align-self-center text-right text-muted'>Artículos</div>";
                    echo "</div>";
                echo "</div>";
                # Artículos
                $total=0;
                foreach ($data as $article) {
                    echo "<div class='row border-top border-bottom'>";
                        echo "<div class='row main align-items-center'>";
                            echo "<div class='col-2'><img class='img-fluid' src='" . $article['product']['Imagen'] . "' ></div>";
                            echo "<div class='col-6'>";
                                echo "<div class='row text-muted'>" . $article['product']['Nombre'] . "</div>";
                                echo "<div class='row'>" . $article['product']['Descripción'] . "</div>";
                            echo "</div>";
                            echo "<div class='col'>" . $article['product']['Precio'] . "</div>";
                            echo "<div class='col' style='max-width: 80px;'>";
                                echo "<input type='text' class='form-control text-center' value='" . $article['cantidad'] . "'>";
                            echo "</div>";
                            echo "<div class='col'>" . ($article['product']['Precio'] * $article['cantidad']) . "</div>";
                            echo "<div class='col'><a class='btn btn-danger my-2 my-sm-0 ms-3' type='submit'>Eliminar</a></div>";
                        echo "</div>";
                    echo "</div>";
                    $total+=$article['product']['Precio'] * $article['cantidad'];
                }
                # CONFIRMAR
                echo "<div class='row border-top border-bottom'>";
                    echo "<div class='row main align-items-center'>";
                        echo "<div class='col-2'></div>";
                        echo "<div class='col-6'>";
                            echo "<div class='row text-muted'>" . count($article) . " Artículos</div>";
                        echo "</div>";
                        echo "<div class='col'>Total:</div>";
                        echo "<div class='col' style='max-width: 80px;'>";
                            # echo "<input type='text' class='form-control text-center' value='1'>";
                        echo "</div>";
                        echo "<div class='col'>" . $total . "</div>";
                        echo "<div class='col'><a class='btn btn-dark my-2 my-sm-0 ms-3' type='submit'>Comprar</a></div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>