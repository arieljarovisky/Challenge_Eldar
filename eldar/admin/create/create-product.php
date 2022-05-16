<?php

$sql = "SELECT categoria FROM productos";
$query = $db->prepare($sql);
$query->execute();
$datacat = $query->fetchAll(PDO::FETCH_OBJ);

?>



<div class="modal fade" id="modalcrear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="../admin/create/create-action.php" method="POST" enctype="multipart/form-data">

                        <p>Nombre del producto: <input type="text" name="nombre" value-size="40"></p>
                        <p>Precio del producto: <input type="number" name="precio" value-size="40"></p>
                        <p>Categoria del producto: <input type="text" name="categoria" value-size="40"></p>
                        <p>Stock del producto: <input type="number" name="stock" value-size="40"></p>
                        <p>Imagen del producto: <input type="file" accept="image/*" name="imagen"></p>
                        <p>Descripcion: <textarea name="descripcion"></textarea></p>
                        <p><input type="submit"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>