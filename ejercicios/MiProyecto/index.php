<?php

include ('models/UserDAO.php');

$userDAO=new UserDAO();

$user=$userDAO->getAllUsers();

if ($user==-1)
    echo "Error en el acceso a la BBDD";
else
    echo "mail del usuario cuyo id es 3. ".$userDAO->getMailByIdUser(4);

?>