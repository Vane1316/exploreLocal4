<?php
require_once 'Controller/NegocioController.php';
require_once 'config/database.php';  // Archivo de configuración para la conexión a la base de datos

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$controller = new NegocioController($conexion);
$controller->subirNegocio();

// Cerrar la conexión
$conexion->close();
