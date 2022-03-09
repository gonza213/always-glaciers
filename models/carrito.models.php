<?php

require_once 'conexion.php';

class ModelCarrito{

    static public function mdlEnviarCarrito($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(excursiones, total, pasajeros, metodo_pago, numero_transaccion, operacion) VALUES (:excursiones, :total, :pasajeros, :metodo_pago, :numero_transaccion, :operacion)");

        $stmt->bindParam(":excursiones", $datos["excursiones"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
        $stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_STR);
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

    static public function mdlEnviarCarritoRenta($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(renta, total, pasajeros, metodo_pago, numero_transaccion, operacion) VALUES (:renta, :total, :pasajeros, :metodo_pago, :numero_transaccion, :operacion)");

        $stmt->bindParam(":renta", $datos["renta"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
        $stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_STR);
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