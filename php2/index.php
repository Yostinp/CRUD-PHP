<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>

    <style>
        table{
            margin-top: 100px;
        }
        table td{
            padding-left: 40px;
            padding-right: 40px;
            background-color:skyblue;
            
        }
    </style>




</head>

<body>
    <form method="post">
        <input type="text" name="nombre" placeholder="nombre"><br><br>
        <input type="text" name="apellido" placeholder="apellido"><br><br>
        <input type="text" name="correo" placeholder="correo"><br><br>
        <input type="text" name="usuario" placeholder="usuario"><br><br>
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="enviar">
    </form>
    <?php
        include 'insert.php';
        ?>
        <br>
    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>correo</td>
            <td>usuario</td>
            <td>contraseña</td>
            <td>operaciones</td>
        </tr>
        <?php
        include 'datos.php';
        ?>
    </table>

</body>

</html>