<?php


trait CalculadoraCostos{
    public function calcularCostoTotal($horasTrabajo, $costo) {
        $costoPorHora = 20; 
        return ($horasTrabajo * $costoPorHora) + $costo;
    }
}




?>
