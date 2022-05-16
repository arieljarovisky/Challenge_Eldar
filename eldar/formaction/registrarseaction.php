<?php 


require_once('../includes/conexiondb.php');



    $nombre=$_POST['nombre'];
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $direccion=$_POST['direccion'];
    $type=$_POST['type'];


    $sql = "INSERT INTO `users`(`id`, `name`, `username`, `password`, `direccion`,`type`) VALUES ('null','$nombre','$username','$password','$direccion', $type)";

    $query = $db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    
   
    header('location: ../index.php');

