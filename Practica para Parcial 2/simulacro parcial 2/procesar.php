<?php

require 'Alumno.php';
require 'Trait.php';

use notificar;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    $alumno = new Alumno($id, $nombre, $apellido, $dni, $edad, $email);

    echo $alumno->infoAlumno();
    echo $alumno->notificacion();
    
}
?>
