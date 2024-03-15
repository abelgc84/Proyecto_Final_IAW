<?php
/**
 *  Controlador de Usuarios. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a usuarios de la tienda.
 */
include_once ("views/View.php");

class UserController {

    /**
     * Método para dar de alta un usuario en la base de datos.
     */
    public function addUser(){
        require_once ("models/UsuarioDAO.php");
        $errores=array();
        $info=array();
        // Comprobamos que se han recibido los datos del formulario.
        if (empty($_POST['usuario'])) {
            $errores['usuario']="El campo usuario no puede estar vacío";
        }
        if (empty($_POST['password'])) {
            $errores['password']="El campo contraseña no puede estar vacío";
        }
        if (empty($_POST['confirmpassword'])) {
            $errores['confirmpassword']="El campo confirmar contraseña no puede estar vacío";
        }
        // Comprobamos que las contraseñas coinciden.
        if ($_POST['password']!=$_POST['confirmpassword']) {
            $errores['nocoincide']="Las contraseñas no coinciden";
        }

        // Si hay errores, los mostramos.
        if (count($errores)>0) {
            View::show("showSignIn", $errores);
        }
        // Si no, añadimos el usuario a la base de datos.
        else {
            $userDAO=new UsuarioDAO();
            $userDAO->addUser($_POST['usuario'], $_POST['password']);
            $userDAO=null;
            $info['registrado']="Usuario " . $_POST['usuario'] . " registrado correctamente. Ya puedes iniciar sesión.";
            View::show("showLogin", $info);
        }
    }

    /**
     * Método para mostrar la página de un producto
     */
    public function showOneProduct() {
        $ref=$_GET['ref'];
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $product=$pDAO->getProductById($ref);
        $pDAO=null;
        View::show("showOneProduct", $product);
    }

    /**
     * Método para mostrar WorkInProgress.
     */
    public function showWorkInProgress(){
        View::show("showWorkInProgress");
    }

    /**
     * Método para mostrar la página de login.
     */
    public function showLogin(){
        View::show("showLogin");
    }

    /**
     * Método para mostrar la página de registro.
     */
    public function showSignIn(){
        View::show("showSignIn");
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
     * Método para mostrar el formulario de productos
     */
    public function showProductForm(){
        View::show("showProductForm");
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
                $errores['noencontrado']="Usuario o contraseña incorrectos";
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