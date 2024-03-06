<!--
    Vista que muestra los productos en tarjetas. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<?php

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
                    echo "<h5 class=\"card-title\">" . $article['Nombre'] . "</h5>";
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

<!--  

<div class="container">
    <h1> Listado de productos </h1>
    <table class="table" border="2">
        <tr>
            <th>Referencia</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Detalles</th>
            <th>Imagen</th>
        </tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                      <td>".$article['Referencia']."</td>
                      <td>".$article['Nombre']."</td>
                      <td>".$article['Categoría']."</td>
                      <td>".$article['Precio']."</td>
                      <td>".$article['Descripción']."</td>
                      <td>".$article['Detalles']."</td>
                      <td>".$article['Imagen']."</td>
                      </tr>"; 
            }
        ?>
    </table>
</div>

-->