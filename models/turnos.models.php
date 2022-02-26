<?php

require_once "conexion.php";


class ModeloTurnos
{

    static public function mdlTurnos($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

        // MOSTRAR RELACION
        static public function mdlMostrarRelacionDia($tabla1, $tabla2)
        {
    
            $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.*, DATE_FORMAT(dia, '%d-%m-20%y') AS dia FROM $tabla1 LEFT JOIN $tabla2 ON $tabla1.id = $tabla2.id_excursion UNION SELECT $tabla1.*, $tabla2.*, DATE_FORMAT(dia, '%d-%m-20%y') AS dia FROM $tabla1 RIGHT JOIN $tabla2 ON $tabla1.id = $tabla2.id_excursion");
    
            $stmt->execute();
    
            return $stmt->fetchAll();
    
            $stmt->close();
    
            $stmt = null;
        }
}