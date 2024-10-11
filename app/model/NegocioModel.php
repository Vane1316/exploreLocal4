<?php
class NegocioModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerNegocioPorNombre($nombre_negocio) {
        $stmt = $this->conexion->prepare("SELECT id_negocio FROM negocio WHERE nombre_negocio = ?");
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->conexion->error);
        }
        $stmt->bind_param('s', $nombre_negocio);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();

        return $resultado->fetch_assoc();
    }

    public function insertarNegocio($descripcion, $servicios, $ubicacion, $nit_negocio, $direccion, $horario_atencion, $id_negocio) {
        $stmt = $this->conexion->prepare("INSERT INTO negocios (descripcion, servicios, ubicacion, nit_negocio, direccion, horario_atencion, id_negocio) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->conexion->error);
        }
        $stmt->bind_param('sssisii', $descripcion, $servicios, $ubicacion, $nit_negocio, $direccion, $horario_atencion, $id_negocio);
        if (!$stmt->execute()) {
            throw new Exception("Error al registrar el negocio: " . $stmt->error);
        }
        $id_local = $stmt->insert_id;
        $stmt->close();

        return $id_local;
    }

    public function insertarImagen($id_negocio, $imagen_nombre) {
        $stmt_img = $this->conexion->prepare("INSERT INTO imagenes (id_negocio, nombre_imagen) VALUES (?, ?)");
        if (!$stmt_img) {
            throw new Exception("Error en la preparación de la consulta: " . $this->conexion->error);
        }
        $stmt_img->bind_param('is', $id_negocio, $imagen_nombre);
        if (!$stmt_img->execute()) {
            throw new Exception("Error al guardar la imagen: " . $stmt_img->error);
        }
        $stmt_img->close();
    }
}
