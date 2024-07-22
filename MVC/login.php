<?php
session_start(); // Inicia sesión al principio del archivo
require_once __DIR__ . '/controllers/LoginController.php'; 
require_once __DIR__."/database/Conexion.php";

// Crear instancia del controlador de login con la conexión a la base de datos
$controller = new LoginController(new Conexion());

// Cargar la vista de inicio de sesión
$controller->loadView();
?>
