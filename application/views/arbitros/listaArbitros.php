<div class="container">
    <table class="table table-dark table-striped table-bordered border-silver">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Teléfono</th>
            <th>Fecha de nacimiento</th>
            <th>Foto</th>
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
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>