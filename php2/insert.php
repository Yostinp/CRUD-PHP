<?php

include('conexion.php');

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (empty($_POST['nombre']) or
        empty($_POST['apellido']) or
        empty($_POST['correo']) or
        empty($_POST['usuario']) or
        empty($_POST['password'])){

            ?>
<h2>todos los campos son obligatorios</h2>
<?php
        }
    else {
        try{
            $sql = "INSERT into usuarios (nombre,apellido,correo,usuario,password) values (:name,:apellido,:email,:user,:pass)";
            $resul = $conexion->prepare($sql);

            $resul->execute(
                [
                    ':name' => $nombre,
                    ':apellido' => $apellido,
                    'email' => $correo,
                    ':user' => $usuario,
                    ':pass' => $password
                ]
                );
                ?>
                <h2>ingresaste un registro</h2>
                <?php
            $resul->closeCursor();
            
        }
        catch(Exception $e){
            echo ('error ' . $e);
            }
    }

}
?>