<?php

class ControladorTurnos
{

    static public function ctrTurnos()
    {

        $tabla = "turnos";

        $respuesta = ModeloTurnos::mdlTurnos($tabla);

        return $respuesta;
    }

    // MOSTRAR RELACION con Excursion
    static public function ctrMostrarRelacionDia()
    {


        $tabla = "excursiones";
        $tabla2 = "dias_reservados";


        $resultado = ModeloTurnos::mdlMostrarRelacionDia($tabla, $tabla2);

        return $resultado;
    }

    // MOSTRAR RELACION con Excursion
    static public function ctrMostrarRelacionTur()
    {

        $tabla = "turnos";
        $tabla2 = "dias_reservados";

        $resultado = ModeloTurnos::mdlMostrarRelacionDia($tabla, $tabla2);

        return $resultado;
    }
}
