<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Users</h1>
    <table id="tabla_usuarios">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td><?php echo $usuario->id; ?></td>
                    <td><?php echo $usuario->Name; ?></td>
                    <td><?php echo $usuario->LastName; ?></td>
                    <td><?php echo $usuario->Telephone; ?></td>
                </tr>
                    <form action="<?php echo base_url('index.php/users/eliminar_usuario/'.$usuario->id); ?>" method="post">
                    <button type="submit">Eliminar</button>
            <?php endforeach; ?>
        </tbody>
    </table>
</body> 

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#tabla_usuarios').DataTable();
  });
</script>

</html>


<style>
h1{
    text-align: center;
    color: #47BFFF;
    font-family:'Times New Roman', Times, serif;
}

th{
    color: #47BFFF;
}

</style>
  