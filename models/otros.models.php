<?php
require_once "conexion.php";

class ModeloOtros
{

    //MOSTRAR Otros
    static public function mdlMostrarOtros($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    //MOSTRAR Otros
    static public function mdlMostrarRedes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}