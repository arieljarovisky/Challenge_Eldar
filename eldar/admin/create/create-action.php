<?php 
include('../../includes/conexiondb.php');

 
    
    $id = $_POST['id'];  
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) ;
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
   

    
    $sql = "INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `categoria`, `precio`, `stock`, `imagen`) VALUES ('$id','$nombre','$descripcion','$categoria','$precio','$stock','$imagen')";

    $query = $db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    

    header('location:../index.php');
    

?>
