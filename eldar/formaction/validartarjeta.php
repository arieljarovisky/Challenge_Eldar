<?php

$hoy = date("Y-m-d");
$fechaFormulario = $_POST['fecha'];

// Si la fecha es de apartir de hoy => true 
if ($hoy <= $fechaFormulario) {

    header('location: ../comprafinalizada.php');
} else {
    echo '<script language="javascript">alert("tarjeta de credito invalida");
    window.location.href="../carrito/carrito.php";</script>';
}
