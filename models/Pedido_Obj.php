<?php

class Pedido {

    ///////////////// 
    // Propiedades //
    /////////////////

    public $id;
    public $id_usuarios;
    public $fecha_pedido;

    /////////////////
    //// Métodos ////
    /////////////////

    public function __construct($id, $id_usuarios, $fecha_pedido){
        $this->id=$id;
        $this->id_usuarios=$id_usuarios;
        $this->fecha_pedido=$fecha_pedido;
    }

    public function getId() {
        return $this->id;
    }

    public function getId_usuarios() {
        return $this->id_usuarios;
    }

    public function getFecha_pedido() {
        return $this->fecha_pedido;
    }
}

?>