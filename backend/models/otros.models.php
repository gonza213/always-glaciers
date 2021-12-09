<?php

require_once "conexion.php";

class ModeloOtros
{

    //MOSTRAR OTROS
    static public function mdlMostrarOtros($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    //EDITAR OTROS

    static public function editarOtros($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET descuento = :descuento, cbu = :cbu, alias = :alias, cuit = :cuit, banco = :banco, cuenta = :cuenta WHERE id = :id");

        $stmt->bindParam(":descuento", $datos["descuento"], PDO::PARAM_STR);
        $stmt->bindParam(":cbu", $datos["cbu"], PDO::PARAM_STR);
        $stmt->bindParam(":alias", $datos["alias"], PDO::PARAM_STR);
        $stmt->bindParam(":cuit", $datos["cuit"], PDO::PARAM_STR);
        $stmt->bindParam(":banco", $datos["banco"], PDO::PARAM_STR);
        $stmt->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }


    //MOSTRAR REDES
    static public function mdlMostrarRedes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    //EDITAR RED

    static public function editarRed($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  detalle = :detalle WHERE id = :id");

        $stmt->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
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