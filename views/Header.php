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
                                    <a class="dropdown-item" href="#">Outlet</a>
                                </div>
                            </li>
                            <?php
                            if (isset($_SESSION['user'])=='admin') {
                                echo "<li class=\"nav-item\">";
                                    echo "<a class=\"nav-link\" href=\"html/admin.html\">Administración</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-sm-2" type="search" placeholder="Buscar">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <a class="btn btn-secondary my-2 my-sm-0 ms-3" href="index.php?controller=UserController&action=showlogin" type="submit">Login</a>
                        <div class="cart-menu">
                            <a href="html/carrito.html"><img src="assets/carrito.png"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>