<?php

class Detalles_Pedido {

    ///////////////// 
    // Propiedades //
    /////////////////

    public $id_pedido;
    public $ref_producto;
    public $cantidad;

    /////////////////
    //// Métodos ////
    /////////////////

    public function __construct($id_pedido, $ref_producto, $cantidad){
        $this->id_pedido=$id_pedido;
        $this->ref_producto=$ref_producto;
        $this->cantidad=$cantidad;
    }

    public function getId_pedido() {
        return $this->id_pedido;
    }

    public function getRef_producto() {
        return $this->ref_producto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }
}

?>