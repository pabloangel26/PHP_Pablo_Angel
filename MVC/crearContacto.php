<?php
session_start();
require_once __DIR__."/controllers/ContactoController.php";
require_once __DIR__."/database/Conexion.php";
$controller = new ContactoController(new Conexion());
$controller->crearContacto($_POST);