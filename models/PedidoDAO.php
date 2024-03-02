<?php

include ('bd/Database.php');

# Clase DAO para la tabla Pedidos
class Pedido {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }

    public function getAllPedidos() {

    }

    public function getPedidoById($idpedido) {

    }

    public function getProductosByPedido() {

    }

    public function addPedido() {

    }

    public function addProductoToPedido() {
        
    }
}

?>