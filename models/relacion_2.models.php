<?php

require_once "conexion.php";

class ModeloRelacionOtras
{

    static public function mdlMostrarRelacionOtras($tabla1, $tabla2, $id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_excursiono = $tabla2.id WHERE id_subcategoriao = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}