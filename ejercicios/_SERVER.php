<?php
    echo "<b>La dirección IP del servidor donde se está ejecutando el script:</b> "; echo $_SERVER['SERVER_ADDR']; echo "<br>";
    echo "<b>El nombre del host del servidor donde se está ejecutando el script:</b> "; echo $_SERVER['SERVER_NAME']; echo "<br>";
    echo "<b>El software que está utilizando el servidor para servir el script:</b> "; echo $_SERVER['SERVER_SOFTWARE']; echo "<br>";
    echo "<b>Información sobre el agente de usuario (User Agent) desde el que se está solicitando el script:</b> "; echo $_SERVER['HTTP_USER_AGENT']; echo "<br>";
    echo "<b>La dirección IP del cliente que está solicitando el script:</b> "; echo $_SERVER['REMOTE_ADDR']; echo "<br>";
?>