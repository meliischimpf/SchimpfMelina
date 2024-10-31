<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Banco</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="resources/crear_persona.css">
</head>

<body>
    <form action="main.php" method="post">
        <h2>Registro</h2>

        <div class="form-group">
            <div class="half-width">
                <label for="nombre"><b>Nombre</b></label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="half-width">
                <label for="apellido"><b>Apellido</b></label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label for="mail"><b>Correo Electrónico</b></label>
                <input type="email" id="mail" name="mail" required>
            </div>
            <div class="half-width">
                <label for="telefono"><b>Teléfono</b></label>
                <input type="number" id="telefono" name="telefono" required>
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label for="fecha_nacimiento"><b>Fecha de Nacimiento</b></label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="half-width">
                <label for="dni"><b>DNI</b></label>
                <input type="number" id="dni" name="dni" required>
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label for="localidad"><b>Localidad</b></label>
                <input type="text" id="localidad" name="localidad" required>
            </div>
            <div class="half-width">
                <label for="provincia"><b>Provincia</b></label>
                <input type="text" id="provincia" name="provincia" required>
            </div>
        </div>

        <div class="form-group">
            <div class="full-width">
                <label for="monto"><b>Monto a Ingresar</b></label>
                <input type="number" id="monto" name="monto" required>
            </div>
        </div>

        <div class="checkbox-group">
            <b><h4>Tipo de Usuario:</h4></b>
            
                <input type="radio" id="empleadoRadio" name="userType" value="empleado">
                <span>Empleado    </span>
                <input type="text" id="nLegajo" name="nLegajo" class="conditional-input" placeholder="Número de Empleado" minlength="8" maxlength="8">
            
                <input type="radio" id="clienteRadio" name="userType" value="cliente">
                <span>Cliente    </span>
                <input type="text" id="nCuenta" name="nCuenta" class="conditional-input" placeholder="Número de Cliente" minlength="8" maxlength="8">
        </div>

        <button type="submit"><b>Registrar</b></button>
    </form>

    <script>
        // Función para mostrar el campo adicional según el tipo de usuario seleccionado
        function toggleInputVisibility() {
            const empleadoRadio = document.getElementById('empleadoRadio');
            const clienteRadio = document.getElementById('clienteRadio');
            const nLegajoInput = document.getElementById('nLegajo');
            const nCuentaInput = document.getElementById('nCuenta');

            // Mostrar el campo correspondiente según el radio seleccionado
            nLegajoInput.style.display = empleadoRadio.checked ? 'block' : 'none';
            nCuentaInput.style.display = clienteRadio.checked ? 'block' : 'none';
        }

        // Agregar event listeners a los radios
        document.getElementById('empleadoRadio').addEventListener('change', toggleInputVisibility);
        document.getElementById('clienteRadio').addEventListener('change', toggleInputVisibility);
    </script>
</body>
</html>