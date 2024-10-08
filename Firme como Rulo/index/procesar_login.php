<?php
require 'conexion.php';

// Función para limpiar los datos de entrada
function clean_input($data) {
    $data = trim($data); //elimina espacios en blanco
    $data = stripslashes($data); //borra barras
    $data = htmlspecialchars($data); 
    return $data;
}

// Verificar si se recibieron los valores por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por POST
    $mail = clean_input($_POST["mail"]);
    $password = clean_input($_POST["password"]);

    // Crear una instancia de la clase Database
    $database = new Database();
    // Obtener la conexión
    $conn = $database->connect();

    try {
    
        // Preparar la consulta SQL
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE mail = :mail');
        // Vincular los parámetros
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        // Ejecutar la consulta
        $stmt->execute();

  
        $mail_db = $stmt->fetch(PDO::FETCH_ASSOC); 
        if ($mail_db['password'] == $password) {
            header("Location: menu/menu.php");
            exit();
        } else {
            echo "Error: Usuario o contraseña inválidos.";
        }
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

} else {
    // Si no se recibieron los valores por POST, mostrar un mensaje de error
    echo "Error: No se recibieron los valores por POST.";
}





