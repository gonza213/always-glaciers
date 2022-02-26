<?php

require_once "conexion.php";

class ModeloExcursiones
{

    // MOSTRAR EXCURSIONES
    static public function mdlMostrarExcursiones($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY titulo");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlCrearExcursion($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(category, titulo, precio_bajo, precio_alto, precio_ninos, reservada, opcional, turnos, duracion, requisitos, incluye, no_incluye, rango_adultos, rango_ninos, recorrido, recomendado, intro, descripcion, banner) VALUES (:category, :titulo, :precio_bajo, :precio_alto, :precio_ninos, :reservada, :opcional, :turnos, :duracion, :requisitos, :incluye, :no_incluye, :rango_adultos, :rango_ninos, :recorrido, :recomendado, :intro, :descripcion, :banner)");

        $stmt->bindParam(":category", $datos["category"], PDO::PARAM_STR);
        $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_bajo", $datos["precio_bajo"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_alto", $datos["precio_alto"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_ninos", $datos["precio_ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":reservada", $datos["reservada"], PDO::PARAM_STR);
        $stmt->bindParam(":opcional", $datos["opcional"], PDO::PARAM_STR);
        $stmt->bindParam(":turnos", $datos["turnos"], PDO::PARAM_STR);
        $stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":requisitos", $datos["requisitos"], PDO::PARAM_STR);
        $stmt->bindParam(":incluye", $datos["incluye"], PDO::PARAM_STR);
        $stmt->bindParam(":no_incluye", $datos["no_incluye"], PDO::PARAM_STR);
        $stmt->bindParam(":rango_adultos", $datos["rango_adultos"], PDO::PARAM_STR);
        $stmt->bindParam(":rango_ninos", $datos["rango_ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":recorrido", $datos["recorrido"], PDO::PARAM_STR);
        $stmt->bindParam(":recomendado", $datos["recomendado"], PDO::PARAM_STR);
        $stmt->bindParam(":intro", $datos["intro"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":banner", $datos["banner"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // EDITAR EXCURSION
    static public function mdlEditarExcursiones($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET category = :category, titulo = :titulo, precio_bajo = :precio_bajo, precio_alto = :precio_alto, precio_ninos = :precio_ninos, reservada = :reservada, opcional = :opcional, turnos = :turnos, duracion = :duracion, requisitos = :requisitos, incluye = :incluye, no_incluye = :no_incluye, rango_adultos = :rango_adultos, rango_ninos = :rango_ninos, recorrido = :recorrido, recomendado = :recomendado, intro = :intro, descripcion = :descripcion, banner = :banner WHERE id = :id");

        $stmt->bindParam(":category", $datos["category"], PDO::PARAM_STR);
        $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_bajo", $datos["precio_bajo"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_alto", $datos["precio_alto"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_ninos", $datos["precio_ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":reservada", $datos["reservada"], PDO::PARAM_STR);
        $stmt->bindParam(":opcional", $datos["opcional"], PDO::PARAM_STR);
        $stmt->bindParam(":turnos", $datos["turnos"], PDO::PARAM_STR);
        $stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":requisitos", $datos["requisitos"], PDO::PARAM_STR);
        $stmt->bindParam(":incluye", $datos["incluye"], PDO::PARAM_STR);
        $stmt->bindParam(":no_incluye", $datos["no_incluye"], PDO::PARAM_STR);
        $stmt->bindParam(":rango_adultos", $datos["rango_adultos"], PDO::PARAM_STR);
        $stmt->bindParam(":rango_ninos", $datos["rango_ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":recorrido", $datos["recorrido"], PDO::PARAM_STR);
        $stmt->bindParam(":recomendado", $datos["recomendado"], PDO::PARAM_STR);
        $stmt->bindParam(":intro", $datos["intro"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":banner", $datos["banner"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // BORRAR EXCURSION
    static public function mdlBorrarExcursion($tabla, $datos)
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

    // MOSTRAR EXCURSIONES INCIO
    static public function mdlMostrarExcursionesInicio($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC LIMIT 3 ");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    // MOSTRAR EXCURSIONES INCIO
    static public function mdlMostrarExcursionesPrecio($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY titulo");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    // EDITAR EXCURSION
    static public function editarExcursion($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  precio_bajo = :precio_bajo, precio_alto = :precio_alto, precio_ninos = :precio_ninos WHERE id = :id");

        $stmt->bindParam(":precio_bajo", $datos["precio_bajo"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_alto", $datos["precio_alto"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_ninos", $datos["precio_ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // EDITAR TRIP
    static public function editarTrip($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  trip_link = :trip_link, trip_detalle = :trip_detalle WHERE id = :id");

        $stmt->bindParam(":trip_link", $datos["trip_link"], PDO::PARAM_STR);
        $stmt->bindParam(":trip_detalle", $datos["trip_detalle"], PDO::PARAM_STR);
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