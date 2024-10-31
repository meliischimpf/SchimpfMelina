<?php

class Instituciones {
    
    public $id;
    public $nombre;
    public $direccion;
    public $telefono;
    public $correo_electronico;
    


    public function __construct ($id, $nombre, $direccion, $telefono, $correo_electronico){

        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;
        $this -> correo_electronico = $correo_electronico;

    }

}

?>