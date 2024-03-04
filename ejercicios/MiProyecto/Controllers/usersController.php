<?php

// include_once ('ejercicios/MiProyecto/Models/UserDAO.php');
include_once ('Models/UserDAO.php');
// include_once ('ejercicios/MiProyecto/Views/View.php');
include_once ('Views/View.php');

class UserController{

    function getAllUsers(){
        $userDAO=new UserDAO();

        // Recupero los usuarios de la base de datos

        $arrayUsuarios=$userDAO->getAllUsers();
        View::show('Views/userview', $arrayUsuarios);
    }

    function addUsers(){
        // Validación de los datos del formulario

    }
}