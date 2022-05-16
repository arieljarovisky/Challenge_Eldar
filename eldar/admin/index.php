<?php





require('includes/header.php');


$sql = "SELECT * FROM productos";

$query = $db->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_OBJ);

?>

<section>
    <div class="container">
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">imagen</th>
                    <th scope="col">Accion</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($data as $result) { ?>
                    <tr>
                        <th scope="row"> <?php echo $result->id; ?> </th>
                        <td><?php echo $result->nombre; ?></td>
                        <td><?php echo $result->precio; ?></td>
                        <td><?php echo $result->categoria; ?></td>
                        <td><?php echo $result->stock; ?></td>
                        <td><img width="80px" height="80px" src="data:image/jpg; base64, <?php echo base64_encode($result->imagen); ?>" alt=""></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaleditar<?php echo $result->id; ?>">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger">
                              <a style="color: white; text-decoration: none;" href="delete/delete-action.php?id=<?php echo $result->id; ?>">  Eliminar </a>
                            </button>
                        </td>
                    </tr>
                <?php
            include('edit/edit-product.php');
            } ?>
            </tbody>

        </table>
    </div>
</section>



<?php
include('create/create-product.php');


require('includes/footer.php');
?>