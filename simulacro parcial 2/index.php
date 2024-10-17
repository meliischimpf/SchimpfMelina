<?php

require_once 'Alumno.php';

$alumnos = [
    new Alumno(1, "Juan", "Pérez", "12345678", 20, "juan.perez@email.com", ["Matematica" => 3, "Programacion" => 2, "Historia" => 10]),
    new Alumno(2, "María", "López", "87654321", 22, "maria.lopez@email.com", ["Matematica" => 8, "Programacion" => 6, "Historia" => 9]),
    new Alumno(3, "Carlos", "Gómez", "23456789", 21, "carlos.gomez@email.com", ["Matematica" => 7, "Programacion" => 9, "Historia" => 10]),
    new Alumno(4, "Ana", "Martínez", "34567890", 23, "ana.martinez@email.com", ["Matematica" => 6, "Programacion" => 5, "Historia" => 8]),
    new Alumno(5, "Lucía", "Fernández", "45678901", 19, "lucia.fernandez@email.com", ["Matematica" => 10, "Programacion" => 7, "Historia" => 9]),
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
</head>
<body>

<h1>Listado de Alumnos</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Edad</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    
    <?php foreach ($alumnos as $alumno): ?>
        <tr>
            <td><?php echo $alumno->id; ?></td>
            <td><?php echo $alumno->nombre; ?></td>
            <td><?php echo $alumno->apellido; ?></td>
            <td><?php echo $alumno->dni; ?></td>
            <td><?php echo $alumno->edad; ?></td>
            <td><?php echo $alumno->email; ?></td>
            <td>
                <button onclick="verNotas('<?php echo $alumno->mostrarNotas(); ?>')">Ver Notas</button>
                <button onclick="notificar('<?php echo $alumno->email; ?>')">Notificar</button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    function verNotas(notas) {
        alert("Notas: " + notas);
    }

    function notificar(email) {
        alert("El mail ha sido enviado a " + email);
    }
</script>

</body>
</html>
