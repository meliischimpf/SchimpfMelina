<?php

require_once "Producto.php";
require_once "Trait.php";

class ProductoPerecedero extends Producto {
    use AccionesProducto;

    public $fechaDeVencimiento;

    public function __construct($nombre, $precio, $cantidad, $codigo, $tipo, $fechaDeVencimiento) {
        parent::__construct($nombre, $precio, $cantidad, $codigo, $tipo);
        $this->fechaDeVencimiento = $fechaDeVencimiento;
    }

    public function verificarFechaDeVencimiento() {
        $fechaActual = new DateTime();
        $fechaVencimiento = new DateTime($this->fechaDeVencimiento);
        if ($fechaVencimiento < $fechaActual) {
            return "El producto {$this->nombre} ya no está disponible por haber vencido.";
        } else {
            return "El producto {$this->nombre} está disponible.";
        }
    }
}


?>
