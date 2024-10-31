<?php

require_once 'Animal.php';

class Perro extends Animal {

    public $tamaño = ['pequeño', 'grande', 'mediano'];
    public $vacuna = [];

    public function __construct($id, $nombre, $edad, $tipo, $raza, $peso, $tamaño, $vacuna) {
        parent::__construct($id, $nombre, $edad, $tipo, $raza, $peso);
    
        $this->tamaño = $tamaño;
        $this->vacuna = $vacuna;

    }    

    public function getInformacionPerro(){
        $informacionCompletaPerro =  
                                "id: " . $this->id . "</br>" . 
                                "nombre: " . $this->nombre . "</br>" . 
                                "edad: " . $this->edad . " </br> " . 
                                "tipo: " . $this->tipo . "</br> ".
                                "raza: " . $this->raza . " </br> " . 
                                "peso: " . $this->peso . " </br> " .
                                "tamaño: " . $this->tamaño . " </br> ";
            
        return $informacionCompletaPerro;
    }

   public function mostrarVacunas() {
    $vacunasLista = "vacunas: " . implode(", ", $this->vacuna);
        return $vacunasLista;
    }
    
    
    public function vacunar($vacuna) {
        
        return $this->vacuna[] = $vacuna;
    }
}

?>