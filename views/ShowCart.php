<?php
    /**
     * Vista que muestra los productos del carrito.
     */

    /**
     * Controlador que elimina un producto del carrito.
     */
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['removeFromCart'])) {
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        $controller->removeFromCart();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['increase']) || isset($_POST['decrease'])){
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        $controller->updateCart();
    }

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
                                echo "<div class='mb-2'>";
                                    echo "<form method='post' action=''>"; //index.php?controller=ProductController&action=updateCart
                                        echo "<input type='hidden' name='referencia' value='" . $article['product']['Referencia'] . "'>";
                                        echo "<input type='text' class='form-control text-center' value='" . $article['cantidad'] . "'>";
                                        echo "<div class='btn-group' role='group'>";
                                            echo "<button type='submit' name='increase' class='btn btn-small'>+</button>";
                                            echo "<button type='submit' name='decrease' class='btn btn-small'>-</button>";
                                        echo "</div>";
                                    echo "</form>";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class='col'>" . ($article['product']['Precio'] * $article['cantidad']) . "</div>";
                            echo "<div class='col'>";
                                echo "<form method='post' action=''>"; //index.php?controller=ProductController&action=removeFromCart
                                    echo "<input type='hidden' name='referencia' value='" . $article['product']['Referencia'] . "'>";
                                    echo "<button type='submit' name='removeFromCart' class='btn btn-danger'>Eliminar</button></a>";
                                echo "</form>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    $total+=$article['product']['Precio'] * $article['cantidad'];
                }
                # CONFIRMAR
                echo "<div class='row border-top border-bottom'>";
                    echo "<div class='row main align-items-center'>";
                        echo "<div class='col-2'></div>";
                        echo "<div class='col-6'>";
                            echo "<div class='row text-muted'>" . count($_SESSION['cart']) . " Artículos</div>";
                        echo "</div>";
                        echo "<div class='col'>Total:</div>";
                        echo "<div class='col' style='max-width: 80px;'>";
                            # echo "<input type='text' class='form-control text-center' value='1'>";
                        echo "</div>";
                        echo "<div class='col'>" . $total . "</div>";
                        echo "<div class='col'><a class='btn btn-dark my-2 my-sm-0 ms-3' type='submit' href=\"index.php?controller=UserController&action=storeOrder\">Comprar</a></div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>