<?php

require_once "conexion.php";

class ModeloBanner
{
    //  MOSTRAR BANNER
    static public function mdlMostrarBanner($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // CREAR BANNER
    static public function mdlCrearBanner($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(excursion, precio, img) VALUES (:excursion, :precio, :img)");

        $stmt->bindParam(":excursion", $datos["excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":img", $datos["img"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR BANNER
    static public function mdlBorrarBanner($tabla, $datos)
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

    // EDITAR BANNER
    static public function mdlEditarBanner($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET excursion = :excursion, precio = :precio, img = :img WHERE id = :id");

        $stmt->bindParam(":excursion", $datos["excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":img", $datos["img"], PDO::PARAM_STR);
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