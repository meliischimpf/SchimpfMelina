<?php

require_once 'Producto.php';

class Bebida extends Producto {

    public $litro;

    public function __construct($codigo, $nombre, $color, $tipo, $precioUnitario, $litro) {
        parent::__construct($codigo, $nombre, $color, $tipo, $precioUnitario);
    
        $this->litro = $litro;

    }

    public function getInformacionBebida(){
        $informacionCompletaBebida =    "Codigo: " . $this->codigo . ", " . 
                                        " - Nombre: " . $this->nombre . ", " . 
                                        " - Color: " . $this->color . ", " . 
                                        " - Tipo: " . $this->tipo . ", ".
                                        " - Precio unitario: " . $this->precio_unitario . 
                                        " - litro: " . $this->litro . "</br>";
            
        return $informacionCompletaBebida;
    }
}

?>