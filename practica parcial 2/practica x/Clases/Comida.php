<?php

require_once 'Producto.php';

class Comida extends Producto {

    public $peso;

    public function __construct($codigo, $nombre, $color, $tipo, $precioUnitario, $peso) {
        parent::__construct($codigo, $nombre, $color, $tipo, $precioUnitario);
    
        $this->peso = $peso;

    }

    public function getInformacionComida(){
        $informacionCompletaComida =    "Codigo: " . $this->codigo . ", " . 
                                        " - Nombre: " . $this->nombre . ", " . 
                                        " - Color: " . $this->color . ", " . 
                                        " - Tipo: " . $this->tipo . ", ".
                                        " - Precio unitario: " . $this->precio_unitario . 
                                        " - Peso: " . $this->peso . "</br>";
                    
        return $informacionCompletaComida;
    }
}

?>