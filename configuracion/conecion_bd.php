<?php

$conexion = mysqli_connect("localhost", "root", "", "login_register_db4");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Establece la codificación de caracteres a UTF-8
mysqli_set_charset($conexion, "utf8mb4");

