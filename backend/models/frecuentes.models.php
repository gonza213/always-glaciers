<?php

require_once "conexion.php";


class ModeloFrecuentes
{

    //  MOSTRAR FRECUENTES
    static public function mdlMostrarFrecuentes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // CREAR PREGUNTA
    static public function mdlCrearPregunta($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(pregunta, respuesta) VALUES (:pregunta, :respuesta)");

        $stmt->bindParam(":pregunta", $datos["pregunta"], PDO::PARAM_STR);
        $stmt->bindParam(":respuesta", $datos["respuesta"], PDO::PARAM_STR);



        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR PREGUNTA
    static public function mdlBorrarPregunta($tabla, $datos)
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

    // EDITAR PREGUNTA
    static public function mdlEditarPregunta($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET pregunta = :pregunta, respuesta = :respuesta WHERE id = :id");

        $stmt->bindParam(":pregunta", $datos["pregunta"], PDO::PARAM_STR);
        $stmt->bindParam(":respuesta", $datos["respuesta"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}