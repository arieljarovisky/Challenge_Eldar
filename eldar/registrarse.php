<?php require('includes/conexiondb.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="container formulario">
        <form action="formaction/registrarseaction.php" method="POST" >
            <h3>Registrarse</h3>
            <input type="hidden" name="id" value="1">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1"  required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Nombre de Usuario</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail2" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail3" class="form-label">Direccion de entrega</label>
                <input type="text" name="direccion" class="form-control" id="exampleInputEmail3" required >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <input type="hidden" name="type" value="0">
            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>


</body>

</html>