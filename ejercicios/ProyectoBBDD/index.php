<?php

include "./bd/Database.php";

$conBD=Database::connect();

// print_r($conBD);

// try {
//     $stmt=$conBD->prepare('insert into User (nombre, email, edad) values ("Abel", "mail@mail.com", 34)');
//     $stmt->execute();
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// try {
//     // preparar la consulta
//     $stmt=$conBD->prepare('insert into User (nombre, email, edad) values (?,?,?)');
    
//     // Bind (parametrizarla)
//     $nombre='Joaquín';
//     $email='joaquin@gmail';
//     $edad=40;
//     $stmt->bindParam(1, $nombre);
//     $stmt->bindParam(2, $email);
//     $stmt->bindParam(3, $edad);

//     // Ejecución
//     $stmt->execute();
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// try {
//     // preparar la consulta
//     $stmt=$conBD->prepare('insert into User (nombre, email, edad) values (:nombre,:email,:edad)');
    
//     // Bind (parametrizarla)
//     $nombre='Natalia';
//     $email='natalia@gmail';
//     $edad=40;
//     $stmt->bindParam(':nombre', $nombre);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':edad', $edad);

//     // Ejecución
//     $stmt->execute();
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// try {
//     // preparar la consulta
//     $stmt=$conBD->prepare('insert into User (nombre, email, edad) values (:nombre,:email,:edad)');
    
//     // Bind (parametrizarla)
//     $nombre='Noemi';
//     $email='noemi@gmail';
//     $edad=38;
//     // $stmt->bindParam(':nombre', $nombre);
//     // $stmt->bindParam(':email', $email);
//     // $stmt->bindParam(':edad', $edad);

//     $miarray=array(':nombre'=>$nombre, ':email' => $email, ':edad' => $edad);

//     // Ejecución
//     $stmt->execute($miarray);
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// class Usuario
// {
//     public $nombre;
//     public $email;
//     public $edad;
//     public function __construct($nombre, $email, $edad){
//         $this->nombre = $nombre;
//         $this->email = $email;
//         $this->edad = $edad;
//     }
//     // ....Código de la clase....
// }

// $miusuario=new Usuario('Pelayo', 'pelayo@gmail.com', 20);
// $miusuario2=new Usuario('Pablo', 'pablo@mail', 21);


// $stmt=$conBD->prepare('insert into User (nombre, email, edad) values (:nombre,:email,:edad)');

// if($stmt->execute((array) $miusuario)){
//     echo "Se ha creado un nuevo registro!";
// };

// if($stmt->execute((array) $miusuario2)){
//     echo "Se ha creado un nuevo registro!";
// };


/////////////////////
// CONSULTAS SELECT//
/////////////////////
try { 
    // // FETCH_ASSOC
    // $stmt = $conBD->prepare('SELECT * FROM User');
    // // Especificamos el fetch mode antes de llamar a fetch()
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // // Ejecutamos
    // $stmt->execute();
    // // Mostramos los resultados
    // while ($row = $stmt->fetch()){
    //     echo "Nombre: {$row["nombre"]} <br>";
    //     echo "Email: {$row["email"]} <br>";
    //     echo "Edad: {$row["edad"]} <br>";
    //     echo "===================== <br>";
    // }

    $stmt = $conBD->query("SELECT * FROM User");

    $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<table border=2>";
    foreach ($usuarios as $usuario){
        echo "<tr>";
            echo "<td>" . $usuario->nombre . "</td><br>";
            echo "<td>" . $usuario->email . "</td><br>";
            echo "<td>" . $usuario->edad . "</td><br>";
            // echo "======================= <br>";
        echo "</tr>";
    } 
    echo "</table>";

} catch (PDOException $e) {
    echo $e->getMessage();
}


?>