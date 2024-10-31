<?php

class Persona {
    
    public function __construct(
    public $nombre, public $apellido, public $mail,  public $telefono, 
    public $fecha_nacimiento, public $dni, public $localidad, public $provincia, public $monto) {
    $fecha = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento);
    $this->fecha_nacimiento = $fecha->format('d-m-Y');

    }



    public function infoPersona(){

        return 
                "<h3>Bienvenido  {$this->nombre} {$this->apellido}</h3>";
    }

    public function infoCuenta(){

        return 
                "<strong>Fecha de Nacimiento: </strong> {$this->fecha_nacimiento}<br>
                <strong>DNI: </strong> {$this->dni}<br>
                <strong>Localidad: </strong> {$this->localidad}<br>
                <strong>Provincia: </strong> {$this->provincia}<br>
                <strong>Teléfono: </strong> {$this->telefono}<br>
                <strong>Mail: </strong> {$this->mail}<br>";
    }


}


?>