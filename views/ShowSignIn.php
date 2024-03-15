<?php
    /**
     * Vista que muestra el formulario de registro.
     */
    echo "<main>";
        echo "<div class=\"container-fluid p-5\">";
            echo "<div class=\"row d-flex justify-content-center align-items-center\">";
                echo "<div class=\"col\">";
                    echo "<div class=\"card-login mx-auto\">";
                        echo "<div class=\"card\">";
                            echo "<div class=\"card-body\">";
                                echo "<h5 class=\"card-title\">Registro</h5>";
                                if (isset($data['nocoincide'])) {
                                    echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                        echo $data['nocoincide'];
                                    echo "</div>";
                                }
                                echo "<form action=\"index.php?controller=UserController&action=addUser\" method=\"post\">";
                                    echo "<div class=\"form-group\">";
                                        echo "<label class=\"form-label mt-4\">Usuario</label>";
                                        echo "<div class=\"form-floating\">";
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
                                            echo "<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" name=\"password\" placeholder=\"Contraseña\" autocomplete=\"off\">";
                                            if (isset($data['password'])) {
                                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                                    echo $data['password'];
                                                echo "</div>";
                                            }
                                            echo "<label for=\"floatingPassword\">Contraseña</label>";
                                        echo "</div>";
                                        echo "<label class=\"form-label mt-4\">Confirmar Contraseña</label>";
                                        echo "<div class=\"form-floating\">";
                                            echo "<input type=\"password\" class=\"form-control\" id=\"floatingConfirmPassword\" name=\"confirmpassword\" placeholder=\"Confirmar Contraseña\" autocomplete=\"off\">";
                                            if (isset($data['confirmpassword'])) {
                                                echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                                    echo $data['confirmpassword'];
                                                echo "</div>";
                                            }
                                            echo "<label for=\"floatingConfirmPassword\">Confirmar Contraseña</label>";
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<div class=\"row p-2\">";
                                        echo "<button class=\"btn btn-dark mt-2\" type=\"submit\">Registrarse</button>";
                                    echo "</div>";
                                echo "</form>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</main>";
?>