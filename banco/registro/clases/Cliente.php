<?php

require_once 'clases/Persona.php';

class Cliente extends Persona {
    
    public $nCuenta;

    public function __construct($nombre, $apellido, $mail, $telefono, $fecha_nacimiento, $dni, $localidad, $provincia, $monto, $nCuenta){
        parent::__construct($nombre, $apellido, $mail, $telefono, $fecha_nacimiento, $dni, $localidad, $provincia, $monto);
        $this->nCuenta = $nCuenta;

    }

    public function infoCliente(){

        return "<div class='container'>".parent::infoPersona()."<strong>N° Cuenta: </strong>".$this->nCuenta."<br> </div>";
    }

    public function calcularEdad ($fecha_nacimiento){
        $fecha_nacimiento = new DateTime($this->fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        return $edad->y;

    }

    public function calcularMontoCliente($monto) {
        
        $montoFinalCliente = ($this->monto * 0.7);
        
        return $montoFinalCliente; //30%
        
    
        }
    

}




?>