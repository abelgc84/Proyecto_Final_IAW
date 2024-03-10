<?php

/**
 * Vista que muestra la pantalla de login.
 */

# Verificamos si la sesión está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

echo "<main>";
    echo "<div class=\"container-fluid p-5\">";
        echo "<div class=\"row d-flex justify-content-center align-items-center\">";
            echo "<div class=\"col\">";
                echo "<div class=\"card-login mx-auto\">";
                    echo "<div class=\"card\">";
                        echo "<div class=\"card-body\">";
                            echo "<h5 class=\"card-title\">Login</h5>";
                            echo "<form action=\"index.php?controller=UserController&action=login\" method=\"post\">";
                                echo "<div class=\"form-group\">";
                                    echo "<label class=\"form-label mt-4\">Usuario</label>";
                                    echo "<div class=\"form-floating mb-3\">";
                                        echo "<input type=\"text\" class=\"form-control\" id=\"floatingInput\" name=\"usuario\" placeholder=\"Usuario\">";
                                        if (isset($data['usuario'])) {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                                echo $data['usuario'];
                                            echo "</div>";
                                        }
                                        echo "<label for=\"floatingInput\">Usuario</label>";
                                    echo "</div>";
                                    echo "<label class=\"form-label mt-4\">Contraseña</label>";
                                    echo "<div class=\"form-floating\">";
                                        echo "<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\">";
                                        if (isset($data['password'])) {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                                echo $data['password'];
                                            echo "</div>";
                                        }
                                        echo "<label for=\"floatingPassword\">Contraseña</label>";
                                    echo "</div>";
                                echo "</div>";
                                echo "<div class=\"row p-2\">";
                                    echo "<button class=\"btn btn-dark mt-2\" type=\"submit\">Entrar</button>";
                                    echo "<a class=\"btn btn-dark mt-2\" href=\"#\">Unirse</a>"; // VACIO
                                echo "</div>";
                            echo "</form>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</main>";