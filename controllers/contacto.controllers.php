<?php

class ControladorContacto
{

    static public function ctrEnviarMensaje()
    {

        if (isset($_POST["nombre"])) {

            if (preg_match('/^[0-9]+$/', $_POST["telefono"])) {

                $tabla = "contactos";

                $datos = array(
                    "nombre" => $_POST["nombre"],
                    "email" => $_POST["email"],
                    "telefono" => $_POST["telefono"],
                    "mensaje" => $_POST["mensaje"]
                );

                $respuesta = ModeloContacto::mdlEnviarMensaje($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
            
                      Swal.fire({
                        icon: 'success',
                        title: '¡El mensaje se ha enviado correctamente!',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        closeOnConfirm: false
                        }).then((result)=>{
                
                        if(result.value){
                
                            window.location = 'contact';
                        }
                    })
                              
                      
                           </script>";
                }
            } else {

                echo "<script>
            
                  Swal.fire({
                    icon: 'error',
                    title: '¡El formulario no debe llevar caracteres especiales!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'contact';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }
}