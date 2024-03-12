<?php
/**
 *  Controlador de Usuarios. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a usuarios de la tienda.
 */
include_once ("views/View.php");

class UserController {

    /**
     * Método para mostrar la página de login.
     */
    public function showLogin(){
        View::show("showLogin");
    }

    /**
     * Método para mostrar el panel de administración.
     */
    public function showAdmin(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showAdminPanel", $products);
    }

    /**
     * Método para logearse en la aplicación.
     */
    public function login(){
        require_once ("models/UsuarioDAO.php");
        // Comprobamos que se han recibido los datos del formulario
        $errores=array();
        if (empty($_POST['usuario'])) {
            $errores['usuario']="El campo usuario no puede estar vacío";
        }
        if (empty($_POST['password'])) {
            $errores['password']="El campo contraseña no puede estar vacío";
        }

        // Si hay errores, los mostramos
        if (count($errores)>0) {
            View::show("showLogin", $errores);
        }
        // Si no, comprobamos si el usuario y la contraseña son correctos
        else {
            //Comprobamos si el usuario y la contraseña son correctos
            $userDAO=new UsuarioDAO();
            $user=$userDAO->getUser($_POST['usuario'], $_POST['password']);
            if ($user) {
                // Si el usuario y la contraseña son correctos, guardamos el usuario en la sesión
                $_SESSION['user']=$user;
                // Mostramos la página de inicio
                echo '<script type="text/javascript">';
                    echo 'window.location.href="index.php";';
                echo '</script>';
            }
            else {
                // Si el usuario y la contraseña no son correctos, mostramos un mensaje de error
                $errores[]="Usuario o contraseña incorrectos";
                View::show("showLogin", $errores);
            }
        }
    }

    /**
     * Método para cerrar la sesión.
     */
    public function logout(){
        // Cerramos la sesión
        session_destroy();
        // Mostramos la página de inicio
        echo '<script type="text/javascript">';
            echo 'window.location.href="index.php";';
        echo '</script>';
    }
    
    /**
     * Método para mostrar el carrito de la compra.
     */
    public function showCart(){
        require_once ("models/ProductoDAO.php");
        // Comprobamos si la variable de sesión $_SESSION['cart'] existe
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        
        $cart=$_SESSION['cart'];
        $pDAO=new ProductoDAO();
        $products=array();

        // Guardar en un array los productos del carrito
        foreach ($cart as $product_id => $cantidad) {
            $product = $pDAO->getProductById($product_id);
            // Añadir el producto al array, el producto se guarda en la clave 'product' y la cantidad en la clave 'cantidad'
            array_push($products, array('product' => $product, 'cantidad' => $cantidad));
        }
        $pDAO=null;

        View::show("showCart", $products);
    }
}

?>