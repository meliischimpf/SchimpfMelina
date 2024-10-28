<?php

require_once 'Producto.php';

class Bebida extends Producto {

    public $litros;

    public function __construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen, $litros) {
        parent::__construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen);
    
        $this->litros = $litros;

    }

   

    public function getInformacionBebida(){
        $informacionCompletaBebida =    "ID: " . $this->id . "</br>" . 
                                        "Código: " . $this->codigo . "</br>" . 
                                        "Descripcion: " . $this->descripcion . "</br>" .
                                        "Cantidad: " . $this->cantidad . "</br>" .
                                        "Precio Unitario: " . $this->precio_unitario . "</br>" .
                                        "Marca: " . $this->marca . "</br>" .
                                        "País de Origen: " . $this->pais_origen . "</br>" .
                                        "Litros: " . $this->litros . "</br>";
                    
        return $informacionCompletaBebida;
    }
}

?>