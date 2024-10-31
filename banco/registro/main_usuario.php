<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Cuenta</title>
    <link rel="stylesheet" href="resources/main.css">

</head>
<body>
    <div class="container">
        <?php

        require_once 'conexion.php';
        require_once 'clases/Persona.php';
        require_once 'clases/Empleado.php';
        require_once 'clases/Cliente.php';

        $data = $_POST;

        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("INSERT INTO users (mail, password, nombre, apellido) VALUES (?, ?, ?, ?)");
        $stmt->execute([$data['mail'], $data['password'], $data['nombre'], $data['apellido']]);


        ?>

      </div>

    
   </body>
</html>