<?php

require_once "conexion.php";

class ModeloGaleria
{

    // MOSTRAR GALERIA
    static public function mdlMostrarGaleria($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}