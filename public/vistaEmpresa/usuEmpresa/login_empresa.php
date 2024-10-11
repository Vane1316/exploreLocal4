<?php

include '../configuracion/conecion_bd.php'; // Ajusta la ruta dependiendo de la estructura real
include '../../EmpresaController.php';

$empresaController = new EmpresaController($conexion);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        // Llamar función para iniciar sesión
        $empresaController->loginEmpresa();
    } elseif (isset($_POST['nombre_usuario']) && isset($_POST['nombre_empresa'])) {
        // Llamar función para registrar la empresa
        $empresaController->registerEmpresa();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - Empresa</title>
    
    <!-- Fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- Archivo de estilos CSS -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<main>
    <div class="contenedor__todo">
        <!-- Caja trasera para login y registro -->
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>

        <!-- Formularios de login y registro -->
        <div class="contenedor__login-register">
            <!-- Formulario de Iniciar Sesión -->
            <form action="loginEmpresa" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electrónico" name="correo" required>
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <button type="submit">Entrar</button>
            </form>

            <!-- Formulario de Registro -->
            <form action="registerEmpresa" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" name="nombre_usuario" placeholder="Nombre del Propietario" required>
                <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" required>
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</main>

<!-- Validación con JavaScript -->
<script>
    document.querySelector('.formulario__login').addEventListener('submit', function(event) {
        var correo = document.querySelector('input[name="correo"]').value;
        var contrasena = document.querySelector('input[name="contrasena"]').value;

        if (!correo || !contrasena) {
            alert('Por favor, complete todos los campos.');
            event.preventDefault(); // Evita que el formulario se envíe si los campos están vacíos
        }
    });

    document.querySelector('.formulario__register').addEventListener('submit', function(event) {
        var nombre_usuario = document.querySelector('input[name="nombre_usuario"]').value;
        var nombre_empresa = document.querySelector('input[name="nombre_empresa"]').value;
        var correo = document.querySelector('input[name="correo"]').value;
        var contrasena = document.querySelector('input[name="contrasena"]').value;

        if (!nombre_usuario || !nombre_empresa || !correo || !contrasena) {
            alert('Por favor, complete todos los campos.');
            event.preventDefault(); // Evita que el formulario se envíe si los campos están vacíos
        }
    });
</script>

<!-- Archivo JavaScript para animaciones (opcional) -->
<script src="assets/js/scriptlogin-register.js"></script>

</body>
</html>
