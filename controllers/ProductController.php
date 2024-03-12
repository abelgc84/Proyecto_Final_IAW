<?php
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include_once ("views/View.php");
class ProductController {

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     */
    public function getAllProducts (){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();                // Instanciamos la clase DAO
        $products=$pDAO->getAllProducts();      // Obtenemos todos los productos de la BBDD
        $pDAO=null;                             // Liberamos la memoria
        View::show("showProduct", $products);   // Mostramos los productos
    }

    /**
     * Método que obtiene todos los productos de la BBDD de la categoría teclado y los muestra a través de la vista showKeyboard.
     */
    public function getMouse(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getMouse();
        $pDAO=null;
        View::show("showMouse", $products);
    }

    /**
     * Método que obtiene todos los productos de la BBDD de la categoría ratón y los muestra a través de la vista showMouse.
     */
    public function getKeyboard(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getKeyboard();
        $pDAO=null;
        View::show("showKeyboard", $products);
    }

    /**
     * Método que obtiene todos los productos de la BBDD de la categoría auriculares y los muestra a través de la vista showHeadPhones.
     */
    public function getHeadPhones(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getHeadPhones();
        $pDAO=null;
        View::show("showHeadPhones", $products);
    }

    /**
     * Método para mostrar los productos en el panel de administración.
     */
    public function getAdminProducts(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showAdminPanel", $products);
    }

    /**
     * Método para añadir un producto al carrito.
     * Utilizaremos la variable de sesión $_SESSION['cart'] para almacenar los productos que se vayan añadiendo.
     */
    public function addToCart(){

        // Comprobamos si la variable de sesión $_SESSION['cart'] existe
        if (!isset($_SESSION['cart'])) {
            // Si no existe, la creamos como un array vacío
            $_SESSION['cart'] = array();
        }
        
        // Obtenemos el id del producto
        $Id = $_POST['referencia'];
 
        
        // Comprobamos si el producto ya está en el carrito
        if (!isset($_SESSION['cart'][$Id])) {
            // Si no está, lo añadimos con cantidad 1
            $_SESSION['cart'][$Id] = 1;
        } else {
            // Si ya está, incrementamos la cantidad
            $_SESSION['cart'][$Id]++;
        }
        // Refrescamos la página
        echo '<script type="text/javascript">';
            echo 'window.location.href="' . $_SERVER['PHP_SELF'] . '";';
        echo '</script>';
    }

}
?>