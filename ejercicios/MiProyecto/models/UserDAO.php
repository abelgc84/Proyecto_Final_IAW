<?php

include ('../Database/Database.php');

# Clase DAO que ataca la tabla User
class UserDAO {
    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }

    # Retorna un array con todas las tuplas de la tabla User
    # Retorna -1 en caso de error
    public function getAllUsers() {
        try{
            $stmt=$this->con_bd->prepare("Select * from User");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return -1;
        }
    }

    # Retorna el email de los usuarios mayores de 30 años
    public function getUserMas30(){

    }

    # Retorna el email de un determinado usuario. Devuelve un string
    # Retorna -1 en caso de error.
    public function getMailByIdUser($idUser){
        try{
            $stmt=$this->con_bd->prepare("Select email from User where id=:user");
            
            $stmt->bindValue(':user', $idUser);
            $stmt->execute();

            // $user=$stmt->fetch(PDO::FETCH_OBJ);
            // return $user->email;

            return $stmt->fetch(PDO::FETCH_OBJ)->email;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public function addUser($nomUser, $edadUser, $mailUser){

    }

}

?>