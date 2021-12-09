<?php

class ControladorOtros
{

    static public function ctrMostrarOtros()
    {

        $tabla = "otros";

        $respuesta = ModeloOtros::mdlMostrarOtros($tabla);

        return $respuesta;
    }

    static public function ctrMostrarRedes()
    {

        $tabla = "redes";

        $respuesta = ModeloOtros::mdlMostrarRedes($tabla);

        return $respuesta;
    }
}