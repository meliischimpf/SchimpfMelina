<?php


//$aux = $_SERVER;
//var_dump($aux);


$usuario = $_POST["user"];
$contrasenia = $_POST["password"];

$aux = isset ($_POST ['check']);


if ($aux == true){
    
    echo $usuario;
    echo $contrasenia;

}

if ($aux == false) {
    echo ("No es posible ingresar sin aceptar terminos y condiciones");
}


?>