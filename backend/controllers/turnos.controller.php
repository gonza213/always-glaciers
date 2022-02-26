<?php

class ControladorTurnos
{

    static public function ctrCrearTurnos()
    {
        if (isset($_POST["horarios"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursion"])) {

                $tabla = "turnos";

                $datos = array(
                    "horarios" => $_POST["horarios"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloTurnos::mdlCrearTurnos($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
        
                  Swal.fire({
                    icon: 'success',
                    title: '¡El turno ha sido creado!',
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
            } else {

                echo "<script>
        
              Swal.fire({
                icon: 'error',
                title: '¡Error al crear el turno!',
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

    static public function ctrCrearTurnosB()
    {
        if (isset($_POST["horariosB"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionB"])) {

                $tabla = "turnos";

                $datos = array(
                    "horarios" => $_POST["horariosB"],
                    "id_excursion" => $_POST["id_excursionB"]
                );

                $respuesta = ModeloTurnos::mdlCrearTurnos($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
        
                  Swal.fire({
                    icon: 'success',
                    title: '¡El turno ha sido creado!',
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
            } else {

                echo "<script>
        
              Swal.fire({
                icon: 'error',
                title: '¡Error al crear el turno!',
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

    static public function ctrCrearTurnosR()
    {
        if (isset($_POST["horariosR"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionR"])) {

                $tabla = "turnos";

                $datos = array(
                    "horarios" => $_POST["horariosR"],
                    "id_excursion" => $_POST["id_excursionR"]
                );

                $respuesta = ModeloTurnos::mdlCrearTurnos($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
        
                  Swal.fire({
                    icon: 'success',
                    title: '¡El turno ha sido creado!',
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
            } else {

                echo "<script>
        
              Swal.fire({
                icon: 'error',
                title: '¡Error al crear el turno!',
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

    // MOSTRAR RELACION con Excursion
    static public function ctrMostrarRelacionTurnos()
    {

        $tabla = "turnos";
        $tabla2 = "excursiones";

        $resultado = ModeloTurnos::mdlMostrarRelacionTurnos($tabla, $tabla2);

        return $resultado;
    }

    //EDITAR Turno
    static public function editarTurno()
    {
        if (isset($_POST["id_tE"])) {

            $tabla = "turnos";

            $datos = array(
                "id_t" => $_POST["id_tE"],
                "horarios" => $_POST["horariosE"]
            );

            $respuesta = ModeloTurnos::editarTurno($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
             
                       Swal.fire({
                         icon: 'success',
                         title: '¡El turno se ha actualizado correctamente!',
                         showConfirmButton: true,
                         confirmButtonText: 'Cerrar',
                         closeOnConfirm: false
                         }).then((result)=>{
                 
                         if(result.value){
                 
                            window.location = 'turnos';
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

    static public function ctrBorrarTurno()
    {

        if (isset($_GET["idBorrarTurno"])) {

            $tabla = "turnos";
            $datos = $_GET["idBorrarTurno"];

            $respuesta = ModeloTurnos::mdlBorrarTurno($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
         
               Swal.fire({
                 icon: 'success',
                 title: '¡El turno ha sido eliminado!',
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


    //Dia de reservar
    static public function ctrCrearDia()
    {
        if (isset($_POST["id_excursion"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursion"])) {

                $tabla = "dias_reservados";

                $datos = array(
                    "dia" => $_POST["dia"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloTurnos::mdlCrearDia($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
    
              Swal.fire({
                icon: 'success',
                title: '¡El dia esta reservado!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
                }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'dias-reservados';
                }
            })
                      
              
                   </script>";
                }
            } else {

                echo "<script>
    
          Swal.fire({
            icon: 'error',
            title: '¡Error al crear el dia!',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false
            }).then((result)=>{
    
            if(result.value){
    
                window.location = 'dias-reservados';
            }
        })
                  
          
               </script>";
            }
        }
    }

        // MOSTRAR RELACION
        static public function ctrMostrarRelacionDia()
        {
    
            $tabla1 = "excursiones";
            $tabla2 = "dias_reservados";
    
            $resultado = ModeloTurnos::mdlMostrarRelacionDia($tabla1, $tabla2);
    
            return $resultado;
        }


        
    static public function ctrBorrarDia()
    {

        if (isset($_GET["idBorrarDia"])) {

            $tabla = "dias_reservados";
            $datos = $_GET["idBorrarDia"];

            $respuesta = ModeloTurnos::mdlBorrarDia($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
         
               Swal.fire({
                 icon: 'success',
                 title: '¡El día ha sido eliminado!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
             }).then((result)=>{
         
                 if(result.value){
         
                     window.location = 'dias-reservados';
                 }
             })
                       
               
                    </script>";
            }
        }
    }
}
