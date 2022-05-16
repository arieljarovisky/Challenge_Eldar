



<div class="modal fade" id="modaleditar<?php echo $result->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="../admin/edit/edit-action.php" method="POST" enctype="multipart/form-data">
                        <p><input type="hidden" name="id" value="<?php echo $result->id; ?>"></p>
                        <p>Nombre del producto: <input type="text" name="nombre" value-size="40" value="<?php echo $result->nombre; ?>"></p>
                        <p>Precio del producto: <input type="number" name="precio" value-size="40" value="<?php echo $result->precio; ?>"></p>
                        <p>Categoria del producto:<input type="text" name="categoria" value-size="40" value="<?php echo $result->categoria; ?>"></p>
                        <p>Stock del producto: <input type="number" name="stock" value-size="40" value="<?php echo $result->stock; ?>"></p>
                        <img width="80px" height="80px" src="data:image/jpg; base64, <?php echo base64_encode($result->imagen); ?>" alt="">
                        <p>Imagen del producto: <input type="file" accept="image/*" name="imagen" value-size="40"></p>
                        <p>Descripcion: <textarea name="descripcion" placeholder="<?php echo $result->descripcion; ?>"></textarea></p>
                        <p><input type="submit"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>