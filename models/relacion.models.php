<?php

require_once "conexion.php";

class ModeloRelacion
{

    static public function mdlMostrarRelacion($tabla1, $tabla2, $id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_excursion = $tabla2.id WHERE id_subcategoria = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcional($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalTraslado($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'traslado'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalAlmuerzo($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'almuerzo'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalVianda($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'vianda'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalNavegacion($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'navegacion'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalEntrada($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'entrada'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR RELACION
    static public function mdlMostrarRelacionOpcionalRenta($tabla, $tabla2, $tabla3, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.*, $tabla3.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id_excursion = $tabla2.id INNER JOIN $tabla3 ON $tabla.id_opcional = $tabla3.id_op WHERE id_excursion = :id AND $tabla3.categoria = 'renta'");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}