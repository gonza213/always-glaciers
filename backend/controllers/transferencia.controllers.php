<?php


class ControllerTransferencia{

    static public function ctrMostrarTransferencia(){

        $tabla = "transferencia";

        $respuesta = ModelTransferencia::mdlMostrarTransferencia($tabla);

        return $respuesta;

    }

     // MOSTRAR TRANSFERENCIA
     static public function ctrVerTra($item, $valor)
     {
 
         $tabla = "transferencia";
 
         $resultado = ModelTransferencia::mdlVerTra($tabla, $item, $valor);
 
         return $resultado;
     }

       // BORRAR 
    static public function ctrBorrarTra()
    {

        if (isset($_GET["idTra"])) {

            $tabla = "transferencia";
            $datos = $_GET["idTra"];

            $respuesta = ModelTransferencia::mdlBorrarTra($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡La reserva ha sido eliminada!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'transferencia';
                }
            })
                      
              
                   </script>";
            }
        }
    }
}