<?php

trait AccionesProducto {
    public function reducirStock($cantidad) {
        $this->cantidad -= $cantidad;
        if ($this->cantidad < 0) $this->cantidad = 0;
    }

    public function aumentarStock($cantidad) {
        $this->cantidad += $cantidad;
    }

    public function verificarStock() {
        return $this->cantidad > 0 ? "Producto disponible" : "Producto agotado";
    }
}
