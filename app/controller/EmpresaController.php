<?php
require_once 'Empresa.php';

class EmpresaController {
    private $empresa;

    public function __construct($conexion) {
        $this->empresa = new Empresa($conexion);
    }

    public function registerEmpresa() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre_usuario = $_POST['nombre_usuario'] ?? null;
            $nombre_empresa = $_POST['nombre_empresa'] ?? null;
            $correo = $_POST['correo'] ?? null;
            $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

            // Validación de si ya existe una empresa
            if ($this->empresa->empresaExiste($nombre_empresa, $correo)) {
                echo "La empresa o el correo ya están registrados.";
            } else {
                // Registro de empresa
                if ($this->empresa->registrarEmpresa($nombre_usuario, $nombre_empresa, $correo, $contrasena)) {
                    echo "Registro exitoso";
                } else {
                    echo "Error al registrar la empresa.";
                }
            }
        }
    }

    public function loginEmpresa() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'] ?? null;
            $contrasena = $_POST['contrasena'] ?? null;

            // Obtener la empresa por correo
            $empresa = $this->empresa->obtenerEmpresaPorCorreo($correo);

            if ($empresa && password_verify($contrasena, $empresa['contrasena'])) {
                // Iniciar sesión
                $_SESSION['empresa'] = $empresa;
                echo "Inicio de sesión exitoso";
            } else {
                echo "Correo o contraseña incorrectos.";
            }
        }
    }
}
