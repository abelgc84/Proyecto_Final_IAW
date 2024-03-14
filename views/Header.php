<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Proyecto Final IAW</title>
        <link rel="icon" type="image/x-icon" href="assets/x-icon.png">
        <meta charset="utf-8">
        <meta name="author" content="Abel Gijón Cordero">
        <meta name="description" content="Proyecto Final Implantación de Aplicaciones Web">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilo/bootstrap.css">
        <script src="estilo/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="estilo/estilo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    <body>
        <!-- ======================================= -->
        <!-- ============== Cabecera =============== -->
        <!-- ======================================= -->
        <header>
            <!-- BARRA DE NAVEGACIÓN -->
            <nav class="navbar navbar-expand-sm bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="assets/x-icon.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor02">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item">
                            <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Todas las categorías</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?controller=ProductController&action=getKeyboard">Teclados</a>
                                    <a class="dropdown-item" href="index.php?controller=ProductController&action=getMouse">Ratones</a>
                                    <a class="dropdown-item" href="index.php?controller=ProductController&action=getHeadPhones">Auriculares</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index.php?controller=UserController&action=showWorkInProgress">Outlet</a>
                                </div>
                            </li>
                            <?php
                            if (isset($_SESSION['user']) && $_SESSION['user']->Rol =='Admin') {
                                echo "<li class=\"nav-item dropdown\">";
                                    echo "<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Administración</a>";
                                    echo "<div class=\"dropdown-menu\">";
                                        echo "<a class=\"dropdown-item\" href=\"index.php?controller=UserController&action=showAdmin\">Panel de Productos</a>";
                                        echo "<a class=\"dropdown-item\" href=\"index.php?controller=UserController&action=showProductForm\">Formulario de Productos</a>";
                                    echo "</div>";
                                echo "</li>";
                            } else if (isset($_SESSION['user']) && $_SESSION['user']->Rol == 'User') {
                                echo "<li class=\"nav-item dropdown\">";
                                    echo "<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Su Perfil</a>";
                                    echo "<div class=\"dropdown-menu\">";
                                        echo "<a class=\"dropdown-item\" href=\"index.php?controller=UserController&action=showWorkInProgress\">Datos de Usuario</a>"; // VACIO
                                        echo "<a class=\"dropdown-item\" href=\"index.php?controller=UserController&action=showWorkInProgress\">Pedidos Realizados</a>"; // VACIO
                                    echo "</div>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                         <!-- Botón de debug para poder hacer logout (Destruir sesión) -->
                        <?php
                            echo "<a class=\"btn btn-secondary my-2 my-sm-0 ms-3\" href=\"index.php?controller=UserController&action=logout\" type=\"submit\">Debug Logout</a>";
                        
                        echo "<form class=\"d-flex\" action=\"index.php?controller=ProductController&action=searchProduct\" method=\"post\">";
                            echo "<input type=\"text\" class=\"form-control me-sm-2\" name=\"search\" placeholder=\"Buscar\">";
                            echo "<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Buscar</button>";
                        echo "</form>";
                        ?>
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo "<a class=\"btn btn-secondary my-2 my-sm-0 ms-3\" href=\"index.php?controller=UserController&action=showlogin\" type=\"submit\">Login</a>";
                        } else {
                            echo "<a class=\"btn btn-secondary my-2 my-sm-0 ms-3\" href=\"index.php?controller=UserController&action=logout\" type=\"submit\">Logout</a>";
                        }
                        ?>
                        <div class="cart-menu" style="position: relative;">
                            <a href="index.php?controller=UserController&action=showCart">
                            <img src="assets/carrito.png">
                            <?php
                                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                    echo "<span class='badge bg-success text-white' style='position: absolute; bottom: 0; right: 0;'>" . count($_SESSION['cart']) . "</span>";
                                }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>