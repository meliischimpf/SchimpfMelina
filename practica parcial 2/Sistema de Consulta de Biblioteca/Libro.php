<?php

Class Libro {
public $titulo;
public $autor;
public $anio;
public $genero;
protected $codigo;


public function __construct ($titulo, $autor, $anio, $genero, $codigo){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
        $this->genero = $genero;
        $this->codigo = $codigo;
    }


public function getInformacion(){

        $infoCompleta = $this->titulo . ", " . 
                        $this->autor . ", " . 
                        $this->anio . ", " .
                        $this->genero . ", " . 
                        $this->codigo;

        return $infoCompleta;
    }

}

?>