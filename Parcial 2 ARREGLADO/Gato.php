<?php

require_once 'Animal.php';

class Gato extends Animal {

    public $pelajeLargo;
    public $comportamiento;

    public function __construct($id, $nombre, $edad, $tipo, $raza, $peso, $pelajeLargo, $comportamiento) {
        parent::__construct($id, $nombre, $edad, $tipo, $raza, $peso);
    
        $this->pelajeLargo = $pelajeLargo;
        $this->comportamiento = $comportamiento;

    }

    public function getInformacionGato(){
        $informacionCompletaGato =  
                                "id: " . $this->id . "</br>" . 
                                "nombre: " . $this->nombre . "</br> " . 
                                "edad: " . $this->edad . "</br> " . 
                                "tipo: " . $this->tipo . "</br> ".
                                "raza: " . $this->raza . "</br> " . 
                                "peso: " . $this->peso . "</br> " .
                                "pelaje largo: " . ($this->pelajeLargo ? 'sí' : 'no') . "</br>" . 
                                "comportamiento: " . $this->comportamiento . "</br>";
            
        
        return $informacionCompletaGato;
    }
    
    public function cambiarComportamiento($nuevoComportamiento) {
        $this->comportamiento = $nuevoComportamiento;
    }

    public function mostrarComportamiento() {
        return $this->comportamiento;
    }

}

?>