<div class="container">
    <?php echo validation_errors(); ?>
    <br>
    <form action="<?=base_url('index.php/ArbitrosC/updateArbitro/').$arbitro[0]->IdArbitro ?>" method="POST">
        <label>Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?= $arbitro[0]->Nombre ?>">
        <br>
        <label>Apellido paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" value="<?= $arbitro[0]->ApellidoPaterno ?>">
        <br>
        <label>Apellido materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno" value="<?= $arbitro[0]->ApellidoMaterno ?>">
        <br>
        <label>Teléfono</label>
        <input type="text" class="form-control" name="Telefono" value="<?= $arbitro[0]->Telefono ?>">
        <br>
        <label>Fecha de nacimiento</label>
        <input type="text" class="form-control" name="FechaNacimiento" value="<?= $arbitro[0]->FechaNacimiento ?>">
        <br>
        <label>Foto</label>
        <input type="text" class="form-control" name="Foto" value="<?= $arbitro[0]->Foto ?>">
        <br>
        <input type="submit" class="btn btn-outline-dark btn-sm" value="Actualizar">
    </form>
    </br>
</div>

<br>
<h6 style="color: darkgrey; text-align:center;">Modern Football Technology&#174;</h6>
</br>