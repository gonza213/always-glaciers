<?php


class ControladorInfo
{

    static public function ctrMostrarInfo()
    {

        $tabla = "info";

        $resultado = ModeloInfo::mdlMostrarInfo($tabla);

        return $resultado;
    }
}