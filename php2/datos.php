<?php

include 'conexion.php';

try {
    $sql = "SELECT * from usuarios";
    $resul = $conexion->prepare($sql);
    $resul->execute();
    foreach ($resul->fetchAll() as $row) {
?>
<tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['correo'] ?></td>
    <td><?php echo $row['usuario'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td>
        <a href="delete.php?id=<?php echo $row['id'] ?>">eliminar</a> <br>
        <a href="update.php?id=<?php echo $row['id'] ?>">editar</a></td>
    </td>
    
</tr>
<?php
    }
} catch (Exception $e) {
    echo "error";
}



?>