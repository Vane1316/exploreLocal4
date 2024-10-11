<?php
use Libreria\Enrutador;

// Crear instancia de la conexión
$conexion = require '../configuracion/conecion_bd.php';


// Rutas GET
Enrutador::get('/', [PaginaControlador::class, 'inicio']);
Enrutador::get('inicio', [PaginaControlador::class, 'inicio']);
Enrutador::get('login', [PaginaControlador::class, 'login']);
Enrutador::get('registro', [PaginaControlador::class, 'registro']);
Enrutador::get('loginEmpresa', [PaginaControlador::class, 'loginEmpresa']);
Enrutador::get('registerEmpresa', [PaginaControlador::class, 'registerEmpresa']);


// Rutas POST
Enrutador::post('registro', [$usuarioController, 'registrarEmpresa']);
Enrutador::post('login', [$usuarioController, 'loginEmpresa']);
Enrutador::post('registerEmpresa', [$usuarioController, 'registrarEmpresa']);
Enrutador::post('registerEmpresa', [$usuarioController, 'loginEmpresa']);
