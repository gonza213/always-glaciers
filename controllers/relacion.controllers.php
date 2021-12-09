<?php


class ControladorRelacion
{

    static public function ctrMostrarRelacion($id)
    {

        $tabla1 = "relacion";
        $tabla2 = "excursiones";

        $respuesta = ModeloRelacion::mdlMostrarRelacion($tabla1, $tabla2, $id);

        return $respuesta;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcional($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcional($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalTraslado($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalTraslado($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }


    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalAlmuerzo($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalAlmuerzo($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalVianda($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalVianda($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalNavegacion($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalNavegacion($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalEntrada($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalEntrada($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }

    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcionalRenta($id)
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcionalRenta($tabla, $tabla2, $tabla3, $id);

        return $resultado;
    }
}