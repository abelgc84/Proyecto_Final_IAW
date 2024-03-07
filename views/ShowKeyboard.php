<?php
    /*
    * Vista de los productos de la categoría teclado
    * Recibe los datos a mostrar a mostrar a del parámetro $data (utilizado en la función View::show).
    */

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
                echo "<img src=" . $article['Imagen'] . " class=\"card-img-top\">";
                echo "<div class=\"card-body\">";
                    echo "<h5 class=\"card-title\" style=\"height: 50px;\">" . $article['Nombre'] . "</h5>";
                    echo "<h6 class=\"card-title text-end\">Precio: " . $article['Precio'] . " €</h6>";
                    echo "<p class=\"card-text\">" . $article['Descripción'] . "</p>";
                    echo "<a href=\"#\" class=\"btn btn-dark\">Añadir al carrito</a>"; // HREF VACIO
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