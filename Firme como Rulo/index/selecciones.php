<?php

require_once 'conexion.php';

$db = new Database();
$conn = $db->connect();

//institutos
$stmt_institutos = $conn->prepare("SELECT id_instituto, nombre FROM instituto");
$stmt_institutos->execute();
$result_institutos = $stmt_institutos->fetchAll(PDO::FETCH_ASSOC);

$materias = [];

if (isset($_POST['id_instituto']) && !empty($_POST['id_instituto'])) {
    $id_instituto = $_POST['id_instituto'];

    //materias segun instituto seleccionado
    $stmt_materias = $conn->prepare("SELECT id_materia, nombre FROM materias WHERE id_instituto = :id_instituto");
    $stmt_materias->bindParam(':id_instituto', $id_instituto, PDO::PARAM_INT);
    $stmt_materias->execute();
    $materias = $stmt_materias->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Firme como Rulo</title>
</head>
<link rel="stylesheet" href="resources/selecciones.css">
<body>
    <h1>Firme como Rulo</h1>
    <h2>Seleccionar Instituto y Materia</h2>

    <form method="post" action="">
        <label for="id_instituto">Seleccionar Instituto:</label>
        <select name="id_instituto" id="id_instituto" required>
            <option value="">Seleccionar Instituto</option>

            <?php
            if (!empty($result_institutos)) {
                foreach ($result_institutos as $row_instituto) {
                    $selected = (isset($id_instituto) && $id_instituto == $row_instituto["id_instituto"]) ? 'selected' : '';
                    echo "<option value='" . $row_instituto["id_instituto"] . "' $selected>" . $row_instituto["nombre"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay institutos disponibles</option>";
            }
            ?>

        </select>
        <input type="submit" value="Seleccionar Instituto">
    </form>

    <?php if (!empty($materias)): ?>
    <form method="post" action="menu/menu.php">
        <label for="id_materia">Seleccionar Materia:</label>
        <select name="id_materia" id="id_materia" required>
            <option value="">Seleccionar Materia</option>

            <?php
            // Mostrar las materias
            foreach ($materias as $materia) {
                echo "<option value='" . $materia['id_materia'] . "'>" . $materia['nombre'] . "</option>";
            }
            ?>
        </select>
        <input type="hidden" name="id_instituto" value="<?php echo $id_instituto; ?>">
        <input type="submit" value="Seleccionar Materia">
    </form>
    <?php endif; ?>

</body>
</html>
