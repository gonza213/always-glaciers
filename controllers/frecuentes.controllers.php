<?php

class ControladorFrecuentes
{

    static public function ctrFrecuentes()
    {

        $tabla = "frecuentes";

        $respuesta = ModeloFrecuentes::mdlFrecuentes($tabla);

        return $respuesta;
    }
}