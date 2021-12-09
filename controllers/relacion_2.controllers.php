<?php


class ControladorRelacionOtras
{

    static public function ctrMostrarRelacionOtras($id)
    {

        $tabla1 = "otras";
        $tabla2 = "excursiones";

        $respuesta = ModeloRelacionOtras::mdlMostrarRelacionOtras($tabla1, $tabla2, $id);

        return $respuesta;
    }
}