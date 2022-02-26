<?php

require_once "conexion.php";

class ModeloDivisas
{
    // MOSTRAR BANNER
    static public function mdlMostrarDivisas($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}