<?php

include ('bd/Database.php');

# Clase DAO para la tabla Pedidos
class Pedido {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
    
    /**
     * getAllPedidos
     * Devuelve todos los pedidos
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getAllPedidos() {
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Pedidos");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }
    
    /**
     * getPedidoById
     * Devuelve un pedido
     * @param  int Identificador del pedido, INT
     * @return object pedido con nombres de propiedades que corresponden a las columnas de la base de datos
     * @return -1 en caso de error
     */
    public function getPedidoById($idpedido) {
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM pedido WHERE ID=:idpedido");
            $stmt->bindValue(':idpedido', $idpedido);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    public function getProductosByPedido($idpedido) {
        try {

        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    public function addPedido() {
        try {

        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    public function addProductoToPedido($ref) {
        try {

        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }
}

?>