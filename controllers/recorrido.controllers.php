<?php

class ControladorRecorrido
{

    static public function ctrMostrarRecorrido()
    {

        $tabla = "recorridos";
        $resultado = ModeloRecorrido::mdlMostrarRecorrido($tabla);

        return $resultado;
    }
}