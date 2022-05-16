<?php 

require('includes/header.php');
$hoy = date("Y-m-d");
$fechaFormulario = $_POST['fecha'];
$id=$_POST['id'];
if ($hoy <= $fechaFormulario) {
$sql="DELETE FROM `carrito` WHERE `carrito`.`id` = '$id';";
$query2 = $db->prepare($sql);
$query2->execute();
$data2 = $query2->fetchAll(PDO::FETCH_OBJ);

echo '<script language="javascript">alert("Compra Finalizada");
window.location.href="carrito/carrito.php";</script>';

}else {
    echo '<script language="javascript">alert("tarjeta de credito invalida");
    window.location.href="../carrito/carrito.php";</script>';
}
