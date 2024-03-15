<?php
    /**
     * Vista que muestra el panel de administración.
     */

    # Verificamos si la sesión está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    # Verificamos que el usuario sea administrador
    if (isset($_SESSION['user']) && $_SESSION['user']->Rol == "Admin") {
        echo "<main>";
            echo "<div class=\"container-fluid p-5\">";
                echo "<h1>Administración de Productos</h1>";
                echo "<div class=\"table-responsive\">";
                    echo "<table class=\"table table-striped table-hover\">";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>Referencia</th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Categoría</th>";
                                echo "<th>Precio</th>";
                                echo "<th>Descripción</th>";
                                echo "<th>Detalles</th>";
                                echo "<th>Imagen</th>";
                                echo "<th>Editar</th>";
                                echo "<th>Eliminar</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($data as $article){
                            echo "<tr>";
                                echo "<td>".$article['Referencia']."</td>";
                                echo "<td>".$article['Nombre']."</td>";
                                echo "<td>".$article['Categoría']."</td>";
                                echo "<td>".$article['Precio']."</td>";
                                echo "<td>".$article['Descripción']."</td>";
                                echo "<td>".$article['Detalles']."</td>";
                                echo "<td>".$article['Imagen']."</td>";
                                echo "<form action = \"index.php?controller=ProductController&action=showProductFormEdit\" method=\"post\">";
                                    echo "<input type=\"hidden\" name=\"referencia\" value=\"".$article['Referencia']."\">";
                                    echo "<td><button type=\"submit\" class=\"btn btn-dark btn-sm\">Editar</button></td>";
                                echo "</form>";
                                echo "<form action=\"index.php?controller=ProductController&action=deleteProduct\" method=\"post\">";
                                    echo "<input type=\"hidden\" name=\"referencia\" value=\"".$article['Referencia']."\">";
                                    echo "<td><button type=\"submit\" class=\"btn btn-danger btn-sm\">Eliminar</button></td>";
                                echo "</form>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                    echo "</table>";
                echo "</div>";
            echo "</div>";
        echo "</main>";
    } else {
        echo "<main>";
            echo "<div class=\"container-fluid p-5\">";
                echo "<h1>Acceso denegado</h1>";
                echo "<p>No tienes permisos para acceder a esta página.</p>";
            echo "</div>";
        echo "</main>";
    }
?>