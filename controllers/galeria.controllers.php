<?php

class ControladorGaleria
{

    // MOSTRAR GALERIA
    static public function ctrMostrarGaleria()
    {

        $tabla = "galeria";

        $resultado = ModeloGaleria::mdlMostrarGaleria($tabla);

        return $resultado;
    }
}