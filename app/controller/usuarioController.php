<?php
// Habilita la visualización de errores para desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'UserModel.php'; // Incluye el modelo
session_start();

class LoginController {

    public function login($correo, $contrasena) {
        // Verifica que los campos no estén vacíos
        if (empty($correo) || empty($contrasena)) {
            die("Error: Datos del formulario no recibidos correctamente.");
        }

        // Llama al modelo para obtener el usuario
        $usuario = UserModel::getUserByEmail($correo);

        if ($usuario) {
            // Verifica la contraseña
            if (password_verify($contrasena, $usuario['contrasena'])) {
                // Inicia sesión y redirige
                $_SESSION['usuario'] = $correo;
                header("Location: ../indexcuenta.php");
                exit;
            } else {
                // Contraseña incorrecta
                $this->alertAndRedirect("Contraseña incorrecta, por favor intenta de nuevo");
            }
        } else {
            // Usuario no encontrado
            $this->alertAndRedirect("No se encontró un usuario con ese correo, por favor regístrate");
        }
    }

    public function register($nombre_completo, $correo, $usuario, $contrasena) {
        // Verifica que los campos no estén vacíos
        if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
            die("Error: Datos del formulario no recibidos correctamente.");
        }

        // Verifica si el correo ya está registrado
        if (UserModel::emailExists($correo)) {
            $this->alertAndRedirect("Este correo ya está registrado, intenta con otro diferente");
            exit();
        }

        // Verifica si el nombre de usuario ya está registrado
        if (UserModel::userExists($usuario)) {
            $this->alertAndRedirect("Este usuario ya está registrado, intenta con otro diferente");
            exit();
        }

        // Hashea la contraseña
        $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

        // Registra el nuevo usuario
        $registro_exitoso = UserModel::registerUser($nombre_completo, $correo, $usuario, $contrasena_hash);

        if ($registro_exitoso) {
            $this->alertAndRedirect("Usuario almacenado exitosamente");
        } else {
            $this->alertAndRedirect("Inténtalo de nuevo, usuario no almacenado");
        }
    }

    private function alertAndRedirect($message) {
        echo '
        <script>
        alert("' . $message . '");
        window.location = "../index.php";
        </script>
        ';
    }
}

// Instancia el controlador y procesa el formulario
$controller = new LoginController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $controller->login($_POST['correo'], $_POST['contrasena']);
    } elseif (isset($_POST['nombre_completo']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        $controller->register($_POST['nombre_completo'], $_POST['correo'], $_POST['usuario'], $_POST['contraseña']);
    }
}
?>
