<?php

require('../includes/header.php');

$id=$_GET['id'];

$eliminarproducto = "DELETE FROM `carrito` WHERE `carrito`.`id` = '$id'";

$query2 = $db->prepare($eliminarproducto);
$query2->execute();
$data2 = $query2->fetchAll(PDO::FETCH_OBJ);

header('location:carrito.php');



?>