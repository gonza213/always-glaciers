<?php

class ControladorDivisas
{



    // MOSTRAR RELACION con Excursion
    static public function ctrMostrarDivisas()
    {

        $tabla = "divisas";

        $resultado = ModeloDivisas::mdlMostrarDivisas($tabla);

        return $resultado;
    }

    //EDITAR Turno
    static public function ctrActualizarDivisas()
    {
        if (isset($_POST["id"])) {

            $tabla = "divisas";

            $datos = array(
                "id" => $_POST["id"],
                "usd" => $_POST["usd"],
                "eur" => $_POST["eur"], 
                "brl" => $_POST["brl"]
            );

            $respuesta = ModeloDivisas::mdlActualizarDivisas($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
             
                       Swal.fire({
                         icon: 'success',
                         title: '¡Se ha actualizado correctamente!',
                         showConfirmButton: true,
                         confirmButtonText: 'Cerrar',
                         closeOnConfirm: false
                         }).then((result)=>{
                 
                         if(result.value){
                 
                            window.location = 'divisas';
                         }
                     })
                               
                       
                            </script>";
            } else {

                echo "<script>
             
                   Swal.fire({
                     icon: 'error',
                     title: '¡El turno no debe llevar caracteres especiales!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                        window.location = 'turnos';
                     }
                 })
                           
                   
                        </script>";
            }
        }
    }

   


   



   
}
