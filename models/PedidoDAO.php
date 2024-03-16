<?php

include_once ('bd/Database.php');

# Clase DAO para la tabla Pedidos
class PedidoDAO {
    private $con_bd;

    public function __construct(){
        $this->con_bd=Database::connect();
    }
    
    /**
     * getAllOrders
     * Devuelve todos los pedidos
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getAllOrders() {
        try {
            $stmt=$this->con_bd->prepare("SELECT * FROM Pedidos");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    /**
     * storeOrder
     * Almacena un pedido en la base de datos
     * @param int $idUsuario - ID del usuario
     * @return -1 en caso de error.
     */
    public function storeOrder($idUsuario) {
        try {
            // Almacenar el pedido en la base de datos.
            $fechaActual = date("Y-m-d");
            $stmt = $this->con_bd->prepare("INSERT INTO pedidos (ID_Usuarios, Fecha_Pedido) VALUES (:idUsuario, :fecha)");
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->bindParam(':fecha', $fechaActual);
            $stmt->execute();

            // Obtenemos el ID del pedido que acabamos de almacenar
            $stmt = $this->con_bd->prepare("SELECT * FROM pedidos ORDER BY ID DESC LIMIT 1");
            $stmt->execute();
            $idPedido = $stmt->fetch()['ID'];
            // Almacenamos el carrito en la tabla Detalles_Pedidos.
            foreach ($_SESSION['cart'] as $product => $cantidad) {
                $stmt = $this->con_bd->prepare("INSERT INTO Detalles_Pedido (ID_Pedido, Ref_Producto, Cantidad) VALUES (:idPedido, :refProducto, :cantidad)");
                $stmt->bindParam(':idPedido', $idPedido);
                $stmt->bindParam(':refProducto', $product);
                $stmt->bindParam(':cantidad', $cantidad);
                $stmt->execute();
            }

        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

    /**
     * getOrderByUser
     * Devuelve todos los pedidos realizados por un único usuario
     * @param int $idUsuario - ID del usuario
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getOrderByUser($idUsuario) {
        try {
            $stmt = $this->con_bd->prepare("SELECT * FROM Pedidos WHERE ID_Usuarios = :idUsuario");
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }
    
    /**
     * getOrderDetails
     * Devuelve los detalles de un pedido
     * @param int $idPedido - ID del pedido
     * @return array con todas las filas devueltas por la base de datos
     * @return -1 en caso de error
     */
    public function getOrderDetails($idPedido) {
        try {
            $stmt = $this->con_bd->prepare("SELECT Detalles_Pedido.ID_Pedido, Detalles_Pedido.Ref_Producto, Detalles_Pedido.Cantidad, Productos.Nombre, Productos.Precio, Productos.Imagen, Productos.Categoría FROM Detalles_Pedido INNER JOIN Productos ON Detalles_Pedido.Ref_Producto = Productos.Referencia WHERE Detalles_Pedido.ID_Pedido = :idPedido");
            $stmt->bindParam(':idPedido', $idPedido);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e . "<br>";
            return -1;
        }
    }

}

?>