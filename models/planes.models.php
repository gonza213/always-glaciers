<?php

require_once "conexion.php";

class ModeloPlanes
{
    // MOSTRAR PLANES
    static public function mdlMostrarPlanes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();


        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR PLANES
    static public function mdlMostrarPlan($tabla, $tabla2, $item, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id = $tabla2.id_excursion WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR PLANES
    static public function mdlMostrarPlanesCatalogo($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY titulo");

        $stmt->execute();

        return $stmt->fetchAll();


        $stmt->close();

        $stmt = null;
    }
}