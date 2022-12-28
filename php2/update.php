<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

include 'conexion.php';

$id = $_GET['id'];
$sql = "SELECT * from usuarios where id = :id ";
$resul = $conexion->prepare($sql);
$resul->execute([':id' => $id]);
    foreach ($resul->fetchAll() as $row) {

    ?>
    <form action="" method="post">
        <input type="text" name="nombre" value=" <?php echo $row['nombre']; ?>"><br><br>
    <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>"><br><br>
    <input type="text" name="correo" value="<?php echo $row['correo']; ?>"><br><br>
    <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>"><br><br>
    <input type="text" name="password" value="<?php echo $row['password'];
    } ?>"><br><br>
    <input type="submit" name="actualizar" value="actualizar">
    <a href="index.php">regresar</a>
    </form>
    <?php
    include 'actualizar.php';
    ?>

</body>

</html>