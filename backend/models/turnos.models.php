<?php

require_once "conexion.php";

class ModeloTurnos
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
    static public function mdlCrearTurnos($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(horarios, id_excursion) VALUES (:horarios, :id_excursion)");

        $stmt->bindParam(":horarios", $datos["horarios"], PDO::PARAM_STR);
        $stmt->bindParam(":id_excursion", $datos["id_excursion"], PDO::PARAM_INT);


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


    // MOSTRAR RELACION
    static public function mdlMostrarRelacionTurnos($tabla, $tabla2)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id ORDER BY titulo ASC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // EDITAR Turno
    static public function editarTurno($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  horarios = :horarios WHERE id_t = :id_t");

        $stmt->bindParam(":horarios", $datos["horarios"], PDO::PARAM_STR);
        $stmt->bindParam(":id_t", $datos["id_t"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR 
    static public function mdlBorrarTurno($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_t = :id_t");

        $stmt->bindParam(":id_t", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}
