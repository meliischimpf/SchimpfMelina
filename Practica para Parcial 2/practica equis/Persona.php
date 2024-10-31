<?php



class Persona {
    protected $nombre;
    protected $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre() {
        $nombre_completo = $this->nombre . " " . $this->apellido;
        return $nombre_completo;
    }
}

?>