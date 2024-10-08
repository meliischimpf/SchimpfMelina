<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta
 name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="post">
            <label for="usuario"><b>Usuario:</b></label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena"><b>Contraseña:</b></label>
            <input type="password" id="contrasena" name="contrasena" required>
           
            <button type="submit"><b>Ingresar</b></button>
        </form>
    </div>
</body>

