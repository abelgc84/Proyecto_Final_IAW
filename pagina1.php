<?php
    session_start();
    // Gestionamos sesión con carro de la compra y usuario registrado.
    
    // El usuario ha iniciado sesión
    $_SESSION['nombre'] = 'pepe';
    $_SESSION['rol'] = 2;
    
    $link = '<a href="index.php?controller=userController&action=addTaxi&iduser=' . $article['referencia'] . '">Logout</a>';
    echo $link;

    function addTaxi(){
        if (!isset($_SESSION['taxi'])) {
            $_SESSION['taxi']=array();
    }

    // array_push($_SESSION['taxi'], $_REQUEST['taxi']);

    $_SESSION['taxi'][$_REQUEST['iduser']]=2;
    $this->getAllProducts();
    }



?>

<a href="pagina2.php">Ir a pagina 2</a>