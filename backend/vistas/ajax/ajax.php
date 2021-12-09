<?php

require_once "../../controllers/galeria.controllers.php";
require_once "../../controllers/subcategorias.controllers.php";
require_once "../../controllers/transferencia.controllers.php";
require_once "../../controllers/mercado_pago.controller.php";
require_once "../../models/galeria.models.php";
require_once "../../models/subcategorias.models.php";
require_once "../../models/transferencia.models.php";
require_once "../../models/mercado_pago.models.php";


class Ajax
{

    // SUBIR IMAGEN
    public $nombreImagen;
    public $imagenTemporal;
    public $idGaleria;


    public function gestorSlideAjax()
    {

        $datos = array(
            "nombreImagen" => $this->nombreImagen,
            "imagenTemporal" => $this->imagenTemporal,
            "idGaleria" => $this->idGaleria
        );

        $respuesta = ControladorGaleria::mostrarImagen($datos);

        echo $respuesta;
    }

    // ELIMINAR IMAGEN
    public $idImagen;
    public $rutaImagen;

    public function eliminarSlideAjax()
    {

        $datos = array(
            "idImagen" => $this->idImagen,
            "rutaImagen" => $this->rutaImagen
        );

        $respuesta = ControladorGaleria::eliminarImagen($datos);

        echo $respuesta;
    }


    //Editar subcategoria
    public $idEditSub;

    public function ajaxEditSub()
    {
        $item = "id";
        $valor = $this->idEditSub;
        $respuesta = ControladorSubcategorias::ctrVerSubcategoria($item, $valor);

        echo json_encode($respuesta);
    }

     //Editar subcategoria
     public $idEditTra;

     public function ajaxVerTra()
     {
         $item = "id";
         $valor = $this->idEditTra;
         $respuesta = ControllerTransferencia::ctrVerTra($item, $valor);
 
         echo json_encode($respuesta);
     }


      //ver carrito
      public $idMercadoCarrito;

      public function ajaxVerCarrito()
      {
          $item = "id";
          $valor = $this->idMercadoCarrito;
          $respuesta = ControllerMercado::ctrVerCarrito($item, $valor);
  
          echo json_encode($respuesta);
      }

         //ver reserva
         public $idMercado;

         public function ajaxVerReserva()
         {
             $item = "id";
             $valor = $this->idMercado;
             $respuesta = ControllerMercado::ctrVerReserva($item, $valor);
     
             echo json_encode($respuesta);
         }
}
if (isset($_FILES["imagen"]["name"])) {
    $a = new Ajax();
    $a->nombreImagen = $_FILES["imagen"]["name"];
    $a->imagenTemporal = $_FILES["imagen"]["tmp_name"];
    $a->idGaleria = $_POST["idGaleria"];
    $a->gestorSlideAjax();
}


if (isset($_POST["idImagen"])) {
    $b = new Ajax();
    $b->idImagen = $_POST["idImagen"];
    $b->rutaImagen = $_POST["rutaImagen"];
    $b->eliminarSlideAjax();
}

if (isset($_POST["idEditSub"])) {
    $c = new Ajax();
    $c->idEditSub = $_POST["idEditSub"];
    $c->ajaxEditSub();
}

if (isset($_POST["idEditTra"])) {
    $d = new Ajax();
    $d->idEditTra = $_POST["idEditTra"];
    $d->ajaxVerTra();
}

if (isset($_POST["idMercadoCarrito"])) {
    $e = new Ajax();
    $e->idMercadoCarrito = $_POST["idMercadoCarrito"];
    $e->ajaxVerCarrito();
}


if (isset($_POST["idMercado"])) {
    $e = new Ajax();
    $e->idMercado = $_POST["idMercado"];
    $e->ajaxVerReserva();
}