<div class="container">
    <br>
    <a class="btn btn-success btn-sm" href="<?=base_url('index.php/ArbitrosC/insertArbitro') ?>">Agregar árbitro</a>
    </br>
    <br>
    <style>
        h1{
            text-shadow: 2px 2px 5px red;
        }

        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: silver;}    
        </style>
    <h1>Árbitros&#9917;</h1>
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
            <th>Editar</th>
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
                    <td><a class="btn btn-warning btn-sm" href="<?=base_url('index.php/ArbitrosC/updateArbitro/').$key->IdArbitro ?>">Editar</a></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>

<br>
<h6 style="color: darkgrey; text-align:center;">Modern Football Technology&#174;</h6>
</br>
