<?php


class ControllerBuscador
{

    static public function ctrMostarBuscador()
    {

        if (isset($_GET["enviar"])) {

            $busqueda = $_GET["buscar"];

            $tabla = 'opcionales';

            $resultado = ModelBuscador::mdlMostrarBuscador($busqueda, $tabla);

            return $resultado;
        }
    }
}