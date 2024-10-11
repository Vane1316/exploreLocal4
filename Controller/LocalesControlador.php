<?php
namespace Controller;

use LocalesModel;

class LocalesControlador extends Controlador {
    private $localesModel;

    public function __construct() {
        $this->localesModel = new LocalesModel();
    }

    // Muestra el formulario de creación de locales
    public function FormularioLocal() {
        $this->CargarVista("registroLocales/locales");
    }

    // Procesa la creación de locales y la subida de imágenes
    public function CrearLocal() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name_empresa = $_POST['name_empresa'];
            $nit_empre = $_POST['nit_empre'];
            $descripcion = $_POST['descripcion'];
            $servicios = $_POST['servicios'];
            $horario_atencion = $_POST['horario_atencion'];

            // Crear el local
            $localCreated = $this->localesModel->createLocal($name_empresa, $nit_empre, $descripcion, $servicios, $horario_atencion);

            if ($localCreated) {
                // Obtener el ID del local recién creado
                $local_id = $this->localesModel->getLastInsertId();
                // Subir imagen si existe
                if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
                    $imageFileType = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                    // Verificar si el archivo es PNG
                    if ($imageFileType == "png") {
                        $target_dir = "uploads/";  // Directorio donde se guardarán las imágenes
                        $image_name = uniqid() . ".png";  // Generar un nombre único para la imagen
                        $imagen_url = $target_dir . $image_name;

                        // Mover la imagen al directorio
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen_url)) {
                            // Asociar la imagen con el local
                            $this->localesModel->addImageToLocal($local_id, $imagen_url);
                            echo "Local y su imagen PNG fueron creados exitosamente.";
                        } else {
                            echo "Error al subir la imagen.";
                        }
                    } else {
                        echo "Solo se permiten imágenes en formato PNG.";
                    }
                }
            } else {
                echo "Error al crear el local.";
            }
        } else {
            $this->CargarVista("Locales/formulario_local");
        }
    }
}
?>
