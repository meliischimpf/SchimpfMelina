<?php

require_once 'Animal.php';

class Gato extends Animal {

    public $pelajeLargo;
    public $comportamiento;

    public function __construct($id, $nombre, $edad, $raza, $peso, $pelajeLargo, $comportamiento) {
        parent::__construct($id, $nombre, $edad, $raza, $peso);
    
        $this->pelajeLargo = $pelajeLargo;
        $this->comportamiento = $comportamiento;

    }

    public function getInformacionGato(){
        $informacionCompletaGato =  
                                $this->pelajeLargo . ", " . 
                                $this->comportamiento . "</br>";
            
        
        return $informacionCompletaGato;
    }
    
    public function cambiarComportamiento($nuevoComportamiento) {
            $nuevoComportamiento = '';
        return $nuevoComportamiento;
    }

    public function mostrarComportamiento() {
        return $this->comportamiento;
    }

}

?>