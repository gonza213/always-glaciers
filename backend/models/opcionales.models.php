<?php

require_once "conexion.php";

class ModeloOpcionales
{

    //Mostrar Opcionales

    static public function mdlMostrarOpcionales($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY opcional ASC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    //EDITAR OPCIONAL
    static public function crearOpcional($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (categoria, opcional, precio, detalle) VALUES (:categoria, :opcional, :precio, :detalle)");

        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":opcional", $datos["opcional"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
    }

    //EDITAR OPCIONAL
    static public function editarOpcional($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET opcional = :opcional, precio = :precio, detalle = :detalle WHERE id_op = :id_op");

        $stmt->bindParam(":opcional", $datos["opcional"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
        $stmt->bindParam(":id_op", $datos["id_op"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
    }

    // BORRAR opcional
    static public function borrarOpcional($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_op = :id_op");

        $stmt->bindParam(":id_op", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}