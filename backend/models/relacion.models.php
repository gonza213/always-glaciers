<?php

require_once "conexion.php";

class ModeloRelacion
{

    // MOSTRAR RELACION
    static public function mdlMostrarRelacion($tabla, $tabla2, $tabla3)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_subcategoria = $tabla3.id");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // CREAR RELACION
    static public function mdlCrearRelacion($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_subcategoria, id_excursion) VALUES (:id_subcategoria, :id_excursion)");

        $stmt->bindParam(":id_subcategoria", $datos["id_subcategoria"], PDO::PARAM_STR);
        $stmt->bindParam(":id_excursion", $datos["id_excursion"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR RELACION
    static public function mdlBorrarRelacion($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_r = :id_r");

        $stmt->bindParam(":id_r", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR OTRA RELACION
    static public function mdlBorrarOtraRelacion($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_o = :id_o");

        $stmt->bindParam(":id_o", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // CREAR RELACION
    static public function mdlCrearRelacionOtras($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_subcategoriao, id_excursiono) VALUES (:id_subcategoriao, :id_excursiono)");

        $stmt->bindParam(":id_subcategoriao", $datos["id_subcategoriao"], PDO::PARAM_STR);
        $stmt->bindParam(":id_excursiono", $datos["id_excursiono"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOtras($tabla, $tabla2, $tabla3)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_subcategoriao = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_excursiono = $tabla3.id_r");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcional($tabla, $tabla2, $tabla3)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    // CREAR RELACION opcional
    static public function mdlCrearRelacionOpcional($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_excursion, id_opcional) VALUES (:id_excursion, :id_opcional)");

        $stmt->bindParam(":id_excursion", $datos["id_excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":id_opcional", $datos["id_opcional"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR relacion opcional
    static public function mdlBorrarRelacionOpcional($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_ro = :id_ro");

        $stmt->bindParam(":id_ro", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}