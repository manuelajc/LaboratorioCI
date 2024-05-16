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
                    <td>
                        <form action="<?php echo base_url('index.php/users/eliminar_usuario/'.$usuario->id); ?>" method="post">
                            <button class="ui-btn" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
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
    color: #855CFF;
    font-family:'Times New Roman', Times, serif;
}

th{
    color: #855CFF;
}

#tabla_usuarios tbody tr {
    background-color: #f0f0f0;
    color: #333;
}

#tabla_usuarios tbody tr:nth-child(odd) {
    background-color: #e0e0e0;
}
.ui-btn {
  cursor: pointer; 
  border-radius: 5px;
  color: black;
  border-style: solid;
  background-color: transparent;
  border-color: black;
  width: 80px;
  height: 30px;
  transition: 0.2s ease;
  text-transform: uppercase;
  border-width: 1px;
  font-weight: 15;
  font-size: 10px;
  letter-spacing: 2px;
}
.ui-btn:hover {
  color: rgb(247, 247, 247);
  background-color: rgb(202, 25, 25);
  border-color: rgb(202, 25, 25);
 
}
.ui-btn:active {
  width: 115px;
  height: 38px;
  letter-spacing: 0px;
}

</style>
  