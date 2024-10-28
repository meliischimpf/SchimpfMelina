<?php

require_once 'Producto.php';

class Limpieza extends Producto {

    public $formula_quimica;

    public function __construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen, $formula_quimica) {
        parent::__construct($id, $codigo, $descripcion, $cantidad, $precio_unitario, $marca, $pais_origen);
    
        $this->formula_quimica = $formula_quimica;

    }

   

    public function getInformacionLimpieza(){
        $informacionCompletaLimpieza =      "ID: " . $this->id . "</br>" . 
                                            "Código: " . $this->codigo . "</br>" . 
                                            "Descripcion: " . $this->descripcion . "</br>" .
                                            "Cantidad: " . $this->cantidad . "</br>" .
                                            "Precio Unitario: " . $this->precio_unitario . "</br>" .
                                            "Marca: " . $this->marca . "</br>" .
                                            "País de Origen: " . $this->pais_origen . "</br>" .
                                            "Fórmula Química: " . $this->formula_quimica . "</br>";
                    
        return $informacionCompletaLimpieza;
    }
}

?>