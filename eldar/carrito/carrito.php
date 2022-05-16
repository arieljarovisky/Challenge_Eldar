<?php

require('../includes/header.php');

if (!isset($_SESSION['auth'])) {

    header('Location: ../index.php');
} else {

    /*  <--------------------------------------------> */


    $vercarrito = "SELECT * FROM carrito";

    $query2 = $db->prepare($vercarrito);
    $query2->execute();
    $data2 = $query2->fetchAll(PDO::FETCH_OBJ);


    /*  <--------------------------------------------> */




?>

    <html>
    

    
    <section id="productos">
        <div class="container text-center mt-5 mb-5">

            <h1>Tu Carrito</h1>

        </div>
        <div class="container text-center">
            <table class="table">

                <thead>
                    <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>

                        <th scope="col">Accion</th>

                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data2 as $result2) { ?>
                        <tr>

                            <td><?php echo $result2->nombre; ?></td>
                            <td><?php echo $result2->precio; ?></td>


                            <td>

                                <button type="button" class="btn btn-danger">
                                    <a style="color: white; text-decoration: none;" href="delete-carrito.php?id=<?php echo $result2->id; ?>"> Eliminar </a>
                                </button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pagar<?php echo $result2->id; ?>">
                                pagar
                             </button>

                            </td>
                        </tr>
                    <?php
                        include('../pagar.php');
                    }
                    ?>
                </tbody>
        </div>
        </div>
    </section>





    </html>


<?php

}

?>
<script src="../js/tarjetadecredito.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>