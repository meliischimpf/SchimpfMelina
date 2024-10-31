<?php

class Animal {

    public $id;
    public $nombre;
    public $edad;
    public $tipo;
    public $raza;
    public $peso;

    public function __construct($id, $nombre, $edad, $tipo, $raza, $peso) {
        
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tipo = $tipo;
        $this->raza = $raza;
        $this->peso = $peso;
    
    }   

    public function getInformacion() { 
        $informacionCompleta =  "id: " . $this->id . ", " . 
                                "nombre: " . $this->nombre . ", " . 
                                "edad: " . $this->edad . ", " . 
                                "tipo: " . $this->tipo . ", ".
                                "raza: " . $this->raza . ", " . 
                                "peso: " . $this->peso . "</br>";
            
        return $informacionCompleta;

    }
}

?>