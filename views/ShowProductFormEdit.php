<?php         
    echo "<div class=\"container-fluid p-5\">";       
        echo "<h1>Editar el producto</h1>";
        echo "<div class=\"card mb-3\">";
            echo "<div class=\"card-body\">";
                echo "<form action=\"index.php?controller=ProductController&action=editProduct\" method=\"post\">"; //ACTION VACIO
                    echo "<input type=\"hidden\" name=\"referencia\" value=\"".$data['Referencia']."\">";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"nombre\" class=\"col-sm-2 col-form-label\">Nombre</label>";
                        echo "<div class=\"col-sm-10\">";
                            // Mostramos el error si existe o el valor introducido por el usuario
                            echo "<input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto\" value=\"".$data['Nombre']."\">";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"categoria\" class=\"col-sm-2 col-form-label\">Categoría</label>";
                        echo "<div class=\"col-sm-10\">";
                        echo "<select class=\"form-select\" id=\"categoria\" name=\"categoria\">";
                            echo "<option selected>Elige una categoría...</option>";
                            echo "<option value=\"teclado\"";
                            if (isset($data['Categoría']) && $data['Categoría'] == 'teclado') {
                                echo " selected";
                            }
                            echo ">teclado</option>";
                            echo "<option value=\"raton\"";
                            if (isset($data['Categoría']) && $data['Categoría'] == 'raton') {
                                echo " selected";
                            }
                            echo ">raton</option>";
                            echo "<option value=\"auricular\"";
                            if (isset($data['Categoría']) && $data['Categoría'] == 'auricular') {
                                echo " selected";
                            }
                            echo ">auricular</option>";
                        echo "</select>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"precio\" class=\"col-sm-2 col-form-label\">Precio</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"precio\" name=\"precio\" placeholder=\"Precio del producto\" value=\"".$data['Precio']."\">";
                        echo "</div>";
                    echo "</div>";        
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"descripcion\" class=\"col-sm-2 col-form-label\">Descripción</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"descripcion\" placeholder=\"Descripción del producto\" value=\"".$data['Descripción']."\">";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"detalles\" class=\"col-sm-2 col-form-label\">Detalles</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"detalles\" name=\"detalles\" placeholder=\"Detalles del producto\" value=\"".$data['Detalles']."\">";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mb-3\">";
                        echo "<label for=\"imagen\" class=\"col-sm-2 col-form-label\">Imagen</label>";
                        echo "<div class=\"col-sm-10\">";
                            echo "<input type=\"text\" class=\"form-control\" id=\"imagen\" name=\"imagen\" placeholder=\"URL de la imagen\" value=\"".$data['Imagen']."\">";
                        echo "</div>";
                    echo "</div>";
                    echo "<button type=\"submit\" class=\"btn btn-dark\">Editar</button>";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>