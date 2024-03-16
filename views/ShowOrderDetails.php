<?php
    /**
     * Vista que muestra los productos de un pedido.
     */

    echo "<main>";
    echo "<div class=\"container-fluid p-5\">";
        echo "<h1>Número de pedido: ".$data[0]['ID_Pedido']."</h1>";
        echo "<div class=\"table-responsive\">";
            echo "<table class=\"table table-striped table-hover\">";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Referencia</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Categoría</th>";
                        echo "<th>Cantidad</th>"; 
                        echo "<th>Precio</th>";                       
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                $total=0;
                foreach ($data as $article){
                    echo "<tr>";
                        echo "<td>".$article['Ref_Producto']."</a></td>";
                        echo "<td><a href=\"index?controller=UserController&action=showOneProduct&ref={$article['Ref_Producto']}\">{$article['Nombre']}</a></td>";
                        echo "<td>".$article['Categoría']."</td>";                        
                        echo "<td>".$article['Cantidad']."</td>";
                        echo "<td>".$article['Precio']." €</td>";
                    echo "</tr>";
                    $total+=$article['Precio'] * $article['Cantidad'];
                }
                echo "</tbody>";
                echo "<tfoot>";
                    echo "<tr>";
                        echo "<td></td>";
                        echo "<td colspan='2'><b>" . count($data) . " Artículos</b></td>";
                        echo "<td><b>Total:</b></td>";
                        echo "<td><b>".$total." €</b></td>";
                    echo "</tr>";
            echo "</table>";
        echo "</div>";
    echo "</div>";
echo "</main>";
?>