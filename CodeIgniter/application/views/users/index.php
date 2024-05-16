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

    *{
        background-color: #212121;
    }
        h3{
            text-align: center;
            color: white;
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
            background: linear-gradient(#212121, #212121) padding-box,
              linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
            border: 2px solid transparent;
            border-radius: 5px;
            /*background-color: #F0EBFF;*/
        }

        form label {
            display: block;
            margin-bottom: 10px;
            color: white;
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
            color: white;
        }    

        form input[type="submit"] {
            cursor: pointer;
            border-radius: 5px;
            color: black;
            border-style: solid;
            background-color: #B399FF;
            transition: 0.2s ease;
            text-transform: uppercase;
            border-width: 1px;
            font-weight: 15;
            font-size: 10px;
        }

        form input[type="submit"]:hover {
            color: rgb(247, 247, 247);
            background-color: #855CFF;
            border-color: #855CFF;
            box-shadow: 0 0 10px #855CFF, 0 0 10px #855CFF;
        }

        .error{
            color: red;
        }
    </style>