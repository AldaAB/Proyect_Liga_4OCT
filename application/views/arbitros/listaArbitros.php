<div class="container">
    <br>
    <a class="btn btn-success" href="<?=base_url('index.php/ArbitrosC/insertArbitro') ?>">Agregar árbitro</a>
    </br>
    <br>
    <h1>Árbitros</h1>
    </br>
    <table class="table table-striped table-bordered">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Teléfono</th>
            <th>Fecha de nacimiento</th>
            <th>Foto</th>
            <th>Operaciones</th>
            <th>Borrar</th>
        </thead>
        <tbody>
            <?php foreach ($arbitros as $key): ?>
                <tr>
                    <td><?=$key->IdArbitro ?></td>
                    <td><?=$key->Nombre ?></td>
                    <td><?=$key->ApellidoPaterno ?></td>
                    <td><?=$key->ApellidoMaterno ?></td>
                    <td><?=$key->Telefono ?></td>
                    <td><?=$key->FechaNacimiento ?></td>
                    <td><?=$key->Foto ?></td>
                    <td><a class="btn btn-primary btn-sm" href="<?=base_url('index.php/ArbitrosC/detalleArbitro/').$key->IdArbitro ?>">Ver detalles</a></td>
                    
                    <td><a class="btn btn-danger btn-sm" href="<?=base_url('index.php/ArbitrosC/borrarArbitro/').$key->IdArbitro ?>">Borrar</a></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>

<br>
<h6 style="color: darkgrey; text-align:center;">Modern Football Technology&#174;</h6>
</br>
