<?php

class Persona {
    
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad){
        
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;

    }

    public function infoPersona(){

        return "Mi nombre es $this->nombre $this->apellido, tengo $this->edad";
    }

}

$persona1 = new Persona("Juan", "Lopez", "21");

echo $persona1->infoPersona();

?>