<?php  
require('../includes/header.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $precio = $_GET['precio'];

        $sql = "INSERT INTO `carrito`(`id`, `nombre`, `precio`) VALUES ('$id','$nombre','$precio')";

        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);

        header('location:carrito.php');
    }