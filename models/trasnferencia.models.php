<?php

require_once "conexion.php";

class ModelTransferencia{

    static public function mdlEnviarTransferencia($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(excursion, nombre, email, telefono, dni, nacionalidad, fecha, turnos, adultos, ninos, otros, opcionales, precio, comprobante, operacion) VALUES (:excursion, :nombre, :email, :telefono, :dni, :nacionalidad, :fecha, :turnos, :adultos, :ninos, :otros, :opcionales, :precio, :comprobante, :operacion)");

        $stmt->bindParam(":excursion", $datos["excursion"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
        $stmt->bindParam(":nacionalidad", $datos["nacionalidad"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":turnos", $datos["turnos"], PDO::PARAM_STR);
        $stmt->bindParam(":adultos", $datos["adultos"], PDO::PARAM_STR);
        $stmt->bindParam(":ninos", $datos["ninos"], PDO::PARAM_STR);
        $stmt->bindParam(":otros", $datos["otros"], PDO::PARAM_STR);
        $stmt->bindParam(":opcionales", $datos["opcionales"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":comprobante", $datos["comprobante"], PDO::PARAM_STR);
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