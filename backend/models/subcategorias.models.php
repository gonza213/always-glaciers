<?php

require_once "conexion.php";

class ModeloSubcategorias
{

    // MOSTRAR SUBCATEGORIA
    static public function mdlMostrarSubcategorias($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // CREAR SUBCATEGORIA
    static public function mdlCrearSubcategorias($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(categoria, subcategoria) VALUES (:categoria, :subcategoria)");

        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":subcategoria", $datos["subcategoria"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR SUBCATEGORIA
    static public function mdlBorrarSubcategorias($tabla, $datos)
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

    static public function mdlEditarSubcategorias($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET categoria = :categoria, subcategoria = :subcategoria   WHERE id = :id");

        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":subcategoria", $datos["subcategoria"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR SUBCATEGORIA
    static public function mdlVerSubcategoria($tabla, $item, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }
}