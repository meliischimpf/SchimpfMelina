<?php

require_once 'Libro.php';

$libros = [ ['titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'anio' => 1967, 'genero' => 'Novela', 'codigo' => '001'],
['titulo' => '1984', 'autor' => 'George Orwell', 'anio' => 1949, 'genero' => 'Distopía', 'codigo' => '002'],
['titulo' => 'El Principito', 'autor' => 'Antoine de Saint-Exupéry', 'anio' => 1943, 'genero' => 'Fábula', 'codigo' => '003'],
['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'anio' => 1605, 'genero' => 'Novela', 'codigo' => '004'],
['titulo' => 'La sombra del viento', 'autor' => 'Carlos Ruiz Zafón', 'anio' => 2001, 'genero' => 'Novela', 'codigo' => '005'],];


class Consulta {

    private $libros;

    public function __construct($libros) {
    
        $this->libros = $libros;
    }

    public function buscarPorTitulo($titulo) {
        foreach ($this->libros as $data) {
            if (stripos($data['titulo'], $titulo) !== false) {
                
                return new Libro($data['titulo'], $data['autor'], $data['anio'], $data['genero'], $data['codigo']);
            }
        }
        return null;
    }

    public function buscarPorAutor($autor) {
        foreach ($this->libros as $data) {
            if (stripos($data['autor'], $autor) !== false) { 

                return new Libro($data['titulo'], $data['autor'], $data['anio'], $data['genero'], $data['codigo']);
            }
        }
        return null;
    }
}

$nombre = $_POST['nombre'];  

$consulta = new Consulta($libros);

$libroEncontrado = $consulta->buscarPorTitulo($nombre);

if (!$libroEncontrado) {
    $libroEncontrado = $consulta->buscarPorAutor($nombre);
}

if ($libroEncontrado) {
    echo $libroEncontrado->getInformacion();
} else {
    echo "No se encontró ningún libro compatible.";
}

?>
