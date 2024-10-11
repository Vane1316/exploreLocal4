<?php
require_once '../Model/NegocioModel.php';

class NegocioController {
    private $conexion;
    private $negocioModel;

    public function __construct($conexion) {
        $this->conexion = $conexion;
        $this->negocioModel = new NegocioModel($conexion);
    }

    public function subirNegocio() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $descripcion = $_POST['descripcion'];
            $servicios = $_POST['servicios'];
            $ubicacion = $_POST['ubicacion'];
            $nit_negocio = $_POST['nit_negocio'];
            $direccion = $_POST['direccion'];
            $horario_atencion = $_POST['horario_atencion'];
            $nombre_negocio = $_POST['nombre_negocio'];

            // Verificar si el negocio ya existe
            $negocio = $this->negocioModel->obtenerNegocioPorNombre($nombre_negocio);
            if (!$negocio) {
                die("El negocio no está registrado.");
            }

            $id_negocio = $negocio['id_negocio'];

            // Insertar el local
            $id_local = $this->negocioModel->insertarNegocio($descripcion, $servicios, $ubicacion, intval($nit_negocio), $direccion, $horario_atencion, $id_negocio);

            // Manejar la carga de imágenes
            if (isset($_FILES['imagen'])) {
                foreach ($_FILES['imagen']['tmp_name'] as $key => $tmp_name) {
                    if ($_FILES['imagen']['error'][$key] == UPLOAD_ERR_OK) {
                        $imagen_nombre_original = $_FILES['imagen']['name'][$key];
                        $imagen_temporal = $_FILES['imagen']['tmp_name'][$key];
                        $imagen_nombre = uniqid() . '-' . basename($imagen_nombre_original);
                        move_uploaded_file($imagen_temporal, "imagenes/" . $imagen_nombre);

                        // Insertar la imagen en la base de datos
                        $this->negocioModel->insertarImagen($id_local, $imagen_nombre);
                    }
                }
            }

            header('Location: ../index.php');
            exit();
        }
    }
}
