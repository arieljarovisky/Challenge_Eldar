<?php 
include('../../includes/conexiondb.php');

 
    
    $id = $_POST['id'];  
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) ;
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
   
    $sql = "UPDATE `productos` SET  `nombre` = '$nombre', `descripcion` = '$descripcion',  `categoria` = '$categoria', `precio` = '$precio', `stock` = '$stock', `imagen` = '$imagen' WHERE `productos`.`id` = $id;";

    $query = $db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    

    header('location:../index.php');
    

?>
