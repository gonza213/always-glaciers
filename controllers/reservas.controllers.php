<?php

class ControladorReservas
{

    static public function ctrMostrarReservas($id)
    {
        $tabla = "excursiones";
        $tabla2 = "reservas";

        $resultado = ModeloReservas::mdlMostrarReservas($tabla, $tabla2, $id);

        return $resultado;
    }


    // SUMAR RESERVAS
    static public function sumarReservas()
    {

        $tabla = "reservas";

        $resultado = ModeloReservas::mdlSumarReservas($tabla);

        return $resultado;
    }

    static public function ctrCrearReserva($datos){

        $tabla = "pago_tarjetas";

        $respuesta = ModeloReservas::mdlCrearReserva($tabla, $datos);

        return $respuesta;
    }
}