<?php
    /**
     * Controlador que añade un producto al carrito.
     */

    // Al lanzarlo con action="..." me da error porque no se envía el post[referencia] y la función no se ejecuta.
    // De esta manera sí funciona, tiene algo que ver con el script de javascript que refresca la página.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        $controller->addToCart();
    }

    echo "<section class=\"bg-light\">";
        echo "<div class=\"container pb-5\">";
            echo "<div class=\"row\">";
                echo "<div class=\"col-lg-4 mt-5\">";
                    echo "<div class=\"card mb-3\">";
                        echo "<img class=\"card-img img-fluid\" src=\"" . $data['Imagen'] . "\">";
                    echo "</div>";
                echo "</div>";
                echo "<div class=\"col-lg-8 mt-5\">";
                    echo "<div class=\"card\">";
                        echo "<div class=\"card-body\">";
                            echo "<h1 class=\"h2\">" . $data['Nombre'] . "</h1>";
                            echo "<p class=\"h3 py-2\">" . $data['Precio'] . "€</p>";
                            // ADORNOS
                            echo "<p class=\"py-2\">";
                                echo "<i class=\"fa fa-star text-warning\"></i>";
                                echo "<i class=\"fa fa-star text-warning\"></i>";
                                echo "<i class=\"fa fa-star text-warning\"></i>";
                                echo "<i class=\"fa fa-star text-warning\"></i>";
                                echo "<i class=\"fa fa-star text-secondary\"></i>";
                                echo "<span class=\"list-inline-item text-dark\">Rating 4.8 | 36 Comentarios</span>";
                            echo "</p>";
                            echo "<h6>Descripción:</h6>";
                            echo "<p>" . $data['Descripción'] . "</p>";
                            echo "<h6>Detalles:</h6>";
                            echo "<ul class=\"list-unstyled pb-3\">";
                                echo "<li>" . $data['Detalles'] . "</li>";
                            echo "</ul>";
                            echo "<div class=\"row pb-3\">";
                                echo "<form method='post' action=''>"; //index.php?controller=ProductController&action=addToCart 
                                    echo "<input type='hidden' name='referencia' value='".$data['Referencia']."'>";
                                    echo "<button type='submit' name='addToCart' class='btn btn-dark'>Añadir al carrito</button>";
                                echo "</form>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</section>";
?>
    