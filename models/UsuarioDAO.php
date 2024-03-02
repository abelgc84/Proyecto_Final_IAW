<?php

include ('bd/Database.php');

# Clase DAO para la tabla Usuario
class Usuario {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
    
    # Retorna un objeto con nombres de propiedades que corresponden a las columnas de la base de datos.
    # Retorna -1 en caso de error.
    public function getUsuarioById($iduser){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Usuarios WHERE ID=:iduser");
            $stmt->bindValue(':iduser', $iduser);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    # Registra un usuario en la base de datos.
    # Retorna -1 en caso de error.
    public function addUsuario($nombre,$password,$rol) {
        try {
            $stmt=$this->con_bd->prepare("INSERT INTO Usuarios (Nombre,Password,Rol) VALUES (:nombre,:password,:rol)");
            $stmt->bindValue(':nombre',$nombre);
            $stmt->bindValue(':password',$password);
            $stmt->bindValue(':rol',$rol);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    public function comprobarUsuario() {

    }

}

?>