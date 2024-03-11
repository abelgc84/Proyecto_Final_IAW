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
}
?>