<?php

class ControladorPlanes
{

    //MOSTRAR PLANES
    static public function ctrMostrarPlanes()
    {

        $tabla = "excursiones";

        $respuesta = ModeloPlanes::mdlMostrarPlanes($tabla);

        return $respuesta;
    }

    //MOSTRAR PLANES
    static public function ctrMostrarPlan($item, $valor)
    {

        $tabla = "excursiones";
        $tabla2 = "turnos";

        $respuesta = ModeloPlanes::mdlMostrarPlan($tabla, $tabla2, $item, $valor);

        return $respuesta;
    }


    //MOSTRAR PLANES
    static public function ctrMostrarPlanesCatalogo()
    {

        $tabla = "excursiones";

        $respuesta = ModeloPlanes::mdlMostrarPlanesCatalogo($tabla);

        return $respuesta;
    }
}