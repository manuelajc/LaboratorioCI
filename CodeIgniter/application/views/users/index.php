<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form id="users" name="users" method="post" action="<?php echo base_url();?>index.php/users/registrar">
        <h3><?php echo $titulo; ?></h3>
        <label class="nombre" for="Name">Nombre</label>
        <input name="Name" type="text" value="<?php echo set_value('Name'); ?>"/>
        <?php echo form_error('Name'); ?><br/>

        <label for="LastName">Apellido</label>
        <input name="LastName" type="text" value="<?php echo set_value('LastName'); ?>"/>
        <?php echo form_error('LastName'); ?><br/>

        <label for="Telephone">Teléfono</label>
        <input name="Telephone" type="tel" value="<?php echo set_value('Telephone'); ?>"/>
        <?php echo form_error('Telephone'); ?><br/>

        <label for="Password">Contraseña</label>
        <input name="Password" type="password" value="<?php echo set_value('Password'); ?>"/>
        <?php echo form_error('Password'); ?><br/>

        <input type="submit" value="Registrar"/>
    </form>
</body>
</html>

<style>
        h3{
            text-align: center;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }

        form {
            width: 300px; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #F0EBFF;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="tel"],
        form input[type="password"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #B399FF;
            color: black;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #855CFF;
        }
    </style>