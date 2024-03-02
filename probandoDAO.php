<?php

include ('./models/ProductoDAO.php');


// ### addProduct ###
// ### FUNCIONA ###

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
// ### FUNCIONA ###

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
// ### FUNCIONA ###

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
// ### FUNCIONA ###

// $producto = new Producto();
// $producto = $producto->delProduct(1);

// if ($producto === -1) {
//     echo "Error al acceder a la base de datos.";
// } else {
//     echo "Producto eliminado correctamente";
// }

?>