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
     * Método para añadir un producto a la BBDD.
     */
    public function addProduct() {
        $errores = array();

        // Comprobamos que se han recibido los datos del formulario.
        if (empty($_POST['nombre'])) {
            $errores['nombre'] = "El campo nombre no puede estar vacío";
        }
        if ($_POST['categoria'] == 'Elige una categoría...') {
            $errores['categoria'] = 'Debes seleccionar una categoría.';
        }
        if ($_POST['precio'] <= 0) {
            $errores['precio'] = "El campo precio debe ser mayor que 0";
        }
        if (!is_numeric($_POST['precio'])) {
            $errores['precio'] = "El campo precio debe ser un número";
        }
        if (empty($_POST['descripcion'])) {
            $errores['descripcion'] = "El campo descripción no puede estar vacío";
        }
        if (empty($_POST['detalles'])) {
            $errores['detalles'] = "El campo detalles no puede estar vacío";
        }
        if (empty($_POST['imagen'])) {
            $errores['imagen'] = "El campo imagen no puede estar vacío";
        }

        // Si hay errores, los mostramos.
        if (count($errores) > 0) {
            View::show("showProductForm", $errores);
        } else {
            // Si no, añadimos el producto a la BBDD.
            require_once ("models/ProductoDAO.php");
            $pDAO = new ProductoDAO();
            $pDAO->addProduct($_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['descripcion'], $_POST['detalles'], 'assets/'.$_POST['imagen']);
            $pDAO = null;
            $exito = "Producto añadido con éxito";
            View::show("showProductForm", $exito);
        }
    }

    /**
     * Método para eliminar un producto de la BBDD.
     */
    public function deleteProduct(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $pDAO->deleteProduct($_POST['referencia']);
        $pDAO=null;
        $this->getAdminProducts();
    }

    /**
     * Método para añadir un producto al carrito.
     * Utilizaremos la variable de sesión $_SESSION['cart'] para almacenar los productos que se vayan añadiendo.
     */
    public function addToCart(){
        $uri = $_SERVER['REQUEST_URI'];

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
            echo 'window.location.href="'.$uri.'";';
        echo '</script>';
    }

    /**
     * Método para eliminar un producto del carrito.
     */
    public function removeFromCart(){
        $uri = $_SERVER['REQUEST_URI'];
        // Obtenemos el id del producto
        $Id = $_POST['referencia'];
        // Comprobamos si el producto está en el carrito
        if (isset($_SESSION['cart'][$Id])) {
            // Si está, lo eliminamos
            unset($_SESSION['cart'][$Id]);
        }
        // Refrescamos la página
        echo '<script type="text/javascript">';
            echo 'window.location.href="'.$uri.'";';
        echo '</script>';
    }

    /**
     * Método para buscar un producto por su nombre.
     */
    public function searchProduct(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $search = isset($_POST['search']) ? $_POST['search'] : ''; // Si no existe se sustituye por una cadena vacia para mostrar todos los productos. 
        $products=$pDAO->searchProduct($search);
        $pDAO=null;
        View::show("showProduct", $products);
    }

    /**
     * Método para mostrar el formulario de edición de un producto a partir de su referencia.
     */
    public function showProductFormEdit(){
        require_once ("models/ProductoDAO.php");
        $ref=$_POST['referencia'];
        $pDAO=new ProductoDAO();
        $product=$pDAO->getProductById($ref);
        $pDAO=null;
        View::show("showProductFormEdit", $product);
    }

    /**
     * Método para editar un producto de la BBDD.
     */
    public function editProduct(){
        require_once ("models/ProductoDAO.php");
        $pDAO=new ProductoDAO();
        $pDAO->editProduct($_POST['referencia'], $_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['descripcion'], $_POST['detalles'], $_POST['imagen']);
        $pDAO=null;
        $this->getAdminProducts();
    }

    /**
     * Método para actualizar la cantidad de un producto en el carrito.
     */
    public function updateCart(){
        $uri = $_SERVER['REQUEST_URI'];
        // Obtenemos el id del producto
        $Id = $_POST['referencia'];
        // Comprobamos si el producto está en el carrito
        if (isset($_SESSION['cart'][$Id])) {
            // Si está, actualizamos la cantidad
            if (isset($_POST['increase'])) {
                $_SESSION['cart'][$Id]++;
            } else if (isset($_POST['decrease'])) {
                $_SESSION['cart'][$Id]--;
                if ($_SESSION['cart'][$Id] == 0) {
                    unset($_SESSION['cart'][$Id]);
                }
            }
        }
        
        // Refrescamos la página
        echo '<script type="text/javascript">';
            echo 'window.location.href="'.$uri.'";';
        echo '</script>';
    }
}
?>