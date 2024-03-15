<?php         
    echo "<div class=\"container-fluid p-5\">";       
        echo "<h1>Agregar nuevo producto</h1>";
        // Mostramos el mensaje de éxito si existe
        if (isset($data) && !is_array($data)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">";
                echo $data;
            echo "</div>";
        }
        echo "<div class=\"card mb-3\">";
            echo "<div class=\"card-body\">";
                echo "<form action=\"index.php?controller=ProductController&action=addProduct\" method=\"post\">";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"nombre\" class=\"col-sm-2 col-form-label\">Nombre</label>";
                        echo "<div class=\"col-sm-10\">";
                            // Mostramos el error si existe o el valor introducido por el usuario
                            echo "<input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto\" value=\"";
                            if (isset($_POST['nombre'])) {
                                echo htmlspecialchars($_POST['nombre']);
                            }
                            echo "\">";
                            if (isset($data['nombre'])) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $data['nombre'];
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"categoria\" class=\"col-sm-2 col-form-label\">Categoría</label>";
                        echo "<div class=\"col-sm-10\">";
                        echo "<select class=\"form-select\" id=\"categoria\" name=\"categoria\">";
                            echo "<option selected>Elige una categoría...</option>";
                            echo "<option value=\"teclado\"";
                            if (isset($_POST['categoria']) && $_POST['categoria'] == 'teclado') {
                                echo " selected";
                            }
                            echo ">teclado</option>";
                            echo "<option value=\"raton\"";
                            if (isset($_POST['categoria']) && $_POST['categoria'] == 'raton') {
                                echo " selected";
                            }
                            echo ">raton</option>";
                            echo "<option value=\"auricular\"";
                            if (isset($_POST['categoria']) && $_POST['categoria'] == 'auricular') {
                                echo " selected";
                            }
                            echo ">auricular</option>";
                        echo "</select>";
                        if (isset($data['categoria'])) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                echo $data['categoria'];
                            echo "</div>";
                        }
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"precio\" class=\"col-sm-2 col-form-label\">Precio</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"precio\" name=\"precio\" placeholder=\"Precio del producto\">";
                            if (isset($data['precio'])) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $data['precio'];
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";        
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"descripcion\" class=\"col-sm-2 col-form-label\">Descripción</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"descripcion\" placeholder=\"Descripción del producto\">";
                            if (isset($data['descripcion'])) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $data['descripcion'];
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"detalles\" class=\"col-sm-2 col-form-label\">Detalles</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"detalles\" name=\"detalles\" placeholder=\"Detalles del producto\">";
                            if (isset($data['detalles'])) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $data['detalles'];
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"imagen\" class=\"col-sm-2 col-form-label\">Imagen</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"imagen\" name=\"imagen\" placeholder=\"URL de la imagen\">";
                            if (isset($data['imagen'])) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $data['imagen'];
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "<button type=\"submit\" class=\"btn btn-dark\">Agregar</button>";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>