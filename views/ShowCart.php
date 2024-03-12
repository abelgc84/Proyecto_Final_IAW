<?php
print_r($_SESSION['cart']);
echo "<br>";
print_r($data[0]);
    echo "<div class='container-fluid p-5'>";
        echo "<div class='card'>";
            echo "<div class='row'>";
                # Cabecera
                echo "<div class='col-md-8'>";
                    echo "<div class='row'>";
                        echo "<div class='col'><h4 class='ms-5'><b>Carrito</b></h4></div>";
                        echo "<div class='col align-self-center text-right text-muted'>3 Artículos</div>";
                    echo "</div>";
                echo "</div>";
                # Artículos
                echo "<div class='row border-top border-bottom'>";
                    echo "<div class='row main align-items-center'>";
                        echo "<div class='col-2'><img class='img-fluid' src='../img/1080p.png' alt='1080p'></div>";
                        echo "<div class='col-6'>";
                            echo "<div class='row text-muted'>Artículo</div>";
                            echo "<div class='row'>Descripción.</div>";
                        echo "</div>";
                        echo "<div class='col'>100€</div>";
                        echo "<div class='col' style='max-width: 80px;'>";
                            echo "<input type='text' class='form-control text-center' value='1'>";
                        echo "</div>";
                        echo "<div class='col'>100€</div>";
                        echo "<div class='col'><a class='btn btn-danger my-2 my-sm-0 ms-3' type='submit'>Eliminar</a></div>";
                    echo "</div>";
                echo "</div>";
                # CONFIRMAR
                echo "<div class='row border-top border-bottom'>";
                    echo "<div class='row main align-items-center'>";
                        echo "<div class='col-2'></div>";
                        echo "<div class='col-6'>";
                            echo "<div class='row text-muted'>3 Artículos</div>";
                        echo "</div>";
                        echo "<div class='col'>Total:</div>";
                        echo "<div class='col' style='max-width: 80px;'>";
                            # echo "<input type='text' class='form-control text-center' value='1'>";
                        echo "</div>";
                        echo "<div class='col'>300€</div>";
                        echo "<div class='col'><a class='btn btn-dark my-2 my-sm-0 ms-3' type='submit'>Comprar</a></div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>