<?php
/**
 *  Controlador de Usuarios. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a usuarios de la tienda.
 */
include ("views/View.php");

class UserController {

    /**
     * Método que obtiene todos los usuarios de la BBDD y los muestra a través de la vista showUsers.
     */
    public function getAllUsers (){
        require_once ("models/UsuarioDAO.php");
        $uDAO=new UsuarioDAO();                // Instanciamos la clase DAO
        $users=$uDAO->getAllUsers();      // Obtenemos todos los usuarios de la BBDD
        $uDAO=null;                             // Liberamos la memoria
        View::show("showUsers", $users);   // Mostramos los usuarios
    }

    /**
     * Método que obtiene un usuario de la BBDD y lo muestra a través de la vista showUser.
     */
    public function getUserById($id){
        require_once ("models/UsuarioDAO.php");
        $uDAO=new UsuarioDAO();
        $user=$uDAO->getUserById($id);
        $uDAO=null;
        View::show("showUser", $user);
    }

    /**
     * Método que añade un usuario a la BBDD.
     */
    public function addUser($name, $email, $password){
        require_once ("models/UsuarioDAO.php");
        $uDAO=new UsuarioDAO();
        $uDAO->addUser($name, $email, $password);
        $uDAO=null;
    }

    /**
     * Método que elimina un usuario de la BBDD.
     */
    public function deleteUser($id){
        require_once ("models/UsuarioDAO.php");
        $uDAO=new UsuarioDAO();
        $uDAO->deleteUser($id);
        $uDAO=null;
    }
}

?>