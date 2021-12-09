<?php

class ControladorTurnos{

    static public function ctrTurnos()
    {

        $tabla = "turnos";

        $respuesta = ModeloTurnos::mdlTurnos($tabla);

        return $respuesta;
    }
}