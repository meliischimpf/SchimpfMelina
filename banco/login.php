<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Banco</title>
</head>
<link rel="stylesheet" href="registro/resources/login.css">
<body>
<form action="registro/procesar_login.php" method="post">
        <h2>Login</h2>

        <div class="form-group">
            <div class="half-width">
                <label for="mail"><b>Correo Electrónico</b></label>
                <input type="email" id="mail" name="mail" required>
            </div>
            <div class="half-width">
                <label for="password"><b>Contraseña</b></label>
                <input type="password" id="password" name="password" required><br>
            </div>
            <a href="registro/register.php">No está registrado? Registrese aquí.</a><br>
            <button type="submit"><b>Login</b></button>
        </div>
</body>
</html>