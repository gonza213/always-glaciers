<?php
require_once "conexion.php";

class ModeloOpcionales
{

    //MOSTRAR OPCIONALES
    static public function mdlMostrarOpcionales($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}