<?php
class ConexionBD {
    public static function cBD() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=simple_crud", "root", "");
            // Configura opciones adicionales si es necesario
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            // Manejo de errores (puedes personalizar el mensaje de error)
            die("Error de conexión: " . $e->getMessage());
        }
    }
}

// Ejemplo de uso:
$conexion = ConexionBD::cBD();
// Realiza consultas o acciones con $conexion
?>
