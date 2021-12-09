<?php

class ControladorOpcionales
{

    //MOSTRAR OPCIONALES
    static public function ctrMostrarOpcionales()
    {

        $tabla = "opcionales";

        $respuesta = ModeloOpcionales::mdlMostrarOpcionales($tabla);

        return $respuesta;
    }
}