<?php

// include ('./models/ProductoDAO.php');


// ### addProduct ###

// $producto = new Producto();

// $nombre = "Teclado inalámbrico";
// $categoria = "teclado";
// $precio = 20.00;
// $descripcion = "diseño original.";
// $detalle = "Colores disponibles: blanco, negro y azul.";
// $imagen = "imagenes/camiseta.jpg";

// $resultado = $producto->addProduct($nombre,$categoria,$precio,$descripcion,$detalle,$imagen);

// if ($resultado === -1) {
//     echo "Se ha producido un error al añadir el producto.";
// } else {
//     echo "El producto se ha añadido correctamente.";   
// }


// ### getAllProducts ###

// $productos = new Producto();

// $productos = $productos->getAllProducts();

// if ($productos === -1) {
//     echo "Se ha producido un error en la base de datos";
// } else {
//     echo "Lista de productos: ";
//     foreach ($productos as $producto) {
//         echo "<br>";
//         echo "Referencia: " . $producto['Referencia'] . "<br>";
//         echo "Nombre: " . $producto['Nombre'] . "<br>";
//         echo "Categoria: " . $producto['Categoría'] . "<br>";
//         echo "Precio: " . $producto['Precio'] . "<br>";
//         echo "Descripción: " . $producto['Descripción'] . "<br>";
//         echo "Detalles: " . $producto['Detalles'] . "<br>";
//         echo "Imagen: " . $producto['Imagen'] . "<br>";
//     }
// }


// ### getProductByID ###

// $producto = new Producto();
// $producto = $producto->getProductById(1);

// if ($producto === -1) {
//     echo "Error al acceder a la base de datos.";
// } else {
//     echo "<br>";
//     echo "Referencia: " . $producto->Referencia . "<br>";
//     echo "Nombre: " . $producto->Nombre . "<br>";
//     echo "Categoria: " . $producto->Categoría . "<br>";
//     echo "Precio: " . $producto->Precio . "<br>";
//     echo "Descripción: " . $producto->Descripción . "<br>";
//     echo "Detalles: " . $producto->Detalles . "<br>";
//     echo "Imagen: " . $producto->Imagen . "<br>";
// }


// ### delProduct ###

// $producto = new Producto();
// $producto = $producto->delProduct(1);

// if ($producto === -1) {
//     echo "Error al acceder a la base de datos.";
// } else {
//     echo "Producto eliminado correctamente";
// }

include ('models/UsuarioDAO.php');

### addUsuario ###

// $usuario = new Usuario();

// $nombre = "Natalia";
// $password = "Natalia1234";
// $rol = "Admin";

// $resultado = $usuario->addUsuario($nombre, $password, $rol);

// if ($resultado === -1) {
//     echo "Error al acceder a la base de datos.";
// } else {
//     echo "Usuario registrado correctamente.";
// }

### getUsuarioById ###

// $usuario = new Usuario();
// $usuario = $usuario->getUsuarioById(2);

// if ($usuario === -1) {
//     echo "Error al acceder a la base de datos.";
// } else {
//     echo "<br>";
//     echo "Nombre: " . $usuario->Nombre . "<br>";
//     echo "Contraseña: " . $usuario->Password . "<br>";
//     echo "Rol: " . $usuario->Rol . "<br>";
// }

### comprobarUsuario ###

$usuario = new Usuario();
$usuario = $usuario->comprobarUsuario(2);

if ($usuario === -1) {
    echo "Error al acceder a la abse de datos.";
} else {
    echo $usuario;
}

?>