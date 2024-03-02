<?php
// // Iniciar el buffer de almacenamiento
// ob_start();
// // Iniciar sesión
// session_start();
include ("funcionstring.php");
include ("./Objetos/usuario.php");
?>
<html>
<?php
// Array que contendrá errores detectados en formulario
$erroresForm=array();
$conjuntoUsuarios=array();
// $conjuntoUsuarios = $_SESSION['conjuntoUsuarios'] ?? array();

if(isset($_POST["submit"])){
    // Validamos el nombre
    if (empty($_POST['nombre'])){
        $erroresForm['nombre']="El nombre no puede estar vacío";
    }
    // Validamos la contraseña
    if (empty($_POST['password']) || strlen($_POST["password"]) < 5){
        $erroresForm['password']="La contraseña no puede estar vacía y debe tener más de 5 caracteres.";
    }
    // Validamos el campo educación
    if (empty($_POST['educacion'])){
        $erroresForm['educacion']="Debe existir nivel educativo";
    }

    if (empty($_POST['nacionalidad'])){
        $erroresForm['nacionalidad']="Debe seleccionar la nacionalidad";
    }

    if (empty($_POST['idiomas'])){
        $erroresForm['idiomas']="Debe seleccionar al menos un idioma";
    }

    if (empty($_POST['email']) || !filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erroresForm['email']="Debe introducir un email";
    }

    if (empty($_POST['sitioweb']) || !filter_var($_POST["sitioweb"], FILTER_VALIDATE_URL)){
        $erroresForm['sitioweb']="Debe introducir sitio web";
    }
    

    // Comprobamos si no hemos detectado errores en el form
    if (empty($erroresForm)){
        // print_r($_POST);
        $nombre=filtrado($_POST['nombre']);
        $password=filtrado($_POST['password']);
        $educacion=filtrado($_POST['educacion']);
        $nacionalidad=filtrado($_POST['nacionalidad']);
        // $idiomas=filtrado($_POST['idiomas']);
        $email=filtrado($_POST['email']);
        $sitioweb=filtrado($_POST['sitioweb']);

        
        $usuario=new Usuario($_POST['nombre'], $_POST['password'], $_POST['educacion'], $_POST['nacionalidad'], $_POST['idiomas'], $_POST['email'], $_POST['sitioweb']);
        array_push($conjuntoUsuarios, $usuario);
        // $_SESSION['conjuntoUsuarios'] = $conjuntoUsuarios;
    }
    echo "<table border='2'>";
    foreach ($conjuntoUsuarios as $usu){
        echo "<tr>";
            echo "<td>" . $usu->getNombre() . "</td>";
            echo "<td>" . $usu->getPassword() . "</td>";
            echo "<td>" . $usu->getEducacion() . "</td>";
            echo "<td>" . $usu->getNacionalidad() . "</td>";
            $idiomas=$usu->getIdiomas();
            echo "<td>" . implode(', ', $idiomas) . "</td>";
            echo "<td>" . $usu->getEmail() . "</td>";
            echo "<td>" . $usu->getSitioWeb() . "</td>";
        echo "</tr>";
    }
    if (isset($_SESSION['conjuntoUsuarios'])) {
        echo "<table border='2'>";
        foreach ($_SESSION['conjuntoUsuarios'] as $usu) {
            echo "<tr>";
                echo "<td>" . $usu->getNombre() . "</td>";
                echo "<td>" . $usu->getPassword() . "</td>";
                echo "<td>" . $usu->getEducacion() . "</td>";
                echo "<td>" . $usu->getNacionalidad() . "</td>";
                $idiomas=$usu->getIdiomas();
                echo "<td>" . implode(', ', $idiomas) . "</td>";
                echo "<td>" . $usu->getEmail() . "</td>";
                echo "<td>" . $usu->getSitioWeb() . "</td>";
            echo "</tr>";
        }
    }
}





?>

<body>
<h2>Formulario:</h2>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post">
    Nombre:
    <input type="text" name="nombre" maxlength="50" value='<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>'><br>
    <?php
        if (isset($erroresForm['nombre']))
            echo "<p>".$erroresForm['nombre']."<p>";
    ?>
    Contraseña:
    <input type="password" name="password" value='<?php if (isset($_POST['password'])) echo $_POST['password']; ?>'><br>
    <?php
        if (isset($erroresForm['password']))
            echo "<p>".$erroresForm['password']."<p>";
    ?>
    Educacion:
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br>
    <?php
        if (isset($erroresForm['educacion']))
            echo "<p>".$erroresForm['educacion']."<p>";
    ?>
    Nacionalidad:
    <input type="radio" name="nacionalidad" value="hispana" <?php if (isset($_POST['nacionalidad']) && $_POST['nacionalidad']=='hispana') echo 'checked="checked"'?>>Hispana</input>
    <input type="radio" name="nacionalidad" value="otra" <?php if (isset($_POST['nacionalidad']) && $_POST['nacionalidad']=='otra') echo 'checked="checked"'?>>Otra</input><br>
    <?php
        if (isset($erroresForm['nacionalidad']))
            echo "<p>".$erroresForm['nacionalidad']."<p>";
    ?>
    Idiomas:
    <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
    <input type="checkbox" name="idiomas[]" value="inglés" <?php if (isset($_POST['idiomas']) && in_array('inglés', $_POST['idiomas'])) echo 'checked="checked"';?>>Inglés</input>
    <input type="checkbox" name="idiomas[]" value="francés" <?php if (isset($_POST['idiomas']) && in_array('francés', $_POST['idiomas'])) echo 'checked="checked"';?>>Francés</input>
    <input type="checkbox" name="idiomas[]" value="aleman" <?php if (isset($_POST['idiomas']) && in_array('aleman', $_POST['idiomas'])) echo 'checked="checked"';?>>Alemán</input><br>
    <?php
        if (isset($erroresForm['idiomas']))
            echo "<p>".$erroresForm['idiomas']."<p>";
    ?>
    Email:
    <input type="text" name="email" value='<?php if (isset($_POST['email'])) echo $_POST['email'];?>'><br>
    <?php
        if (isset($erroresForm['email']))
            echo "<p>".$erroresForm['email']."<p>";
    ?>
    Sitio Web:
    <input type="text" name="sitioweb" value='<?php if (isset($_POST['sitioweb'])) echo $_POST['sitioweb'];?>'><br>
    <?php
        if (isset($erroresForm['sitioweb']))
            echo "<p>".$erroresForm['sitioweb']."<p>";
    ?>
    <!-- // Botón de enviar -->
    <input type="submit" name="submit" value="Enviar">
</form>



</body>
</html>

