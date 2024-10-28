<?php

class Producto {
    public $id;
    public $codigo;
    public $descripcion;
    public $cantidad;
    public $precio_unitario;
    public $marca;
    public $pais_origen;

    public function __construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
        $this->precio_unitario = $precio_unitario;
        $this->marca = $marca;
        $this->pais_origen = $pais_origen;
    }



    public function getInfoProducto() {
            $informacionCompleta =  "ID: " . $this->id . "</br>" . 
                                    "Código: " . $this->codigo . "</br>" . 
                                    "Descripcion: " . $this->descripcion . "</br>" .
                                    "Cantidad: " . $this->cantidad . "</br>" .
                                    "Precio Unitario: " . $this->precio_unitario . "</br>" .
                                    "Marca: " . $this->marca . "</br>" .
                                    "País de Origen: " . $this->pais_origen . "</br>";
                
            return $informacionCompleta;

    }
}
?>