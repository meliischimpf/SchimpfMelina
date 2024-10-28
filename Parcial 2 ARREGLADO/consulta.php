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
        'tamaño' => "grande",
        'vacuna' => []
    ],
    [
        'id' => 7,
        'nombre' => "Buddy",
        "edad" => 4,
         "tipo" => "perro",
         "raza" => "Golden Retriever",
         "peso" => 28,
         "tamaño" => "grande",
         'vacuna' => []
     ],
     [
         "id" => 8,
         "nombre" => "Max",
         "edad" => 6,
         "tipo" => "perro",
         "raza" => "Bulldog",
         "peso" => 25,
         "tamaño" => "mediano",
         'vacuna' => []
     ],
     [
         "id" => 9,
         "nombre" => "Rocky",
         "edad" => 3,
         "tipo" => "perro",
         "raza" => "Beagle",
         "peso" => 12,
         "tamaño" => "pequeño",
         'vacuna' => []
     ],
     [
         "id" => 10,
         "nombre" => "Charlie",
         "edad" => 2,
         "tipo" => "perro",
         "raza" => "Dálmata",
         "peso" => 24,
         "tamaño" => "mediano",
         'vacuna' => []
     ]
];


$id = $_POST['id'];

//var_dump($_POST);

foreach ($animales as $data) {
    if ($data['id'] == $id) {
        if ($data['tipo'] == 'gato') {
            $gato = new Gato($data['id'], $data['nombre'], $data['edad'], $data['tipo'], $data['raza'], $data['peso'], $data['pelajeLargo'], $data['comportamiento']);
        
            echo $gato->getInformacionGato();
                $gato->cambiarComportamiento('tranquilo');
            echo "nuevo comportamiento: " . $gato->mostrarComportamiento();
        
        } else if ($data['tipo'] == 'perro') {
            $perro = new Perro($data['id'], $data['nombre'], $data['edad'], $data['tipo'], $data['raza'], $data['peso'], $data['tamaño'], $data['vacuna']);
        
            echo $perro->getInformacionPerro();
                $perro->vacunar('moquillo');
            echo $perro->mostrarVacunas();
        } else {
            echo "Animal no encontrado";
    }
}

}

    


?>