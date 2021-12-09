<?php


class ControladorFrecuentes
{

    // MOSTRAR FRECUENTES
    static public function ctrMostrarFrecuentes()
    {

        $tabla = "frecuentes";

        $respuesta = ModeloFrecuentes::mdlMostrarFrecuentes($tabla);

        return $respuesta;
    }

    //CREAR PREGUNTA
    static public function ctrCrearPregunta()
    {

        if (isset($_POST["pregunta"])) {

            if (preg_match('/[a-z0-9+!*(),;?&=\$_.-]/', $_POST["pregunta"])) {


                $tabla = "frecuentes";

                $datos = array(
                    "pregunta" => $_POST["pregunta"],
                    "respuesta" => $_POST["respuesta"]
                );

                $respuesta = ModeloFrecuentes::mdlCrearPregunta($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
            
                      Swal.fire({
                        icon: 'success',
                        title: '¡La pregunta se ha creado correctamente!',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        closeOnConfirm: false
                        }).then((result)=>{
                
                        if(result.value){
                
                            window.location = 'frecuentes';
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
            
                        window.location = 'crear-pregunta';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // BORRAR PREGUNTAS
    static public function ctrBorrarPregunta()
    {

        if (isset($_GET["idPregunta"])) {

            $tabla = "frecuentes";
            $datos = $_GET["idPregunta"];

            $respuesta = ModeloFrecuentes::mdlBorrarPregunta($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡La pregunta ha sido eliminada!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'frecuentes';
                }
            })
                      
              
                   </script>";
            }
        }
    }

    //EDITAR PREGUNTA
    static public function ctrEditarPREGUNTA()
    {

        if (isset($_POST["id"])) {

            if (preg_match('/^[0-9]+$/', $_POST["id"])) {

                $tabla = "frecuentes";

                $datos = array(
                    "id" => $_POST["id"],
                    "pregunta" => $_POST["pregunta"],
                    "respuesta" => $_POST["respuesta"]
                );

                $respuesta = ModeloFrecuentes::mdlEditarPregunta($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
               
                         Swal.fire({
                           icon: 'success',
                           title: '¡La pregunta se ha editado correctamente!',
                           showConfirmButton: true,
                           confirmButtonText: 'Cerrar',
                           closeOnConfirm: false
                           }).then((result)=>{
                   
                           if(result.value){
                   
                               window.location = 'frecuentes';
                           }
                       })
                                 
                         
                              </script>";
                }
            } else {

                echo "<script>
               
                     Swal.fire({
                       icon: 'error',
                       title: '¡La pregunta no debe llevar caracteres especiales!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                       }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'frecuentes';
                       }
                   })
                             
                     
                          </script>";
            }
        }
    }
}