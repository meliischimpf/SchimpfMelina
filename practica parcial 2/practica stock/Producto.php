<?php

class Producto {
    public $nombre;
    public $precio;
    public $cantidad;
    public $codigo;
    public $tipo;

    public function __construct($nombre, $precio, $cantidad, $codigo, $tipo) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->codigo = $codigo;
        $this->tipo = $tipo;
    }


    public function getInfoProducto() {
            $informacionCompleta =  "Nombre: " . $this->nombre . "</br>" . 
                                    "Precio: " . $this->precio . "</br>" . 
                                    "Cantidad: " . $this->cantidad . "</br>" .
                                    "Código: " . $this->codigo . "</br>" .
                                    "Tipo: " . $this->tipo . "</br>";
                
            return $informacionCompleta;

    }
}
?>
