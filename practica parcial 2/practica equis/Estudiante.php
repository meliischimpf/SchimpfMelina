<?php

require_once 'Persona.php';
require_once 'Trait.php';

class Estudiante extends Persona {
    private $materia1; 
    private $materia2;
    private $asistencias = [];

    use Saludo;

    public function __construct($nombre, $apellido, $materia1, $materia2) {
        parent::__construct($nombre, $apellido);
        
        $this->materia1 = $materia1;
        $this->materia2 = $materia2;
    }

    public function presentar() {
        return $this->decirHola() . " Mi nombre es " . $this->getNombre() . ".";
    }

    public function getPromedio() {
        $suma = $this->materia1 + $this->materia2;
        $contador_materias = 2;

        if ($contador_materias > 0) {
            $promedio = $suma / $contador_materias;
        } else {
            $promedio = 0;
        }

        return $promedio;
    }

    public function estadoEstudiante() {
        $promedio = $this->getPromedio();
        return $promedio >= 60 ? "Aprobado" : "Reprobado";
    }

    public function totalAsistencias() {
        return count($this->asistencias);
    }    

    public function registrarAsistencia($fecha) {
        $this->asistencias[] = $fecha;
    }

}

?>
