<?php

class Usuario {
    
    public $nombre;
    public $password;
    public $educacion;
    public $nacionalidad;
    public $idiomas;
    public $email;
    public $sitioWeb;

    public function __construct($nombre, $password, $educacion, $nacionalidad, $idiomas, $email, $sitioWeb){
        $this->nombre=$nombre;
        $this->password=$password;
        $this->educacion=$educacion;
        $this->nacionalidad=$nacionalidad;
        $this->idiomas=$idiomas;
        $this->email=$email;
        $this->sitioWeb=$sitioWeb;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEducacion(){
        return $this->educacion;
    }

    public function getNacionalidad(){
        return $this->nacionalidad;
    }

    public function getIdiomas(){
        return $this->idiomas;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSitioWeb(){
        return $this->sitioWeb;
    }
}

?>