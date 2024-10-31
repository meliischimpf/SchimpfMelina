<?php

require_once 'conexion.php';
require_once 'clases/Persona.php';
require_once 'clases/Empleado.php';
require_once 'clases/Cliente.php';

$data = $_POST;

$db = new Database();
$conn = $db->connect();

//var_dump($data);

$persona1 = new Persona ($data ['nombre'], $data ['apellido'], $data ['mail'], $data ['telefono'], $data ['fecha_nacimiento'], $data ['dni'], $data ['localidad'], $data ['provincia'], $data ['monto']);
 //$persona1->infoPersona();


if ($data['userType'] === 'cliente') {

    $cliente1 = new Cliente($data ['nombre'], $data ['apellido'], $data ['mail'], $data ['telefono'], $data ['fecha_nacimiento'], $data ['dni'], $data ['localidad'], $data ['provincia'], $data ['monto'], $data['nCuenta'], 'C');

    $stmt = $conn->prepare("INSERT INTO personas (nombre, apellido, mail, telefono, fecha_nacimiento, dni, localidad, provincia, monto, nCuenta, condicion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$data['nombre'], $data['apellido'], $data['mail'], $data['telefono'], $data['fecha_nacimiento'], $data['dni'], $data['localidad'], $data['provincia'], $cliente1->calcularMontoCliente($data['monto']) , $data['nCuenta'], 'C']);


    if ($cliente1->calcularEdad($data['fecha_nacimiento']) <= 18) {
        echo "Debe ser mayor a 18 años para crear una cuenta bancaria";
    
    } else {
        echo '<p>' . $cliente1->infoCliente() . '</p>';
        echo '<p>' . $cliente1->calcularMontoCliente($data['monto']) . '</p>';  // Descuento 30
    }



} else if ($data['userType'] === 'empleado') {
    
    $empleado1 = new Empleado($data ['nombre'], $data ['apellido'], $data ['mail'], $data ['telefono'], $data ['fecha_nacimiento'], $data ['dni'], $data ['localidad'], $data ['provincia'], $data ['monto'], $data['nLegajo'], 'E');
   
    $stmt = $conn->prepare("INSERT INTO personas (nombre, apellido, mail, telefono, fecha_nacimiento, dni, localidad, provincia, monto, nLegajo, condicion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$data['nombre'], $data['apellido'], $data['mail'], $data['telefono'], $data['fecha_nacimiento'], $data['dni'], $data['localidad'],  $data['provincia'], $empleado1->calcularMontoEmpleado($data['monto']), $data['nLegajo'], 'E']);


    echo '<p>' . $empleado1->infoEmpleado() . '</p>';
    echo '<p>' . $empleado1->calcularMontoEmpleado($data['monto']) . '</p>'; // Legajo terminado en 99

}

header("Location: index.php");

?>
