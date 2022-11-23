<div class="container">
    <?php echo validation_errors(); ?>
    <br>
    <form action="<?=base_url('index.php/ArbitrosC/insertArbitro') ?>" method="POST">
        <label>Nombre</label>
        <input type="text" class="form-control" name="Nombre">
        <br>
        <label>Apellido paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno">
        <br>
        <label>Apellido materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno">
        <br>
        <label>Teléfono</label>
        <input type="text" class="form-control" name="Telefono">
        <br>
        <label>Fecha de nacimiento</label>
        <input type="text" class="form-control" name="FechaNacimiento">
        <br>
        <label>Foto</label>
        <input type="text" class="form-control" name="Foto">
        <br>
        <input type="submit">
    </form>
    </br>
</div>