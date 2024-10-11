<?php
include 'conexion_be.php'; // Archivo de conexión a la base de datos

class UserModel {

    // Obtiene un usuario por su correo
    public static function getUserByEmail($correo) {
        global $conexion;
        $correo = mysqli_real_escape_string($conexion, $correo);
        $query = "SELECT * FROM usuario WHERE correo='$correo'";
        $resultado = mysqli_query($conexion, $query);
        return mysqli_fetch_assoc($resultado);
    }

    // Verifica si un correo ya está registrado
    public static function emailExists($correo) {
        global $conexion;
        $correo = mysqli_real_escape_string($conexion, $correo);
        $query = "SELECT * FROM usuario WHERE correo='$correo'";
        $resultado = mysqli_query($conexion, $query);
        return mysqli_num_rows($resultado) > 0;
    }

    // Verifica si un nombre de usuario ya está registrado
    public static function userExists($usuario) {
        global $conexion;
        $usuario = mysqli_real_escape_string($conexion, $usuario);
        $query = "SELECT * FROM usuario WHERE usuario='$usuario'";
        $resultado = mysqli_query($conexion, $query);
        return mysqli_num_rows($resultado) > 0;
    }

    // Registra un nuevo usuario en la base de datos
    public static function registerUser($nombre_completo, $correo, $usuario, $contrasena_hash) {
        global $conexion;
        $nombre_completo = mysqli_real_escape_string($conexion, $nombre_completo);
        $correo = mysqli_real_escape_string($conexion, $correo);
        $usuario = mysqli_real_escape_string($conexion, $usuario);
        $contrasena_hash = mysqli_real_escape_string($conexion, $contrasena_hash);

        $query = "INSERT INTO usuario (nombre_completo, correo, usuario, contrasena) 
                  VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_hash')";
        return mysqli_query($conexion, $query);
    }
}
?>
