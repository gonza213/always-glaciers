<?php

require_once "conexion.php";

class ModeloDivisas
{
    //  MOSTRAR BANNER
    static public function mdlMostrarDivisas($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    



    // EDITAR Turno
    static public function mdlActualizarDivisas($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  usd = :usd, eur = :eur, brl = :brl WHERE id = :id");

        $stmt->bindParam(":usd", $datos["usd"], PDO::PARAM_STR);
        $stmt->bindParam(":eur", $datos["eur"], PDO::PARAM_STR);
        $stmt->bindParam(":brl", $datos["brl"], PDO::PARAM_STR);
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
