<?php

require_once 'conexion.php';
require_once 'Alumno.php';

// Crear una instancia de la conexión a la base de datos
$database = new Database();
$db = $database->connect();

// Crear una instancia de Alumno
$alumno = new Alumno($db);

// Asignar valores a las propiedades
$alumno->nombre = 'Juan';
$alumno->apellido = 'Hectoriano';
$alumno->telefono = '1234567890';

// Intentar crear un nuevo registro
if ($alumno->create()) {
    echo "Alumno creado exitosamente.";
} else {
    echo "Error al crear el alumno.";
}

