<?php
require_once 'Usuario.php';
require_once 'Admin.php';
require_once 'Alumno.php';

$objusuarios = [];
$errorMsg = "";

try {
    $objusuarios[] = new Admin("said Dominguez", "abdelalvarez55@gmail.com");
    $objusuarios[] = new Alumno("Jose Castillo", "joseki@universidad.edu", "23179845");
    $uError = new Alumno("juan Antonio", "juan@universidaddu", "20324456");

} catch (Exception $e) {
    $errorMsg = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Examen POO</title>
</head>
<body>

    <h2>Lista de Usuarios Registrados</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
        </tr>

        <?php
        foreach($objusuarios as $u) {
      
            $matricula = method_exists($u, "getMatricula") ? $u->getMatricula() : "-";

            echo "<tr>";
            echo "<td>" . $u->getNombre() . "</td>";
            echo "<td>" . $u->getCorreo() . "</td>";
            echo "<td>" . $u->getRol() . "</td>";
            echo "<td>" . $matricula . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php if ($errorMsg): ?>
        <p style="color: red;">
            <b>Error:</b> <?php echo $errorMsg; ?>
        </p>
    <?php endif; ?>

</body>
</html>
