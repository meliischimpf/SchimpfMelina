<?php
require_once 'Persona.php'; 
require_once 'Estudiante.php';
require_once 'Trait.php';

$alumnos = [
    1 => ['nombre' => 'Juan', 'apellido' => 'Pérez', 'materia1' => 85, 'materia2' => 90],
    2 => ['nombre' => 'Ana', 'apellido' => 'Gómez', 'materia1' => 78, 'materia2' => 88],
    3 => ['nombre' => 'Luis', 'apellido' => 'Martínez', 'materia1' => 92, 'materia2' => 80],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    
    if (array_key_exists($id, $alumnos)) {
        $alumnoData = $alumnos[$id];

        $estudiante = new Estudiante($alumnoData['nombre'], $alumnoData['apellido'], $alumnoData['materia1'], $alumnoData['materia2']);
        $promedio = $estudiante->getPromedio();
        $estudiante->registrarAsistencia("2024-10-15");

        echo "Nombre: " . $estudiante->getNombre() . "<br>";
        echo "Promedio: " . $promedio . "<br>";
        echo "Total de Asistencias: " . $estudiante->totalAsistencias() . "<br>";
        echo "Estado: " . $estudiante->estadoEstudiante();
    } else {
        echo "No se encontró un alumno con ID: " . htmlspecialchars($id);
    }
}
?>
