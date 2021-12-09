<?php


class ControladorMoneda
{

    //MOSTRAR Moneda
    static public function ctrMostrarMoneda()
    {

        $tabla = "moneda";

        $respuesta = ModeloMoneda::mdlMostrarMoneda($tabla);

        return $respuesta;
    }
}