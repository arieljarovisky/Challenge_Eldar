<?php 
include('../../includes/conexiondb.php');

 
    
    $id = $_GET['id'];  
    
   
    $sql = "DELETE FROM `productos` WHERE `productos`.`id` = '$id'";

    $query = $db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    

    header('location:../index.php');
    

?>