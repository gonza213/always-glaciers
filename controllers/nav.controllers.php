<?php

class ControladorNav
{

    //MOSTRAR NAV
    static public function ctrMostrarNav()
    {

        $tabla = "subcategoria";

        $respuesta = ModeloNav::mdlMostrarNav($tabla);

        return $respuesta;
    }
}