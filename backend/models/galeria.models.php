<?php

require_once "conexion.php";

class ModeloGaleria
{

    // SUBIR IMAGEN
    static public function mdlCrearGaleria($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_excursion, excursion, imagen) VALUES (:id_excursion, :excursion, :imagen)");

        $stmt->bindParam(":id_excursion", $datos["id_excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":excursion", $datos["excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR IMAGEN
    static public function mdlMostrarImagen($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // BORRAR IMAGEN
    static public function mdlBorrarGaleria($tabla, $datos)
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









    // SUBIR VARIAS IMAGENES
    static public function subirImagen($id, $ruta, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( imagen, id_excursion )VALUES( :imagen, :id_excursion)");

        $stmt->bindParam(":imagen", $ruta, PDO::PARAM_STR);
        $stmt->bindParam(":id_excursion", $id, PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // MOSTRAR IMAGENES
    static public function mostrarImagen($datos, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT imagen, id_excursion, excursion FROM $tabla WHERE imagen = :imagen");

        $stmt->bindParam(":imagen", $datos, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }

    // EDITAR IMAGEN
    static public function mostrarImagenVista($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla ORDER BY id ASC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // ELIMINAR IMAGEN
    static public function eliminarImagen($datos, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datos["idImagen"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}