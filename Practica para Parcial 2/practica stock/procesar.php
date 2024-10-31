<?php

require_once "Producto.php";
require_once "ProductoPerecedero.php";
require_once "ProductoNoPerecedero.php";
require_once "Trait.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigoBuscado = $_POST["codigo"];

        $productos = [
            [
                'nombre' => 'Leche',
                'precio' => 1.50,
                'cantidad' => 10,
                'codigo' => 'P001',
                'tipo' => 'perecedero',
                'fechaDeVencimiento' => '2024-10-30'
            ],
            [
                'nombre' => 'Yogur',
                'precio' => 0.80,
                'cantidad' => 15,
                'codigo' => 'P002',
                'tipo' => 'perecedero',
                'fechaDeVencimiento' => '2024-11-05'
            ],
            [
                'nombre' => 'Arroz',
                'precio' => 2.00,
                'cantidad' => 5,
                'codigo' => 'P003',
                'tipo' => 'no perecedero',
                'fechaDeVencimiento' => null
            ],
        [
                'nombre' => 'Azúcar',
                'precio' => 1.20,
                'cantidad' => 20,
                'codigo' => 'P004',
                'tipo' => 'no perecedero',
                'fechaDeVencimiento' => null
            ],
            [
                'nombre' => 'Pan',
                'precio' => 1.00,
                'cantidad' => 8,
                'codigo' => 'P005',
                'tipo' => 'perecedero',
                'fechaDeVencimiento' => '2024-10-25'
            ],
            [
                'nombre' => 'Tomate',
                'precio' => 0.90,
                'cantidad' => 12,
                'codigo' => 'P006',
                'tipo' => 'perecedero',
                'fechaDeVencimiento' => '2024-10-20'
            ],
            [
                'nombre' => 'Galletas',
                'precio' => 2.50,
                'cantidad' => 30,
                'codigo' => 'P007',
                'tipo' => 'no perecedero',
                'fechaDeVencimiento' => null
            ],
            [
                'nombre' => "Pasta",
                'precio' => 1.75,
                'cantidad' => 25,
                'codigo' => "P008",
                "tipo" => "no perecedero",
                "fechaDeVencimiento" => null
            ],
        [
                "nombre" => "Jugo de Naranja",
                "precio" => 1.30,
                "cantidad" => 7,
                "codigo" => "P009",
                "tipo" => "perecedero",
                "fechaDeVencimiento" => "2024-11-01"
            ],
            [
               "nombre" => "Queso",
               "precio" => 3.00,
               "cantidad" => 5,
               "codigo" => "P010",
               "tipo" => "perecedero",
               "fechaDeVencimiento" => "2024-10-28"
           ],
        [
               "nombre" => "Sal",
               "precio" => 0.50,
               "cantidad" => 50,
               "codigo" => "P011",
               "tipo" => "no perecedero",
               "fechaDeVencimiento" => null
           ],
           [
               "nombre" => "Aceite de Oliva",
               "precio" => 4.00,
               "cantidad" => 12,
               "codigo" => "P012",
               "tipo" => "no perecedero",
               "fechaDeVencimiento" => null
           ],
           [
               "nombre" =>'Mantequilla',
               "precio"=>2.20,
               "cantidad"=>6,
               "codigo"=>"P013",
               "tipo"=>"perecedero",
               "fechaDeVencimiento"=>"2024-11-15"
           ], [
              'nombre'=>'Cereal',
              'precio'=>3.50,
              'cantidad'=>20,
              'codigo'=>'P014',
              'tipo'=> 'no perecedero',
              'fechaDeVencimiento'=>null
           ],
           [
              'nombre'=>'Frijoles',
              'precio'=>2.40,
              'cantidad'=>15,
              'codigo'=>'P015',
              'tipo'=>'no perecedero',
              'fechaDeVencimiento'=>null
           ],
           [
              'nombre'=>'Batata',
              'precio'=>1.60,
              'cantidad'=>10,
              'codigo'=>'P016',
              'tipo'=>'perecedero',
              'fechaDeVencimiento'=>'2024-10-22'
           ],
           [
              'nombre'=>'Cebolla',
              'precio'=>0.75,
              'cantidad'=>18,
              'codigo'=>'P017',
              'tipo'=>'perecedero',
              'fechaDeVencimiento'=>'2024-10-29'
           ],
           [
              'nombre'=>'Sopa Instantánea',
              'precio'=>1.90, 
              'cantidad'=>25, 
              'codigo'=>'P018', 
              'tipo'=>'no perecedero', 
              'fechaDeVencimiento'=>null
           ],
           [
             'nombre'=>'Mermelada', 
             'precio'=>2.80, 
             'cantidad'=>14, 
             'codigo'=>'P019', 
             'tipo'=>'no perecedero', 
             'fechaDeVencimiento'=>null
           ],
           [
             "nombre"=>'Helado', 
             "precio"=>3.50, 
             "cantidad"=>8, 
             "codigo"=>'P020', 
             "tipo"=>'perecedero', 
             "fechaDeVencimiento"=>'2024-11-10'
           ]
        ];
        
        
        $cajaPerecederos = [];
        $cajaNoPerecederos = [];

    foreach ($productos as $data) {
        if ($data['codigo'] == $codigoBuscado) {
            $productoEncontrado = $data;
            break;
        }
    }

    foreach ($productos as $data) {
        if ($data['tipo'] === 'perecedero') {
            $producto = new ProductoPerecedero($data['nombre'], $data['precio'], $data['cantidad'], $data['codigo'], $data['tipo'], $data['fechaDeVencimiento']);
            $cajaPerecederos[] = $producto;
        } else {
            $producto = new ProductoNoPerecedero($data['nombre'], $data['precio'], $data['cantidad'], $data['codigo'], $data['tipo']);
            $cajaNoPerecederos[] = $producto;
        }
    }

    $productoEncontrado = null;

    foreach ($cajaPerecederos as $producto) {
        if ($producto->codigo === $codigoBuscado) {
            $productoEncontrado = $producto;
            break;
        }
    }

    if (!$productoEncontrado) {
        foreach ($cajaNoPerecederos as $producto) {
            if ($producto->codigo === $codigoBuscado) {
                $productoEncontrado = $producto;
                break;
            }
        }
    }

    if ($productoEncontrado) {
        echo $productoEncontrado->getInfoProducto();
    
        if ($productoEncontrado->tipo === 'perecedero') {
            $fechaActual = new DateTime();
            $fechaVencimiento = new DateTime($productoEncontrado->fechaDeVencimiento);
            echo "Fecha de Vencimiento: {$productoEncontrado->fechaDeVencimiento}<br>";
            
            if ($fechaVencimiento < $fechaActual) {
                echo "El producto ha vencido.";
            } else {
                echo "El producto está disponible.";
            }
        } else {
            if ($productoEncontrado->cantidad < 5) {
                echo "Necesita reabastecimiento.";
            } else {
                echo "No necesita reabastecimiento.";
            }
        }
    } else {
        echo "Producto no encontrado.";
    }
}    

?>