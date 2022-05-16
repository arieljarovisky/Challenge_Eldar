
<?php
session_start();


require_once('../includes/conexiondb.php');
if (!empty($_POST['name'] && $_POST['pass'])) {



    $sql = "SELECT * FROM users WHERE name = '" . $_POST['name'] . "' and password = '" . $_POST['pass'] . "' ";

    $query = $db->prepare($sql);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_OBJ);



    if (is_object($usuario)) {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $usuario->id;
     
        if ($usuario->type == 1) {
            $_SESSION['rol']=1;
            echo "Logeado con éxito<br>";
            echo $usuario->nombre;
            header('location: ../admin/index.php');
        }else{
            $_SESSION['rol']=0;
            header('location: ../index.php');
        }
    } else {
        echo '<script>alert("Usuario o contraseña incorrectos")
        window.location="../login.php";
        
        </script>';
    }
} else {
    echo '<script>alert("Ingrese usuario y contraseña")
    window.location="../login.php";
    
    </script>';
}
