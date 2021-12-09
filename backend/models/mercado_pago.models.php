<?php

require_once "conexion.php";

class ModelMercado{

    
    // MOSTRAR EXCURSIONES INCIO
    static public function mdlMostrarMercado($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

       // MOSTRAR
       static public function mdlVerCarrito($tabla, $item, $valor)
       {
   
           $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
           $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
   
           $stmt->execute();
   
           return $stmt->fetch();
   
           $stmt->close();
   
           $stmt = null;
       }

          // BORRAR 
    static public function mdlBorrarMercado($tabla, $datos)
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
}