<?php

class Usuario {

    ///////////////// 
    // Propiedades //
    /////////////////
    
    public $id;
    public $nombre;
    public $password;
    public $rol;

    /////////////////
    //// Métodos ////
    /////////////////

    public function __construct($id, $nombre, $password, $rol){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->password=$password;
        $this->rol=$rol;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }

}

?>