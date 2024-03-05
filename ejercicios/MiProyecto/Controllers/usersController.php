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
        View::show('Views/usersview', $arrayUsuarios);
    }

    function addUsers(){
        // Validación de los datos del formulario

        if(isset($_POST["submit"])){
            // Validamos el nombre
            if (strlen($_POST['nombre'])==0){
                $erroresForm['nombre']="El nombre no puede estar vacío";
            }

            // Valicamos la contraseña
        
            if (empty($_POST['email']) || !filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $erroresForm['email']="Debe introducir un email";
            }
        
            // Validamos la edad
            if (strlen($_POST['edad'])==0){
                $erroresForm['edad']="El nombre no puede estar vacío";
            }

            
        
            // Comprobamos si no hemos detectado errores en el form
            if (empty($erroresForm)){
                // print_r($_POST);
                $nombre=filtrado($_POST['nombre']);
                $email=filtrado($_POST['email']);
                $edad=filtrado($_POST['edad']);
                    
                $userDAO=new UserDAO();
                $userDAO->addUser($nombre,$email,$edad);


            }


    }
}