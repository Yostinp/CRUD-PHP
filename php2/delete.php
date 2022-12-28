<?php

include 'conexion.php';

try {
    $id = $_GET['id'];
    $sql = "DELETE from usuarios where id = :id";

    $resul = $conexion->prepare($sql);
    $resul->execute([':id' => $id]);
?>

<h1>registro eliminado</h1>

<?php

} catch (Exception $e) {
    echo 'error' . $e->getLine();
}
?>
<a href="index.php">regresar</a>