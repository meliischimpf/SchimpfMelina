<?php

require_once "Clases/Producto.php";
require_once "Clases/Comida.php";
require_once "Clases/Bebida.php";

$productos = [
    ["codigo" => "001", "nombre" => "Manzana", "color" => "Rojo", "tipo" => "comida", "precio_unitario" => 1.50, "peso" => "200g", "litro" => null],
    ["codigo" => "001", "nombre" => "Pan", "color" => "Blanco", "tipo" => "comida", "precio_unitario" => 2.00, "peso" => "500g", "litro" => null],
    ["codigo" => "002", "nombre" => "Agua Mineral", "color" => "Transparente", "tipo" => "bebida", "precio_unitario" => 1.20, "peso" => null, "litro" => "1.5L"],
    ["codigo" => "001", "nombre" => "Queso", "color" => "Amarillo", "tipo" => "comida", "precio_unitario" => 3.80, "peso" => "250g", "litro" => null],
    ["codigo" => "002", "nombre" => "Coca-Cola", "color" => "Negro", "tipo" => "bebida", "precio_unitario" => 2.50, "peso" => null, "litro" => "1.25L"],
    ["codigo" => "001", "nombre" => "Carne", "color" => "Rojo", "tipo" => "comida", "precio_unitario" => 9.00, "peso" => "1kg", "litro" => null],
    ["codigo" => "002", "nombre" => "Jugo de Naranja", "color" => "Naranja", "tipo" => "bebida", "precio_unitario" => 3.00, "peso" => null, "litro" => "1L"],
    ["codigo" => "001", "nombre" => "Lechuga", "color" => "Verde", "tipo" => "comida", "precio_unitario" => 1.10, "peso" => "300g", "litro" => null],
    ["codigo" => "002", "nombre" => "Cerveza", "color" => "Ambar", "tipo" => "bebida", "precio_unitario" => 1.80, "peso" => null, "litro" => "500ml"],
    ["codigo" => "001", "nombre" => "Pollo", "color" => "Blanco", "tipo" => "comida", "precio_unitario" => 7.50, "peso" => "1.2kg", "litro" => null],
    ["codigo" => "002", "nombre" => "Vino Tinto", "color" => "Rojo", "tipo" => "bebida", "precio_unitario" => 10.00, "peso" => null, "litro" => "750ml"],
    ["codigo" => "001", "nombre" => "Tomate", "color" => "Rojo", "tipo" => "comida", "precio_unitario" => 2.20, "peso" => "300g", "litro" => null],
    ["codigo" => "002", "nombre" => "Leche", "color" => "Blanco", "tipo" => "bebida", "precio_unitario" => 1.30, "peso" => null, "litro" => "1L"],
    ["codigo" => "001", "nombre" => "Arroz", "color" => "Blanco", "tipo" => "comida", "precio_unitario" => 1.50, "peso" => "1kg", "litro" => null],
    ["codigo" => "002", "nombre" => "Té", "color" => "Marrón", "tipo" => "bebida", "precio_unitario" => 4.00, "peso" => null, "litro" => "250ml"],
    ["codigo" => "001", "nombre" => "Huevos", "color" => "Blanco", "tipo" => "comida", "precio_unitario" => 3.20, "peso" => "12 unidades", "litro" => null],
    ["codigo" => "002", "nombre" => "Café", "color" => "Negro", "tipo" => "bebida", "precio_unitario" => 8.50, "peso" => null, "litro" => "500ml"],
    ["codigo" => "001", "nombre" => "Galletas", "color" => "Marrón", "tipo" => "comida", "precio_unitario" => 2.00, "peso" => "300g", "litro" => null],
    ["codigo" => "002", "nombre" => "Batido de Chocolate", "color" => "Marrón", "tipo" => "bebida", "precio_unitario" => 2.80, "peso" => null, "litro" => "250ml"],
    ["codigo" => "001", "nombre" => "Pasta", "color" => "Amarillo", "tipo" => "comida", "precio_unitario" => 1.80, "peso" => "500g", "litro" => null],
];

$cajaComida = [];
$cajaBebida = [];

foreach ($productos as $data) {
    if ($data['codigo'] == "001") {
        $comida = new Comida($data['codigo'], $data['nombre'], $data['color'], $data['tipo'], $data['precio_unitario'], $data['peso']);
        $cajaComida[] = $comida;
        //echo $comida->getInformacionComida();
    } 
    
    if ($data['codigo'] == "002") {
        $bebida = new Bebida($data['codigo'], $data['nombre'], $data['color'], $data['tipo'], $data['precio_unitario'], $data['litro']);
        $cajaBebida[] = $bebida;
       // echo $bebida->getInformacionBebida();
    }
}


echo "Caja Comida: <br>";
foreach ($cajaComida as $comida) {
    echo $comida->getInformacionComida();
}

echo "<br>Caja Bebida: <br>";
foreach ($cajaBebida as $bebida) {
    echo $bebida->getInformacionBebida();
}    


?>