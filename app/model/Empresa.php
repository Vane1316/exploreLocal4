<?php
class Empresa {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function empresaExiste($nombre_empresa, $correo) {
        $stmt = $this->conexion->prepare("SELECT COUNT(*) as count FROM empresa WHERE nombre_empresa = ? OR correo = ?");
        $stmt->bind_param('ss', $nombre_empresa, $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        return $data['count'] > 0;
    }

    public function registrarEmpresa($nombre_usuario, $nombre_empresa, $correo, $contrasena) {
        $stmt = $this->conexion->prepare("INSERT INTO empresa (nombre_usuario, nombre_empresa, correo, contrasena) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $nombre_usuario, $nombre_empresa, $correo, $contrasena);
        return $stmt->execute();
    }

    public function obtenerEmpresaPorCorreo($correo) {
        $stmt = $this->conexion->prepare("SELECT * FROM empresa WHERE correo = ?");
        $stmt->bind_param('s', $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
