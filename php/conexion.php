<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "melina";


$conexion = new mysqli ($serverName, $username, $password, $dbname);

if ($conexion -> connect_error){

    die ("falló la conexión");

}

echo "conexión exitosa ";

?>
