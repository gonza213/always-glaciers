<?php 

class ControllerCarrito{


    static public function ctrEnviarCarrito($datos){

        
        $tabla = "pago_tarjetas_carrito";

        $respuesta = ModelCarrito::mdlEnviarCarrito($tabla, $datos);

        return $respuesta;
    }
}