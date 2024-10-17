<?php
require_once 'trait.php';

class Alumno {

    use notificar;

    public $id;
    public $nombre;
    public $apellido;
    public $dni;
    public $edad;
    public $email;
    public $notas;

    public function __construct($id, $nombre, $apellido, $dni, $edad, $email, $notas) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->email = $email;
        $this->notas = $notas;
    }

    public function infoAlumno(){
        $infoCompleta = $this->nombre . ", " .
                        $this->apellido . ", " .
                        $this->dni . ", " .
                        $this->edad . ", " .
                        $this->email . "</br>";

        return $infoCompleta;
    }
    
    public function mostrarNotas() {
       
        $notasMateria = '';
        foreach ($this->notas as $materia => $nota) {
            $notasMateria .= "$materia: $nota - ";
        }
        return $notasMateria;
    }
}

?>




