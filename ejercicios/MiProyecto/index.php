<?php

// include ('models/UserDAO.php');

// $userDAO=new UserDAO();

// $user=$userDAO->getAllUsers();

// if ($user==-1)
//     echo "Error en el acceso a la BBDD";
// else
//     echo "mail del usuario cuyo id es 3. ".$userDAO->getMailByIdUser(4);

// include_once ('controllers/usersController.php');

// $usercontr=new UserController();
// $usercontr->getAllUsers();

// return $usercontr;




include_once ("Controllers/usersController.php");

//Punto de entrada a la aplicación. Si no se recibe parámetro action y controller en la url
//se muestra la página de inicio (texto HTML).
//En caso de que si se reciba, se instancia el controlador y se invoca la acción indicada.

if (isset($_REQUEST['action']) && isset($_REQUEST['controller']) ){
    $act=$_REQUEST['action'];
    $cont=$_REQUEST['controller'];

    //Instanciación del controlador e invocación del método
    $controller=new $cont();
    $controller->$act();

}
else
    //Página de entrada
//     echo '<div class="container mt-3">
//     <h1>Implantación de Aplicaciones Web</h1>
//     <div class="d-flex justify-content-center"><img src="assets/albarregas.png" width="200" height="100"></div> 
//     <div class="d-flex justify-content-center"><p>Desarrollo de aplicaciones web con PHP utilizando la arquitectura Modelo Vista Controlador (MVC)</p></div>
    
//   </div>';

  echo "Bienvenido";

?>

