<?php

session_start();

echo '<script>alert("Ingrese usuario y contraseña")
window.location="index.php";

</script>';
session_destroy();
header('location: index.php');
?>