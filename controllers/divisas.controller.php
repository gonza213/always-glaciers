<?php


class ControladorDivisas
{

    //MOSTRAR BANNER
    static public function ctrMostrarDivisas()
    {

        $tabla = "divisas";

        $respuesta = ModeloDivisas::mdlMostrarDivisas($tabla);

        return $respuesta;
    }
}