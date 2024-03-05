<html>

<?php
    if (isset($data)){
        echo "hay errores en el formulario";
    }
?>

    <form action='index.php?controller=UserController&action=addUsers' method='post'>
        Nombre:
        <input type='text' name='nombre' maxlength='50'><br>
        <?php
         if (isset($data['nombre'])){
             echo "Error en el nombre";
         }
        ?>
        Email: 
        <input type='text' name='email' maxlength='50'><br>
        Edad:
        <input type='text' name='edad' maxlength='50'><br>
        <input type='submit' name='insertar' value='enviar'><br>
    </form>

</html>