<?php

require_once 'Persona.php';

class Profesor extends Persona {
    
    public $legajo;

    public function __construct($nombre, $apellido, $edad, $legajo){
        
        $this->legajo = $legajo;

    }

    public function infoProfesor(){

        return " - Mi legajo es $this->legajo";
    }

}

$profesor = new Profesor("Juana", "Manso", "21", "001");

echo $profesor->infoProfesor();

?>