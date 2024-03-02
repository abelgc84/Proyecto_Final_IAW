<?php

include ('bd/Database.php');

# Clase DAO para la tabla Productos.
class Producto {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }

    # Retorna un array con todas las filas devueltas por la base de datos.
    # Retorna -1 en caso de error.
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

    # Retorna un objeto con nombres de propiedades que corresponden a las columnas de la base de datos.
    # Retorna -1 en caso de error.
    public function getProductById($ref) {
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM productos WHERE referencia=:ref");
            $stmt->bindValue(':ref', $ref);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }

    # Almacena un producto en la base de datos.
    # Retorna -1 en caso de error.
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

    # Elimina un producto de la base de datos a partir de su Referencia.
    # Retorna -1 en casp de error.
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
}

?>
	