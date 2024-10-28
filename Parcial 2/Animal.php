<?php

class Animal {

    public $id;
    public $nombre;
    public $edad;
    public $raza;
    public $peso;

    public function __construct($id, $nombre, $edad, $raza, $peso) {
        
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->raza = $raza;
        $this->peso = $peso;
    
    }   

    public function getInformacion() { 
        $informacionCompleta =  
                                $this->id . ", " . 
                                $this->nombre . ", " . 
                                $this->edad . ", " . 
                                $this->raza . ", " . 
                                $this->peso . "</br>";
            
        
        return $informacionCompleta;

    }
}

?>