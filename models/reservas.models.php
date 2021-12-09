<?php

require_once "conexion.php";

class ModeloReservas
{

    static public function mdlMostrarReservas($tabla, $tabla2, $id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.* FROM $tabla INNER JOIN $tabla2 ON $tabla.id = $tabla2.id_excursion WHERE id = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);


        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }


    static public function mdlSumarReservas($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT SUM(cantidad),fecha_ingreso, id_excursion FROM $tabla GROUP BY fecha_ingreso, id_excursion");


        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlCrearReserva($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(excursion, total, turno, adultos, ninos, bebes, fecha_reserva, opcionales, pasajeros, metodo_pago, numero_transaccion, operacion) VALUES (:excursion, :total, :turno, :adultos, :ninos, :bebes, :fecha_reserva, :opcionales, :pasajeros, :metodo_pago, :numero_transaccion, :operacion)");

        $stmt->bindParam(":excursion", $datos["excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
        $stmt->bindParam(":turno", $datos["turno"], PDO::PARAM_STR);
        $stmt->bindParam(":adultos", $datos["adultos"], PDO::PARAM_STR);
        $stmt->bindParam(":ninos", $datos["ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":bebes", $datos["bebes"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_reserva", $datos["fecha_reserva"], PDO::PARAM_STR);
        $stmt->bindParam(":opcionales", $datos["opcionales"], PDO::PARAM_STR);
        $stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_STR);
        $stmt->bindParam(":opcionales", $datos["opcionales"], PDO::PARAM_STR);
        $stmt->bindParam(":metodo_pago", $datos["metodo_pago"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_transaccion", $datos["numero_transaccion"], PDO::PARAM_STR);
        $stmt->bindParam(":operacion", $datos["operacion"], PDO::PARAM_STR);
        


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    
}