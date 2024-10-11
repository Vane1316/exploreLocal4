<?php
include_once 'Database.php';

class LocalesModel {
    private $conn;
    private $table_name_locales = "locales";
    private $table_name_imagenes = "imagenes";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Obtener todos los locales
    public function getLocales() {
        $query = "SELECT * FROM " . $this->table_name_locales;
        $result = $this->conn->query($query);

        $locales = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $locales[] = $row;
            }
        }
        return $locales;
    }

    // Crear un nuevo local
    public function createLocal($name_empresa, $nit_empre, $descripcion, $servicios, $horario_atencion) {
        $query = "INSERT INTO " . $this->table_name_locales . " (name_empresa, nit_empre, descripcion, servicios, horario_atencion) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssss", $name_empresa, $nit_empre, $descripcion, $servicios, $horario_atencion);
        return $stmt->execute();
    }

    // Obtener el último ID insertado
    public function getLastInsertId() {
        return $this->conn->insert_id;
    }

    // Relacionar una imagen con un local
    public function addImageToLocal($local_id, $imagen_url) {
        $query = "INSERT INTO " . $this->table_name_imagenes . " (local_id, imagen_url) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("is", $local_id, $imagen_url);
        return $stmt->execute();
    }
}
?>
