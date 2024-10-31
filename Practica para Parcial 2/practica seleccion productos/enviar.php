<?php

require_once "Producto.php";
require_once "Comida.php";
require_once "Bebida.php";
require_once "Limpieza.php";

$productos = [
    [
        'id' => 1,
        'codigo' => '001',
        'descripcion' => 'Arroz Integral',
        'cantidad' => 50,
        'precio_unitario' => 1.20,
        'marca' => 'Granos del Sur',
        'pais_origen' => 'Argentina',
        'peso' => '1 kg'
    ],
    [
        'id' => 2,
        'codigo' => '001',
        'descripcion' => 'Lentejas',
        'cantidad' => 30,
        'precio_unitario' => 1.50,
        'marca' => 'NutriVida',
        'pais_origen' => 'Peru',
        'peso' => '1 kg'
    ],
    [
        'id' => 3,
        'codigo' => '001',
        'descripcion' => 'Aceite de Oliva',
        'cantidad' => 25,
        'precio_unitario' => 3.00,
        'marca' => 'Oro Verde',
        'pais_origen' => 'Argentina',
        'peso' => '500 ml'
    ],
    [
        'id' => 4,
        'codigo' => '001',
        'descripcion' => 'Salsa de Soja',
        'cantidad' => 40,
        'precio_unitario' => 2.00,
        'marca' => 'Sabor del Este',
        'pais_origen' => 'China',
        'peso' => '250 ml'
    ],
    [
        'id' => 5,
        'codigo' => '001',
        'descripcion' => 'Harina de Trigo',
        'cantidad' => 60,
        'precio_unitario' => 0.80,
        'marca' => 'La Mejor',
        'pais_origen' => 'Argentina',
        'peso' => '1 kg'
    ],
    [
        'id' => 6,
        'codigo' => '001',
        'descripcion' => 'Frijoles Negros',
        'cantidad' => 45,
        'precio_unitario' => 1.10,
        'marca' => 'Perú Sano',
        'pais_origen' => 'Peru',
        'peso' => '1 kg'
    ],
    [
        'id' => 7,
        'codigo' => '001',
        'descripcion' => 'Queso Fresco',
        'cantidad' => 20,
        'precio_unitario' => 4.50,
        'marca' => 'Delicias',
        'pais_origen' => 'Argentina',
        'peso' => '200 g'
    ],
    [
        'id' => 8,
        'codigo' => '001',
        'descripcion' => 'Azúcar',
        'cantidad' => 70,
        'precio_unitario' => 0.90,
        'marca' => 'Dulce Vida',
        'pais_origen' => 'Argentina',
        'peso' => '1 kg'
    ],
    [
        'id' => 9,
        'codigo' => '001',
        'descripcion' => 'Galletas de Avena',
        'cantidad' => 80,
        'precio_unitario' => 2.50,
        'marca' => 'Snack Saludable',
        'pais_origen' => 'Canada',
        'peso' => '400 g'
    ],
    [
        'id' => 10,
        'codigo' => '001',
        'descripcion' => 'Pasta de Tomate',
        'cantidad' => 55,
        'precio_unitario' => 1.75,
        'marca' => 'Sabor Natural',
        'pais_origen' => 'Argentina',
        'peso' => '400 g'
    ],
    [
        'id' => 11,
        'codigo' => '001',
        'descripcion' => 'Cereal Integral',
        'cantidad' => 35,
        'precio_unitario' => 3.25,
        'marca' => 'Desayuno Saludable',
        'pais_origen' => 'Peru',
        'peso' => '500 g'
    ],
    [
        'id' => 12,
        'codigo' => '002',
        'descripcion' => 'Agua Mineral',
        'cantidad' => 100,
        'precio_unitario' => 0.50,
        'marca' => 'Aguas del Sur',
        'pais_origen' => 'Argentina',
        'litros' => 1
    ],
    [
        'id' => 13,
        'codigo' => '002',
        'descripcion' => 'Jugo de Naranja',
        'cantidad' => 60,
        'precio_unitario' => 2.00,
        'marca' => 'Cítrico Fresco',
        'pais_origen' => 'Peru',
        'litros' => 1
    ],
    [
        'id' => 14,
        'codigo' => '002',
        'descripcion' => 'Cerveza Artesanal',
        'cantidad' => 40,
        'precio_unitario' => 4.00,
        'marca' => 'Cervezas del Norte',
        'pais_origen' => 'Canada',
        'litros' => 0.5
    ],
    [
        'id' => 15,
        'codigo' => '002',
        'descripcion' => 'Refresco Cola',
        'cantidad' => 75,
        'precio_unitario' => 1.00,
        'marca' => 'Cola Global',
        'pais_origen' => 'Argentina',
        'litros' => 2
    ],
    [
        'id' => 16,
        'codigo' => '002',
        'descripcion' => 'Té Frío',
        'cantidad' => 50,
        'precio_unitario' => 1.75,
        'marca' => 'Té Natural',
        'pais_origen' => 'China',
        'litros' => 1
    ],
    [
        'id' => 17,
        'codigo' => '002',
        'descripcion' => 'Vino Tinto',
        'cantidad' => 30,
        'precio_unitario' => 10.00,
        'marca' => 'Vinos del Sur',
        'pais_origen' => 'Argentina',
        'litros' => 0.75
    ],
    [
        'id' => 18,
        'codigo' => '002',
        'descripcion' => 'Cerveza Rubia',
        'cantidad' => 45,
        'precio_unitario' => 3.50,
        'marca' => 'Rubia del Río',
        'pais_origen' => 'Canada',
        'litros' => 0.5
    ],
    [
        'id' => 19,
        'codigo' => '002',
        'descripcion' => 'Sidra de Manzana',
        'cantidad' => 25,
        'precio_unitario' => 4.50,
        'marca' => 'Fruta Fresca',
        'pais_origen' => 'Peru',
        'litros' => 1
    ],
    [
        'id' => 20,
        'codigo' => '002',
        'descripcion' => 'Limonada Natural',
        'cantidad' => 80,
        'precio_unitario' => 1.25,
        'marca' => 'Limonada del Huerto',
        'pais_origen' => 'Argentina',
        'litros' => 1
    ],
    [
        'id' => 21,
        'codigo' => '003',
        'descripcion' => 'Detergente Líquido',
        'cantidad' => 60,
        'precio_unitario' => 3.00,
        'marca' => 'Limpieza Total',
        'pais_origen' => 'Argentina',
        'formula_quimica' => 'C12H22O11'
    ],
    [
        'id' => 22,
        'codigo' => '003',
        'descripcion' => 'Jabón en Barra',
        'cantidad' => 80,
        'precio_unitario' => 1.50,
        'marca' => 'Hogar Limpio',
        'pais_origen' => 'Peru',
        'formula_quimica' => 'C15H31COONa'
    ],
    [
        'id' => 23,
        'codigo' => '003',
        'descripcion' => 'Limpiador Multiusos',
        'cantidad' => 50,
        'precio_unitario' => 2.50,
        'marca' => 'Brillo Efectivo',
        'pais_origen' => 'Argentina',
        'formula_quimica' => 'C6H7NaO3S'
    ],
    [
        'id' => 24,
        'codigo' => '003',
        'descripcion' => 'Desinfectante',
        'cantidad' => 30,
        'precio_unitario' => 4.00,
        'marca' => 'Salud y Limpieza',
        'pais_origen' => 'Canada',
        'formula_quimica' => 'C2H5Cl'
    ],
    [
        'id' => 25,
        'codigo' => '003',
        'descripcion' => 'Ambientador',
        'cantidad' => 45,
        'precio_unitario' => 2.00,
        'marca' => 'Aroma Natural',
        'pais_origen' => 'Peru',
        'formula_quimica' => 'C10H12O2'
    ],
    [
        'id' => 26,
        'codigo' => '003',
        'descripcion' => 'Esponja de Cocina',
        'cantidad' => 100,
        'precio_unitario' => 0.50,
        'marca' => 'Práctica',
        'pais_origen' => 'Argentina',
        'formula_quimica' => 'N/A'
    ],
    [
        'id' => 27,
        'codigo' => '003',
        'descripcion' => 'Guantes de Limpieza',
        'cantidad' => 70,
        'precio_unitario' => 3.50,
        'marca' => 'Protección',
        'pais_origen' => 'Argentina',
        'formula_quimica' => 'N/A'
    ],
    [
        'id' => 28,
        'codigo' => '003',
        'descripcion' => 'Toallitas de Limpieza',
        'cantidad' => 80,
        'precio_unitario' => 2.25,
        'marca' => 'Limpieza Rápida',
        'pais_origen' => 'Peru',
        'formula_quimica' => 'N/A'
    ],
    [
        'id' => 29,
        'codigo' => '003',
        'descripcion' => 'Cepillo para Platos',
        'cantidad' => 55,
        'precio_unitario' => 1.00,
        'marca' => 'Práctico',
        'pais_origen' => 'Argentina',
        'formula_quimica' => 'N/A'
    ],
    [
        'id' => 30,
        'codigo' => '003',
        'descripcion' => 'Bolsa de Basura',
        'cantidad' => 100,
        'precio_unitario' => 0.30,
        'marca' => 'Eco Amigable',
        'pais_origen' => 'Peru',
        'formula_quimica' => 'N/A'
    ]
];



    $id = $_POST['id'];
    //var_dump($id); 

    foreach ($productos as $data) {
        if ($data['id'] == $id) {
           
            $producto = new Producto($data['id'], $data['codigo'], $data['descripcion'], $data['cantidad'], $data['precio_unitario'], $data['marca'], $data['pais_origen']);
          
            echo $producto->getInfoProducto();

            if ($data['pais_origen'] == 'Argentina') {
                echo "<b>Industria Nacional</b>";
            }
        } 
}



?>