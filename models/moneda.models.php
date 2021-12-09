<?php

require_once "conexion.php";

class ModeloMoneda
{
    // MOSTRAR Moneda
    static public function mdlMostrarMoneda($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}