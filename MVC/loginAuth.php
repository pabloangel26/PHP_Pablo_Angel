<?php
session_start(); // Inicia sesión al principio del archivo
require_once __DIR__ . '/controllers/LoginController.php'; 
require_once __DIR__."/database/Conexion.php";

// Verificar si se recibieron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear instancia del controlador de login con la conexión a la base de datos
    $controller = new LoginController(new Conexion());
    
    // Llamar al método de login con los datos del formulario
    $controller->login($_POST);
} else {
    // Si no se recibió por POST, redireccionar a la página de login
    header("Location: login.php");
    exit();
}
?>
