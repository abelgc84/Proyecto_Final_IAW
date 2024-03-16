<?php
    /**
     * Vista que muestra la lista de pedidos realizados.
     */

    echo "<main>";
        echo "<div class=\"container-fluid p-5\">";
            echo "<h1>Listado de Pedidos</h1>";
            echo "<div class=\"table-responsive\">";
                echo "<table class=\"table table-striped table-hover\">";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Número de Pedido</th>";
                            echo "<th>Identificador de Usuario</th>";
                            echo "<th>Fecha del Pedido</th>";
                            echo "<th>Detalles del Pedido</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach ($data as $order){
                        echo "<tr>";
                            echo "<td>".$order['ID']."</td>";
                            echo "<td>".$order['ID_Usuarios']."</td>";
                            echo "<td>".$order['Fecha_Pedido']."</td>";
                            echo "<form action = \"index.php?controller=UserController&action=showOrderDetails\" method=\"post\">";
                                echo "<input type=\"hidden\" name=\"id\" value=\"".$order['ID']."\">";
                                echo "<td><button type=\"submit\" class=\"btn btn-dark btn-sm\">Detalles</button></td>";
                            echo "</form>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                echo "</table>";
            echo "</div>";
        echo "</div>";
    echo "</main>";
?>