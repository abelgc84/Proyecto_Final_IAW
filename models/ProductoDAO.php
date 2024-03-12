<?php

include_once ('bd/Database.php');

# Clase DAO para la tabla Productos.
class ProductoDAO {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
   
    /**
     * getAllProducts
     * Devuelve todos los productos
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getAllProducts(){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM productos");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }

    /**
     * getProductById
     * Devuelve un producto
     * @param  int Referencia del producto, INT
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getProductById($ref) {
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Productos WHERE Referencia=:ref");
            $stmt->bindValue(':ref', $ref);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }
   
    /**
     * addProduct
     * Registra un producto en la base de datos
     * @param  string Nombre del producto, VARCHAR(50)
     * @param  string Categoría del producto, ENUM ('teclado', 'raton', 'auriculares')
     * @param  float Precio del producto, FLOAT
     * @param  string Descripción del producto, TINYTEXT
     * @param  string Detalles del producto, TEXT
     * @param  string Imagen del producto, VARCHAR(100)
     * @return void
     * @return -1 en caso de error
     */
    public function addProduct($nombre,$categoria,$precio,$descripcion,$detalles,$imagen) {
        try {
            $stmt=$this->con_bd->prepare("INSERT INTO productos (nombre,categoría,precio,descripción,detalles,imagen) VALUES (:nombre,:categoria,:precio,:descripcion,:detalles,:imagen)");
            $stmt->bindValue(':nombre', $nombre);
            $stmt->bindValue(':categoria', $categoria);
            $stmt->bindValue(':precio', $precio);
            $stmt->bindValue(':descripcion', $descripcion);
            $stmt->bindValue(':detalles', $detalles);
            $stmt->bindValue(':imagen', $imagen);
            $stmt->execute();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
  
    /**
     * delProduct
     * Elimina un producto de la base de datos
     * @param  int Referencia del producto, INT
     * @return void
     * @return -1 en caso de error
     */
    public function delProduct($ref) {
        try {
            $stmt=$this->con_bd->prepare("DELETE FROM productos WHERE referencia=:ref");
            $stmt->bindValue(':ref', $ref);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    /**
     * getMouse
     * Devuelve todos los productos de la categoría ratón
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getMouse(){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM productos WHERE categoría='raton'");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
    
    /**
     * getKeyboard
     * Devuelve todos los productos de la categoría teclado
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getKeyboard(){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM productos WHERE categoría='teclado'");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }

    /**
     * getHeadPhones
     * Devuelve todos los productos de la categoría auriculares
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getHeadPhones(){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM productos WHERE categoría='auricular'");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
    
}

?>
	