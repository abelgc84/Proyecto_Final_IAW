<?php

include ('bd/Database.php');

# Clase DAO para la tabla Usuario
class Usuario {

    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
    
    /**
     * getUsuarioById
     * Devuelve un usuario
     * @param  int Identificador del usuario
     * @return object usuario con nombres de propiedades que corresponden a las columnas de la base de datos
     * @return -1 en caso de error
     */
    public function getUsuarioById($iduser){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Usuarios WHERE ID=:iduser");
            $stmt->bindValue(':iduser', $iduser);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
   
    /**
     * addUsuario
     * Registra un usuario en la base de datos
     * @param  string Nombre del usuario, VARCHAR(50)
     * @param  string Contraseña del usuario, VARCHAR(50)
     * @param  string Rol del usuario, ENUM ('Admin', 'User')
     * @return void
     * @return -1 en caso de error
     */
    public function addUsuario($nombre,$password,$rol) {
        try {
            $stmt=$this->con_bd->prepare("INSERT INTO Usuarios (Nombre,Password,Rol) VALUES (:nombre,:password,:rol)");
            $stmt->bindValue(':nombre',$nombre);
            $stmt->bindValue(':password',$password);
            $stmt->bindValue(':rol',$rol);
            $stmt->execute();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
        
    /**
     * comprobarUsuario
     * Devuelve el Rol de un usuario.
     * @param  int Identificador del usuario
     * @return string Rol del usuario, ENUM ('Admin', 'User')
     * @return false en caso de error
     */
    public function comprobarUsuario($id) {
        try {
            $stmt=$this->con_bd->prepare("SELECT Rol FROM Usuarios WHERE ID=:id");
            $stmt->bindValue(':id',$id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ)->Rol;
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return false;
        }
    }

}

?>