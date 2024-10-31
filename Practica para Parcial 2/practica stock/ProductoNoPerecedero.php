<?php

require_once "Producto.php";
require_once "Trait.php";

class ProductoNoPerecedero extends Producto {
    use AccionesProducto;

    public function esReabastecer() {
        return $this->cantidad < 5;
    }
}

?>
