<?php

//$aux = $_SERVER;
//var_dump($aux);

include 'conexion.php';

$usuario = $_POST["user"];
$contrasenia = $_POST["password"];

$aux = isset ($_POST ['check']);



if ($aux == true){
    
    //echo $usuario;
    //echo $contrasenia;

    $sql = "select * from usuarios where dni = $contrasenia";
    $resultado = $conexion -> query($sql);
    $cantidad = mysqli_num_rows($resultado);
    
    for ($i=0; $i > $cantidad; $i++) { 
        
        $row = $resultado -> fetch_assoc();
        echo $row ['nombre']."<br>";

    }

}

if ($aux == false) {
    echo ("No es posible ingresar sin aceptar terminos y condiciones");
}


?>