<?php

class Vehiculo {

    public $matricula;
    public $marca;
    public $modelo;
    public $nombreCliente;

    public function __construct($matricula, $marca, $modelo, $nombreCliente){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nombreCliente = $nombreCliente;
    }


    public function getInformacion(){
    $infoVehiculo = $this->matricula . ", " . 
                    $this->marca . ", " . 
                    $this->modelo . ", " .
                    $this->nombreCliente . '</br>';

        return $infoVehiculo;
    }


}

?>
