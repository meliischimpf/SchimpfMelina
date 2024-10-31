<?php

class Profesor {
    
    public $id;
    public $nombre;
    public $apellido;
    public $correo_electronico;
    public $telefono;
    public $departamento;

    public function __construct ($id, $nombre, $apellido, $correo_electronico, $telefono, $departamento){

        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo_electronico = $correo_electronico;
        $this -> telefono = $telefono;
        $this -> departamento = $departamento;

    }
   
}

?>
































}