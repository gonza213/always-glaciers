<?php


require_once "conexion.php";


class ModelBuscador
{

    static public function mdlMostrarBuscador($busqueda, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE opcional LIKE '%$busqueda%' ");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}