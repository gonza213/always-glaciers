<?php


class ControllerMercado{

    static public function ctrMostrarMercado(){

        $tabla = "pago_tarjetas";

        $respuesta = ModelMercado::mdlMostrarMercado($tabla);

        return $respuesta;
    }

    static public function ctrMostrarMercadoCarrito(){

        $tabla = "pago_tarjetas_carrito";

        $respuesta = ModelMercado::mdlMostrarMercado($tabla);

        return $respuesta;
    }

    static public function ctrMostrarMercadoRenta(){

        $tabla = "pagos_tarjetas_rentas";

        $respuesta = ModelMercado::mdlMostrarMercado($tabla);

        return $respuesta;
    }

    
       // BORRAR 
       static public function ctrBorrarMercado()
       {
   
           if (isset($_GET["idMercado"])) {
   
               $tabla = "pago_tarjetas";
               $datos = $_GET["idMercado"];
   
               $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
   
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
           
                       window.location = 'mercado-pago';
                   }
               })
                         
                 
                      </script>";
               }
           }
       }

       static public function ctrBorrarMercadoCarrito()
       {
   
           if (isset($_GET["idMercadoCarrito"])) {
   
               $tabla = "pago_tarjetas_carrito";
               $datos = $_GET["idMercadoCarrito"];
   
               $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
   
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
           
                       window.location = 'mercado-pago';
                   }
               })
                         
                 
                      </script>";
               }
           }
       }

         // BORRAR 
         static public function ctrBorrarPaypal()
         {
     
             if (isset($_GET["idPaypal"])) {
     
                 $tabla = "pago_tarjetas";
                 $datos = $_GET["idPaypal"];
     
                 $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
     
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
             
                         window.location = 'paypal';
                     }
                 })
                           
                   
                        </script>";
                 }
             }
         }

         
         // BORRAR 
         static public function ctrBorrarPaypalCarrito()
         {
     
             if (isset($_GET["idPaypal"])) {
     
                 $tabla = "pago_tarjetas_carrito";
                 $datos = $_GET["idPaypal"];
     
                 $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
     
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
             
                         window.location = 'paypal';
                     }
                 })
                           
                   
                        </script>";
                 }
             }
         }


         static public function ctrVerReserva($item, $valor)
         {
     
             $tabla = "pago_tarjetas";
     
             $resultado = ModelMercado::mdlVerCarrito($tabla, $item, $valor);
     
             return $resultado;
         }

         static public function ctrVerCarrito($item, $valor)
         {
     
             $tabla = "pago_tarjetas_carrito";
     
             $resultado = ModelMercado::mdlVerCarrito($tabla, $item, $valor);
     
             return $resultado;
         }

         static public function ctrBorrarMercadoRenta()
         {
     
             if (isset($_GET["idMercadoRenta"])) {
     
                 $tabla = "pagos_tarjetas_rentas";
                 $datos = $_GET["idMercadoRenta"];
     
                 $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
     
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
             
                         window.location = 'mercado-pago';
                     }
                 })
                           
                   
                        </script>";
                 }
             }
         }

         static public function ctrBorrarMercadoRentaP()
         {
     
             if (isset($_GET["idMercadoRenta"])) {
     
                 $tabla = "pagos_tarjetas_rentas";
                 $datos = $_GET["idMercadoRenta"];
     
                 $respuesta = ModelMercado::mdlBorrarMercado($tabla, $datos);
     
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
             
                         window.location = 'paypal';
                     }
                 })
                           
                   
                        </script>";
                 }
             }
         }
  
}