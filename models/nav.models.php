<?php

require_once "conexion.php";

class ModeloNav
{
    // MOSTRAR NAV
    static public function mdlMostrarNav($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY position");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}