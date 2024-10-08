<?php

require_once 'Persona.php';

class Alumno extends Persona {
    
    public $materia;

    public function __construct($nombre, $apellido, $edad, $materia){
        
        parent::__construct ($nombre, $apellido, $edad);

        $this->materia = $materia;

    }

    public function infoAlumno(){

        return " - Mi materia es $this->materia";
        //parent::infoPersona().$this->materias;
    }

}

$alumno1 = new Alumno("Juan", "Lopez", "21", "Ciencias de la Tierra");

echo $alumno1->infoAlumno();

?>