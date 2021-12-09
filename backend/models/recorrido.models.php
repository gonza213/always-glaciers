<?php

require_once "conexion.php";

class ModeloRecorrido
{
    static public function mdlCrearRecorrido($datos, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_excursion, titulo, horario, icono, recorrido, descripcion)VALUES(:id_excursion, :titulo, :horario, :icono, :recorrido, :descripcion)");

        $stmt->bindParam("id_excursion", $datos["id_excursion"], PDO::PARAM_STR);
        $stmt->bindParam("titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt->bindParam("horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam("icono", $datos["icono"], PDO::PARAM_STR);
        $stmt->bindParam("recorrido", $datos["recorrido"], PDO::PARAM_STR);
        $stmt->bindParam("descripcion", $datos["descripcion"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RECORRIDO
    static public function mdlMostrarRecorrido($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlEditarRecorrido($datos, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo = :titulo, horario = :horario , icono = :icono, recorrido = :recorrido , descripcion = :descripcion WHERE id = :id");

        $stmt->bindParam("titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt->bindParam("horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam("icono", $datos["icono"], PDO::PARAM_STR);
        $stmt->bindParam("recorrido", $datos["recorrido"], PDO::PARAM_STR);
        $stmt->bindParam("descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam("id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR RECORRIDO
    static public function mdlBorrarRecorrido($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}