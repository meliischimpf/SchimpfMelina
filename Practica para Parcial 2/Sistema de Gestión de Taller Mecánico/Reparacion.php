<?php

require_once 'Vehiculo.php';
require_once 'Trait.php';

class Reparacion extends Vehiculo {
    use CalculadoraCostos;

    public $tipoServicio;
    public $fecha;
    public $costo;

    public function __construct($matricula, $marca, $modelo, $nombreCliente, $tipoServicio, $fecha, $costo) {
        parent::__construct($matricula, $marca, $modelo, $nombreCliente); 
        
        $this->tipoServicio = $tipoServicio;
        $this->fecha = $fecha;
        $this->costo = $costo;
    }

    public function getDetalleReparacion() {
        $infoReparacion = $this->tipoServicio . ", " . 
                          $this->fecha . ", " . 
                          $this->costo . '</br>';
        
        return $infoReparacion;
    }

    public function obtenerCostoTotal($horasTrabajo) {
        return $this->calcularCostoTotal($horasTrabajo, $this->costo);
    }
}
?>
