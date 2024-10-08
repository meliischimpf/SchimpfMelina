<?php

require_once 'clases/Persona.php';

class Empleado extends Persona {
    
    public $nLegajo;

    public function __construct($nombre, $apellido, $mail, $telefono, $fecha_nacimiento, $dni, $localidad, $provincia, $monto, $nLegajo){
        parent::__construct($nombre, $apellido, $mail, $telefono, $fecha_nacimiento, $dni, $localidad, $provincia, $monto);
        $this->nLegajo = $nLegajo;
    }

    public function infoEmpleado(){

            return "<div class='container'>".parent::infoPersona()."<strong>N° Legajo: </strong>".$this->nLegajo."<br> </div>";
    }


    public function calcularMontoEmpleado($monto) {
        if (substr($this->nLegajo, 0, 2) !== '99') {
             
            $montoFinalEmpleado = ($this->monto * 0.71);
        
        return $montoFinalEmpleado; //21%
         } else {
             return $this->monto;
         }
        
        
        
    }
}








?>

