<?php

class Producto {

    public $codigo;
    public $nombre;
    public $color;
    public $tipo;
    public $precio_unitario;

    public function __construct($codigo, $nombre, $color, $tipo, $precio_unitario) {
        
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->color = $color;
        $this->tipo = $tipo;
        $this->precio_unitario = $precio_unitario;
    
    }   

    public function getInformacion() { 
        $informacionCompleta =  "codigo: " . $this->codigo . ", " . 
                                "nombre: " . $this->nombre . ", " . 
                                "color: " . $this->color . ", " . 
                                "tipo: " . $this->tipo . ", ".
                                "precio unitario: " . $this->precio_unitario;
            
        return $informacionCompleta;
    }
}

?>