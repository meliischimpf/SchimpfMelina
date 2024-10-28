<?php

require_once "Clases/Producto.php";
require_once "Clases/Comida.php";
require_once "Clases/Bebida.php";
require_once "Clases/Limpieza.php";

$productos= [
    [
        "id"=> 1,
        "codigo"=> "001",
        "descripcion"=> "Arroz Integral",
        "cantidad"=> 50,
        "precio_unitario"=> 1.20,
        "marca"=> "Granos del Sur",
        "pais_origen"=> "Argentina",
        "peso"=> "1 kg"
    ],
    [
        "id"=> 2,
        "codigo"=> "001",
        "descripcion"=> "Lentejas",
        "cantidad"=> 30,
        "precio_unitario"=> 1.50,
        "marca"=> "NutriVida",
        "pais_origen"=> "Peru",
        "peso"=> "1 kg"
    ],
    [
        "id"=> 3,
        "codigo"=> "001",
        "descripcion"=> "Aceite de Oliva",
        "cantidad"=> 25,
        "precio_unitario"=> 3.00,
        "marca"=> "Oro Verde",
        "pais_origen"=> "Argentina",
        "peso"=> "500 ml"
    ],
    [
        "id"=> 4,
        "codigo"=> "001",
        "descripcion"=> "Salsa de Soja",
        "cantidad"=> 40,
        "precio_unitario"=> 2.00,
        "marca"=> "Sabor del Este",
        "pais_origen"=> "China",
        "peso"=> "250 ml"
    ],
    [
        "id"=> 5,
        "codigo"=> "001",
        "descripcion"=> "Harina de Trigo",
        "cantidad"=> 60,
        "precio_unitario"=> 0.80,
        "marca"=> "La Mejor",
        "pais_origen"=> "Argentina",
        "peso"=> "1 kg"
    ],
    [
        "id"=> 6,
        "codigo"=> "001",
        "descripcion"=> "Frijoles Negros",
        "cantidad"=> 45,
        "precio_unitario"=> 1.10,
        "marca"=> "Per  Sano",
        "pais_origen"=> "Peru",
        "peso"=> "1 kg"
    ],
    [
        "id"=> 7,
        "codigo"=> "001",
        "descripcion"=> "Queso Fresco",
        "cantidad"=> 20,
        "precio_unitario"=> 4.50,
        "marca"=> "Delicias",
        "pais_origen"=> "Argentina",
        "peso"=> "200 g"
    ],
    [
        "id"=> 8,
        "codigo"=> "001",
        "descripcion"=> "Az car",
        "cantidad"=> 70,
        "precio_unitario"=> 0.90,
        "marca"=> "Dulce Vida",
        "pais_origen"=> "Argentina",
        "peso"=> "1 kg"
    ],
    [
        "id"=> 9,
        "codigo"=> "001",
        "descripcion"=> "Galletas de Avena",
        "cantidad"=> 80,
        "precio_unitario"=> 2.50,
        "marca"=> "Snack Saludable",
        "pais_origen"=> "Canada",
        "peso"=> "400 g"
    ],
    [
        "id"=> 10,
        "codigo"=> "001",
        "descripcion"=> "Pasta de Tomate",
        "cantidad"=> 55,
        "precio_unitario"=> 1.75,
        "marca"=> "Sabor Natural",
        "pais_origen"=> "Argentina",
        "peso"=> "400 g"
    ],
    [
        "id"=> 11,
        "codigo"=> "001",
        "descripcion"=> "Cereal Integral",
        "cantidad"=> 35,
        "precio_unitario"=> 3.25,
        "marca"=> "Desayuno Saludable",
        "pais_origen"=> "Peru",
        "peso"=> "500 g"
    ],
    [
        "id"=> 12,
        "codigo"=> "002",
        "descripcion"=> "Agua Mineral",
        "cantidad"=> 100,
        "precio_unitario"=> 0.50,
        "marca"=> "Aguas del Sur",
        "pais_origen"=> "Argentina",
        "litros"=> 1
    ],
    [
        "id"=> 13,
        "codigo"=> "002",
        "descripcion"=> "Jugo de Naranja",
        "cantidad"=> 60,
        "precio_unitario"=> 2.00,
        "marca"=> "C trico Fresco",
        "pais_origen"=> "Peru",
        "litros"=> 1
    ],
    [
        "id"=> 14,
        "codigo"=> "002",
        "descripcion"=> "Cerveza Artesanal",
        "cantidad"=> 40,
        "precio_unitario"=> 4.00,
        "marca"=> "Cervezas del Norte",
        "pais_origen"=> "Canada",
        "litros"=> 0.5
    ],
    [
        "id"=> 15,
        "codigo"=> "002",
        "descripcion"=> "Refresco Cola",
        "cantidad"=> 75,
        "precio_unitario"=> 1.00,
        "marca"=> "Cola Global",
        "pais_origen"=> "Argentina",
        "litros"=> 2
    ],
    [
        "id"=> 16,
        "codigo"=> "002",
        "descripcion"=> "T  Fr o",
        "cantidad"=> 50,
        "precio_unitario"=> 1.75,
        "marca"=> "T  Natural",
        "pais_origen"=> "China",
        "litros"=> 1
    ],
    [
        "id"=> 17,
        "codigo"=> "002",
        "descripcion"=> "Vino Tinto",
        "cantidad"=> 30,
        "precio_unitario"=> 10.00,
        "marca"=> "Vinos del Sur",
        "pais_origen"=> "Argentina",
        "litros"=> 0.75
    ],
    [
        "id"=> 18,
        "codigo"=> "002",
        "descripcion"=> "Cerveza Rubia",
        "cantidad"=> 45,
        "precio_unitario"=> 3.50,
        "marca"=> "Rubia del R o",
        "pais_origen"=> "Canada",
        "litros"=> 0.5
    ],
    [
        "id"=> 19,
        "codigo"=> "002",
        "descripcion"=> "Sidra de Manzana",
        "cantidad"=> 25,
        "precio_unitario"=> 4.50,
        "marca"=> "Fruta Fresca",
        "pais_origen"=> "Peru",
        "litros"=> 1
    ],
    [
        "id"=> 20,
        "codigo"=> "002",
        "descripcion"=> "Limonada Natural",
        "cantidad"=> 80,
        "precio_unitario"=> 1.25,
        "marca"=> "Limonada del Huerto",
        "pais_origen"=> "Argentina",
        "litros"=> 1
    ],
    [
        "id"=> 21,
        "codigo"=> "003",
        "descripcion"=> "Detergente L quido",
        "cantidad"=> 60,
        "precio_unitario"=> 3.00,
        "marca"=> "Limpieza Total",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C12H22O11"
    ],
    [
        "id"=> 22,
        "codigo"=> "003",
        "descripcion"=> "Jab n en Barra",
        "cantidad"=> 80,
        "precio_unitario"=> 1.50,
        "marca"=> "Hogar Limpio",
        "pais_origen"=> "Peru",
        "formula_quimica"=> "C15H31COONa"
    ],
    [
        "id"=> 23,
        "codigo"=> "003",
        "descripcion"=> "Limpiador Multiusos",
        "cantidad"=> 50,
        "precio_unitario"=> 2.50,
        "marca"=> "Brillo Efectivo",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C6H7NaO3S"
    ],
    [
        "id"=> 24,
        "codigo"=> "003",
        "descripcion"=> "Desinfectante",
        "cantidad"=> 30,
        "precio_unitario"=> 4.00,
        "marca"=> "Salud y Limpieza",
        "pais_origen"=> "Canada",
        "formula_quimica"=> "C2H5Cl"
    ],
    [
        "id"=> 25,
        "codigo"=> "003",
        "descripcion"=> "Limpiador de Vidrios",
        "cantidad"=> 40,
        "precio_unitario"=> 2.00,
        "marca"=> "Cristales Brillantes",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C4H10O"
    ],
    [
        "id"=> 26,
        "codigo"=> "003",
        "descripcion"=> "Ambientador",
        "cantidad"=> 70,
        "precio_unitario"=> 1.75,
        "marca"=> "Aroma Natural",
        "pais_origen"=> "Peru",
        "formula_quimica"=> "C6H12O6"
    ],
    [
        "id"=> 27,
        "codigo"=> "003",
        "descripcion"=> "Limpiador de Pisos",
        "cantidad"=> 55,
        "precio_unitario"=> 3.50,
        "marca"=> "Pisos Brillantes",
        "pais_origen"=> "China",
        "formula_quimica"=> "C12H25SO4Na"
    ],
    [
        "id"=> 28,
        "codigo"=> "003",
        "descripcion"=> "Esponjas de Limpieza",
        "cantidad"=> 90,
        "precio_unitario"=> 0.50,
        "marca"=> "Limpieza F cil",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "N/A"
    ],
    [
        "id"=> 29,
        "codigo"=> "003",
        "descripcion"=> "Guantes de Limpieza",
        "cantidad"=> 100,
        "precio_unitario"=> 2.75,
        "marca"=> "Protecci n Total",
        "pais_origen"=> "Canada",
        "formula_quimica"=> "N/A"
    ],
    [
        "id"=> 30,
        "codigo"=> "001",
        "descripcion"=> "Mermelada de Durazno",
        "cantidad"=> 45,
        "precio_unitario"=> 3.25,
        "marca"=> "Dulce Fruto",
        "pais_origen"=> "Argentina",
        "peso"=> "400 g"
    ],
    [
        "id"=> 31,
        "codigo"=> "001",
        "descripcion"=> "Quinoa",
        "cantidad"=> 30,
        "precio_unitario"=> 2.20,
        "marca"=> "Super Foods",
        "pais_origen"=> "Peru",
        "peso"=> "500 g"
    ],
    [
        "id"=> 32,
        "codigo"=> "001",
        "descripcion"=> "Gelatina",
        "cantidad"=> 50,
        "precio_unitario"=> 1.00,
        "marca"=> "Color y Sabor",
        "pais_origen"=> "Argentina",
        "peso"=> "250 g"
    ],
    [
        "id"=> 33,
        "codigo"=> "001",
        "descripcion"=> "Sopa Instant nea",
        "cantidad"=> 40,
        "precio_unitario"=> 1.75,
        "marca"=> "Comida R pida",
        "pais_origen"=> "Canada",
        "peso"=> "100 g"
    ],
    [
        "id"=> 34,
        "codigo"=> "001",
        "descripcion"=> "Frutos Secos",
        "cantidad"=> 35,
        "precio_unitario"=> 4.00,
        "marca"=> "Snack Saludable",
        "pais_origen"=> "Argentina",
        "peso"=> "200 g"
    ],
    [
        "id"=> 35,
        "codigo"=> "002",
        "descripcion"=> "Bebida Energ tica",
        "cantidad"=> 60,
        "precio_unitario"=> 2.50,
        "marca"=> "Energ a Vital",
        "pais_origen"=> "Canada",
        "litros"=> 0.5
    ],
    [
        "id"=> 36,
        "codigo"=> "002",
        "descripcion"=> "T  Verde",
        "cantidad"=> 75,
        "precio_unitario"=> 2.00,
        "marca"=> "Salud Natural",
        "pais_origen"=> "China",
        "litros"=> 1
    ],
    [
        "id"=> 37,
        "codigo"=> "002",
        "descripcion"=> "Batido de Frutas",
        "cantidad"=> 30,
        "precio_unitario"=> 3.50,
        "marca"=> "Frutas Frescas",
        "pais_origen"=> "Argentina",
        "litros"=> 1
    ],
    [
        "id"=> 38,
        "codigo"=> "002",
        "descripcion"=> "Sidra Espumosa",
        "cantidad"=> 20,
        "precio_unitario"=> 5.00,
        "marca"=> "Burbujeante",
        "pais_origen"=> "Peru",
        "litros"=> 0.75
    ],
    [
        "id"=> 39,
        "codigo"=> "002",
        "descripcion"=> "Bebida de Caf ",
        "cantidad"=> 50,
        "precio_unitario"=> 2.75,
        "marca"=> "Caf  del Mundo",
        "pais_origen"=> "Canada",
        "litros"=> 0.5
    ],
    [
        "id"=> 40,
        "codigo"=> "003",
        "descripcion"=> "Desengrasante",
        "cantidad"=> 40,
        "precio_unitario"=> 3.50,
        "marca"=> "Fuerza Limpia",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C15H32"
    ],
    [
        "id"=> 41,
        "codigo"=> "003",
        "descripcion"=> "Limpiador de Ba os",
        "cantidad"=> 35,
        "precio_unitario"=> 2.00,
        "marca"=> "Higiene Total",
        "pais_origen"=> "Peru",
        "formula_quimica"=> "C8H9Cl"
    ],
    [
        "id"=> 42,
        "codigo"=> "001",
        "descripcion"=> "Pur  de Tomate",
        "cantidad"=> 60,
        "precio_unitario"=> 1.80,
        "marca"=> "Sabor del Huerto",
        "pais_origen"=> "Argentina",
        "peso"=> "400 g"
    ],
    [
        "id"=> 43,
        "codigo"=> "001",
        "descripcion"=> "Pa ales Ecol gicos",
        "cantidad"=> 25,
        "precio_unitario"=> 4.50,
        "marca"=> "Cuidado Verde",
        "pais_origen"=> "Canada",
        "peso"=> "10 unidades"
    ],
    [
        "id"=> 44,
        "codigo"=> "002",
        "descripcion"=> "Caf  Instant neo",
        "cantidad"=> 50,
        "precio_unitario"=> 5.00,
        "marca"=> "Caf  R pido",
        "pais_origen"=> "Peru",
        "litros"=> 0.5
    ],
    [
        "id"=> 45,
        "codigo"=> "003",
        "descripcion"=> "Desinfectante de Manos",
        "cantidad"=> 60,
        "precio_unitario"=> 3.00,
        "marca"=> "Higiene Personal",
        "pais_origen"=> "China",
        "formula_quimica"=> "C3H8O"
    ],
    [
        "id"=> 46,
        "codigo"=> "003",
        "descripcion"=> "Limpiador para Cocina",
        "cantidad"=> 50,
        "precio_unitario"=> 3.25,
        "marca"=> "Cocina Brillante",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C2H5OH"
    ],
    [
        "id"=> 47,
        "codigo"=> "001",
        "descripcion"=> "Tortillas de Ma z",
        "cantidad"=> 40,
        "precio_unitario"=> 2.50,
        "marca"=> "Sabor Mexicano",
        "pais_origen"=> "Peru",
        "peso"=> "500 g"
    ],
    [
        "id"=> 48,
        "codigo"=> "001",
        "descripcion"=> "Mantequilla",
        "cantidad"=> 30,
        "precio_unitario"=> 3.00,
        "marca"=> "Crema del Campo",
        "pais_origen"=> "Argentina",
        "peso"=> "250 g"
    ],
    [
        "id"=> 49,
        "codigo"=> "002",
        "descripcion"=> "Bebida de Coco",
        "cantidad"=> 20,
        "precio_unitario"=> 3.00,
        "marca"=> "Coco Loco",
        "pais_origen"=> "Canada",
        "litros"=> 1
    ],
    [
        "id"=> 50,
        "codigo"=> "002",
        "descripcion"=> "Agua de Coco",
        "cantidad"=> 40,
        "precio_unitario"=> 2.50,
        "marca"=> "Coco Fresh",
        "pais_origen"=> "Peru",
        "litros"=> 1
    ],
    [
        "id"=> 51,
        "codigo"=> "003",
        "descripcion"=> "Limpiador de Alfombras",
        "cantidad"=> 30,
        "precio_unitario"=> 5.00,
        "marca"=> "Alfombras Limpias",
        "pais_origen"=> "Argentina",
        "formula_quimica"=> "C6H12O6"
    ],
    [
        "id"=> 52,
        "codigo"=> "001",
        "descripcion"=> "Choclo en Grano",
        "cantidad"=> 50,
        "precio_unitario"=> 1.50,
        "marca"=> "Delicias del Campo",
        "pais_origen"=> "Argentina",
        "peso"=> "400 g"
    ],
    [
        "id"=> 53,
        "codigo"=> "001",
        "descripcion"=> "Pepinos en Vinagre",
        "cantidad"=> 20,
        "precio_unitario"=> 2.00,
        "marca"=> "Sabor Tradicional",
        "pais_origen"=> "Peru",
        "peso"=> "500 g"
    ]
];


$id = $_POST['numero'];
//var_dump($id); 


  foreach ($productos as $data) {
    if (($data['id'] == $id) && ($data['codigo'] == "001")) {
            $comida = new Comida($data['id'], $data['codigo'], $data['descripcion'], $data['cantidad'], $data['precio_unitario'], $data['marca'],  $data['pais_origen'],  $data['peso']);
            
            echo "<b>Comida </b></br>";
            echo $comida->getInformacionComida();
            echo "</br>";

    } elseif (($data['id'] == $id) && ($data['codigo'] == "002")) {
            $bebida = new Bebida($data['id'], $data['codigo'], $data['descripcion'], $data['cantidad'], $data['precio_unitario'], $data['marca'],  $data['pais_origen'],  $data['litros']);
            
            echo "<b>Bebida </b></br>";
            echo $bebida->getInformacionBebida();
            echo "</br>";

    } elseif (($data['id'] == $id) && ($data['codigo'] == "003")) {
            $limpieza = new Limpieza($data['id'], $data['codigo'], $data['descripcion'], $data['cantidad'], $data['precio_unitario'], $data['marca'],  $data['pais_origen'],  $data['formula_quimica']);
            
            echo "<b>Limpieza </b></br>";
            echo $limpieza->getInformacionLimpieza();
            echo "</br>";

    }    
}

?>