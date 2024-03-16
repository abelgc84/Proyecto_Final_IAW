<?php
    /*
    * Vista de los productos de la categoría auriculares
    * Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
    */

    /**
     * Controlador que añade un producto al carrito.
     */
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['referencia'])) {
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        $controller->addToCart();
    }
    /**
     * Controlador que muestra la página de un producto.
     */
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ref'])) {
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        $controller->showOneProduct($_GET['ref']);
    }

    // Contar el número de productos
    $count = 0;

    foreach ($data as $article) {
        if ($count % 4 == 0) {
            // Empezar una nueva fila cada 4 productos
            echo "<div class=\"row p-5\">";
        }

        // Mostrar cada producto
        echo "<div class=\"col-md-3\">";
            echo "<div class=\"card\" style=\"width: 18rem;\">";
                echo "<a href=\"index.php?controller=UserController&action=showOneProduct&ref=" . urlencode($article['Referencia']) . "\">";
                    echo "<img src=" . $article['Imagen'] . " class=\"card-img-top\">";
                echo "</a>";
                echo "<div class=\"card-body\">";
                    echo "<h5 class=\"card-title\" style=\"height: 50px;\">" . $article['Nombre'] . "</h5>";
                    echo "<h6 class=\"card-title text-end\">Precio: " . $article['Precio'] . " €</h6>";
                    echo "<p class=\"card-text\">" . $article['Descripción'] . "</p>";
                    echo "<form method='post' action=''>";
                        echo "<input type='hidden' name='referencia' value='" . $article['Referencia'] . "'>";
                        echo "<button type='submit' name='addToCart' class='btn btn-dark'>Añadir al carrito</button>";
                    echo "</form>";
                echo "</div>";
            echo "</div>";
        echo "</div>";

        $count++;

        if ($count % 4 == 0) {
            // Cerrar la fila cada 4 productos
            echo "</div>";
        }
    }

    // Cierra la última fila
    if ($count % 4 != 0) {
        echo "</div>";
    }
?>