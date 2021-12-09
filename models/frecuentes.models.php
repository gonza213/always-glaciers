<?php

require_once "conexion.php";


class ModeloFrecuentes
{

    static public function mdlFrecuentes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}