<?php


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    try {
        $sql = "UPDATE usuarios set nombre = :nombre , apellido = :apellido , correo = :correo , usuario = :usuario ,
                    password = :pass where id = :id";
        $resul = $conexion->prepare($sql);
        $resul->execute(
            [
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':pass' => $password,
                ':id' => $id
            ]
        );
?>
<h2>registro actualizado</h2>
<?php
    } catch (Exception $e) {
        echo "error : " . $e->getLine();
    }
}

    ?>