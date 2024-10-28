<?php

require_once 'Animal.php';
require_once 'Perro.php';
require_once 'Gato.php';

$animales = [
    [
        'id' => 1,
        'nombre' => 'Miau',
        'edad' => 3,
        'tipo' => 'gato',
        'raza' => 'Siames',
        'peso' => 4,
        'pelajeLargo' => false,
        'comportamiento' => 'tranquilo'
    ],
    [
        'id' => 2,
        'nombre' => 'Oliver',
        'edad' => 4,
        'tipo' => 'gato',
        'raza' => 'Maine Coon',
        'peso' => 7,
        'pelajeLargo' => true,
        'comportamiento' => 'juguetón'
    ],
    [
        'id' => 3,
        'nombre' => 'Chester',
        'edad' => 3,
        'tipo' => 'gato',
        'raza' => 'British Shorthair',
        'peso' => 8,
        'pelajeLargo' => false,
        'comportamiento' => 'tranquilo'
    ],
    [
        'id' => 4,
        'nombre' => 'Bella',
        'edad' => 2,
        'tipo' => 'gato',
        'raza' => 'Sphynx',
        'peso' => 3,
        'pelajeLargo' => false,
        'comportamiento' => 'juguetón'
    ],
    [
        'id' => 5,
        'nombre' => 'Shadow',
        'edad' => 3,
        'tipo' => 'gato',
        'raza' => 'Ragdoll',
        'peso' => 6,
        'pelajeLargo' => true,
        'comportamiento' => 'tranquilo'
    ],



    [
        'id' => 6,
        'nombre' => 'Rex',
        'edad' => 5,
        'tipo' => 'perro',
        'raza' => 'Pastor Alemán',
        'peso' => 30,
        'tamaño' => "grande"
    ],
    [
        'id' => 7,
        'nombre' => "Buddy",
        "edad" => 4,
         "tipo" => "perro",
         "raza" => "Golden Retriever",
         "peso" => 28,
         "tamaño" => "grande"
     ],
     [
         "id" => 8,
         "nombre" => "Max",
         "edad" => 6,
         "tipo" => "perro",
         "raza" => "Bulldog",
         "peso" => 25,
         "tamaño" => "mediano"
     ],
     [
         "id" => 9,
         "nombre" => "Rocky",
         "edad" => 3,
         "tipo" => "perro",
         "raza" => "Beagle",
         "peso" => 12,
         "tamaño" => "pequeño"
     ],
     [
         "id" => 10,
         "nombre" => "Charlie",
         "edad" => 2,
         "tipo" => "perro",
         "raza" => "Dálmata",
         "peso" => 24,
         "tamaño" => "mediano"
     ]
];



class Consulta{

    public $animales;
    
    public function __construct($animales){
        $this->animales = $animales;
    }

    public function busquedaID($id){
        //var_dump($this->animales);
        foreach ($this->animales as $data){
            if (($data['id'] == $id) && ($data['tipo'] === "gato")){
            //return new Animal($data['id'], $data['nombre'], $data['edad'], $data['tipo'], $data['raza'], $data['peso']);  
            
                return $gato = new Gato ($data['id'], $data['nombre'], $data['edad'], $data['tipo'], $data['raza'], $data['peso'], $data['pelajeLargo'], $data['comportamiento']);
            
            } else if (($data['id'] == $id) && ($data['tipo'] === "perro")){
                return $perro = new Perro ($data['id'], $data['nombre'], $data['edad'], $data['tipo'], $data['raza'], $data['peso'], $data['tamaño'], '');
                }
            }                
        return null;

    }

}

//var_dump($_POST);

$id = $_POST['id'];

$consulta = new Consulta($animales);

$animalEncontrado = $consulta->busquedaID($id);

if ($animalEncontrado){

    
    echo $animalEncontrado->getInformacion();
    
        $nuevoComportamiento = 'tranquilo'; 
    echo $animalEncontrado->getInformacionGato();
    echo $animalEncontrado->cambiarComportamiento($nuevoComportamiento);
    echo $animalEncontrado->mostrarComportamiento();

    echo $animalEncontrado->getInformacionPerro();
    echo $vacunas = ['parvo', 'moquillo'];
    echo $animalEncontrado->mostrarVacunas($vacunas);
}
    


?>