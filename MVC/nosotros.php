<?php

// Incluye el controlador principal utilizando __DIR__
require_once __DIR__ . "/controllers/NosotrosController.php"; 
$controlador = new NosotrosController();
$controlador -> nosotros();

// Aquí puedes incluir más código según sea necesario

?>
