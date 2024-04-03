<?php

require_once "conexionBD.php";

class AdminM extends ConexionBD
{

    public function IngresoM($datosC, $tablaBD)
    {

        //insertaremos un SELECT a la BD
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");

        //insertamos parámetros
        $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo->execute();

        return $pdo->fetch();

        $pdo = null;

    }

}

?>