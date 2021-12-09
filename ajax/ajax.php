<?php

require_once "../controllers/planes.controllers.php";
require_once "../models/planes.models.php";

class Ajax
{

    public $idExcursion;

    public function ajaxExcursion()
    {
        $item = "id";
        $valor = $this->idExcursion;
        $respuesta = ControladorPlanes::ctrMostrarPlan($item, $valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["idExcursion"])) {
    $a = new Ajax();
    $a->idExcursion = $_POST["idExcursion"];
    $a->ajaxExcursion();
}