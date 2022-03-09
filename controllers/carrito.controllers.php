<?php 

class ControllerCarrito{


    static public function ctrEnviarCarrito($datos){

        
        $tabla = "pago_tarjetas_carrito";

        $respuesta = ModelCarrito::mdlEnviarCarrito($tabla, $datos);

        return $respuesta;
    }

    
    static public function ctrEnviarCarritoRenta($datos){

        
        $tabla = "pagos_tarjetas_rentas";

        $respuesta = ModelCarrito::mdlEnviarCarritoRenta($tabla, $datos);

        return $respuesta;
    }
}