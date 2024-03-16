<?php
    /**
     * Vista que muestra todos los usuarios de la BBDD.
     */

    # Verificamos que el usuario sea administrador
    if (isset($_SESSION['user']) && $_SESSION['user']->Rol == "Admin") {
        echo "<main>";
            echo "<div class=\"container-fluid p-5\">";
                echo "<h1>Administración de Productos</h1>";
                echo "<div class=\"table-responsive\">";
                    echo "<table class=\"table table-striped table-hover\">";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Password</th>";
                                echo "<th>ROL</th>";
                                echo "<th>Editar</th>";
                                echo "<th>Eliminar</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($data as $user){
                            echo "<tr>";
                                echo "<td>".$user['ID']."</td>";
                                echo "<td>".$user['Nombre']."</td>";
                                echo "<td><input type=\"password\" value=\"".$user['Password']."\" readonly style=\"border: none; background: transparent;\"></td>";
                                echo "<td>".$user['Rol']."</td>";
                                if ($user['Rol'] != "Admin") {
                                    echo "<form action = \"index.php?controller=UserController&action=EditUser\" method=\"post\">";
                                        echo "<input type=\"hidden\" name=\"id\" value=\"".$user['ID']."\">";
                                        echo "<td><button type=\"submit\" class=\"btn btn-dark btn-sm\">Promover</button></td>";
                                    echo "</form>";
                                } else {
                                    echo "<td></td>";
                                }
                                if ($user['Rol'] != "Admin") {
                                    echo "<form action=\"index.php?controller=UserController&action=deleteUser\" method=\"post\">";
                                        echo "<input type=\"hidden\" name=\"id\" value=\"".$user['ID']."\">";
                                        echo "<td><button type=\"submit\" class=\"btn btn-danger btn-sm\">Eliminar</button></td>";
                                    echo "</form>";
                                } else {
                                    echo "<td></td>";
                                }
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