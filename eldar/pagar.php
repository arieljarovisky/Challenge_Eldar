<div class="modal fade" id="pagar<?php echo $result2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pagar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form">

                    <form action="../comprafinalizada.php" method="POST">
                        <p><input type="hidden" name="id" value="<?php echo $result2->id; ?>"></p>
                        <p> <input type="text"  name="tarjeta"  placeholder="Numero de tarjeta de credito" required minlength="16" maxlength="16"></p>
                        <p> <input type="text" name="codigo" minlength="3" maxlength="4" placeholder="Codigo de seguridad"></p> 
                        <p> <input type="date" name="fecha" placeholder="Fecha de vencimiento"></p>     
                        <p> <input type="text"  name="dni"  placeholder="DNI" required minlength="8" maxlength="8"></p>                    
                        <p>Nombre del titular <input type="text" name="nombre" value-size="40" required></p>
                    
                        <p><input type="submit"></p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>