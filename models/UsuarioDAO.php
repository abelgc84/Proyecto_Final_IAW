<?php

include_once ('bd/Database.php');

# Clase DAO para la tabla Usuario
class UsuarioDAO {
    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
    
    /**
     * getUser
     * Devuelve un usuario si el nombre y la contraseña coinciden
     * @param  string Nombre del usuario
     * @param  string Contraseña del usuario
     * @return object usuario con nombres de propiedades que corresponden a las columnas de la base de datos
     * @return -1 en caso de error
     */
    public function getUser($nombre,$password){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Usuarios WHERE Nombre=:nombre AND Password=:password");
            $stmt->bindValue(':nombre', $nombre);
            $stmt->bindValue(':password', $password);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
    
    /**
     * getUsuarioById
     * Devuelve un usuario
     * @param  int Identificador del usuario
     * @return object usuario con nombres de propiedades que corresponden a las columnas de la base de datos
     * @return -1 en caso de error
     */
    public function getUserById($iduser){
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
    public function addUser($nombre,$password,) {
        try {
            $stmt=$this->con_bd->prepare("INSERT INTO Usuarios (Nombre,Password,Rol) VALUES (:nombre,:password,'User')");
            $stmt->bindValue(':nombre',$nombre);
            $stmt->bindValue(':password',$password);
            $stmt->execute();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }
        
    /**
     * deleteUser
     * Elimina un usuario de la base de datos
     * @param  int Identificador del usuario
     * @return void
     * @return -1 en caso de error
     */
    public function deleteUser($iduser) {
        try {
            $stmt=$this->con_bd->prepare("DELETE FROM Usuarios WHERE ID=:iduser");
            $stmt->bindValue(':iduser',$iduser);
            $stmt->execute();
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }

    /**
     * getAllUsers
     * Devuelve todos los usuarios
     * @return array de objetos usuario con nombres de propiedades que corresponden a las columnas de la base de datos
     * @return -1 en caso de error
     */
    public function getAllUsers(){
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Usuarios");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // echo $e . "<br>";
            return -1;
        }
    }

}

?>