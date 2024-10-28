<?php

require_once 'Producto.php';

class Comida extends Producto {

    public $peso;

    public function __construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen, $peso) {
        parent::__construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen);
    
        $this->peso = $peso;

    }

   

    public function getInformacionComida(){
        $informacionCompletaComida =        "ID: " . $this->id . "</br>" . 
                                            "Código: " . $this->codigo . "</br>" . 
                                            "Descripcion: " . $this->descripcion . "</br>" .
                                            "Cantidad: " . $this->cantidad . "</br>" .
                                            "Precio Unitario: " . $this->precio_unitario . "</br>" .
                                            "Marca: " . $this->marca . "</br>" .
                                            "País de Origen: " . $this->pais_origen . "</br>" .
                                            "Peso: " . $this->peso . "</br>";
                    
        return $informacionCompletaComida;
    }
}

?>