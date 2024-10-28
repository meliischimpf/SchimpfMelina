<?php

require_once 'Animal.php';

class Perro extends Animal {

    public $tamaño = ['pequeño', 'grande', 'mediano'];
    public $vacunas = [];

    public function __construct($id, $nombre, $edad, $raza, $peso, $tamaño, $vacunas) {
        parent::__construct($id, $nombre, $edad, $raza, $peso);
    
        $this->tamaño = $tamaño;
        $this->vacunas = $vacunas;

    }    

    public function getInformacionPerro(){
        $informacionCompletaPerro =  
                                $this->tamaño . ", " . 
                                $this->vacunas . "</br>";
            
        
        return $informacionCompletaPerro;
    }

   public function mostrarVacunas($vacunas) {
        return $vacunas;
    }
    
    
    //public function vacunar($vacuna) {

   // }
}

?>