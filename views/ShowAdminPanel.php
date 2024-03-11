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
                echo "<h1>Agregar nuevo producto</h1>";
                echo "<div class=\"card mb-3\">";
                    echo "<div class=\"card-body\">";
                        echo "<form action=\"#\" method=\"post\">"; //ACTION VACIO
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"nombre\" class=\"col-sm-2 col-form-label\">Nombre</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto\">";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"categoria\" class=\"col-sm-2 col-form-label\">Categoría</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"categoria\" name=\"categoria\" placeholder=\"Categoría del producto\">";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"precio\" class=\"col-sm-2 col-form-label\">Precio</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"precio\" name=\"precio\" placeholder=\"Precio del producto\">";
                                echo "</div>";
                            echo "</div>";        
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"descripcion\" class=\"col-sm-2 col-form-label\">Descripción</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"descripcion\" placeholder=\"Descripción del producto\">";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"detalles\" class=\"col-sm-2 col-form-label\">Detalles</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"detalles\" name=\"detalles\" placeholder=\"Detalles del producto\">";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class=\"row mb-3\">";
                                echo "<label for=\"imagen\" class=\"col-sm-2 col-form-label\">Imagen</label>";
                                echo "<div class=\"col-sm-10\">";
                                    echo "<input type=\"text\" class=\"form-control\" id=\"imagen\" placeholder=\"URL de la imagen\">";
                                echo "</div>";
                            echo "</div>";
                            echo "<button type=\"submit\" class=\"btn btn-dark\">Agregar</button>";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
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
                                echo "<td><button type=\"button\" class=\"btn btn-dark btn-sm\">Editar</button></td>";
                                echo "<td><button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar</button></td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                    echo "</table>";
                echo "</div>";
            echo "</div>";
        echo "</main>";
    }

?>