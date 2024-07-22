<?php

// Incluye el controlador principal utilizando __DIR__
require_once __DIR__ . '/controllers/IndexController.php'; 
$controlador = new IndexController();
$controlador -> index();

// Aquí puedes incluir más código según sea necesario

?>


