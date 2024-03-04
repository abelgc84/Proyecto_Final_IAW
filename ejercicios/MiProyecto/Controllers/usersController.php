<?php

include_once ('../Models/UserDAO.php');
include_once ('../views/View.php');

class UserController{
    public function getAllUsers(){
        
        function getAllUsers(){
            $userDAO=new UserDAO();

            // Recupero los usuarios de la base de datos

            $arrayUsuarios=$userDAO->getAllUsers();
            View::show('Views/userview', $arrayUsuarios);
        }
    }
}