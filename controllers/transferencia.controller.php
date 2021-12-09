<?php


class ControllerTrasnferencia{

    static public function ctrEnviarTransferencia(){

        if (isset($_POST["excursion"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["adultos"])) {

                $location = "";


                if ($_FILES['comprobante']['name']) {
                    $name = $_FILES['comprobante']['name'];
                    $fuente = $_FILES["comprobante"]['tmp_name'];
                    $newFilename = time() . "_" . $_POST["nombre"] . "_" . $name;
                    move_uploaded_file($fuente, 'backend/vistas/comprobantes/' . $newFilename);
                    $location = 'vistas/comprobantes/' . $newFilename;
                }

                $tabla = "transferencia";

                $datos = array(
                    "excursion" => $_POST["excursion"],
                    "comprobante" => $location,
                    "nombre" => $_POST["nombre"],
                    "email" => $_POST["email"],
                    "telefono" => $_POST["telefono"],
                    "dni" => $_POST["dni"],
                    "nacionalidad" => $_POST["nacionalidad"],
                    "fecha" => $_POST["fecha"],
                    "turnos" => $_POST["turnos"],
                    "adultos" => $_POST["adultos"],
                    "ninos" => $_POST["ninos"],
                    "otros" => $_POST["otros"],
                    "opcionales" => $_POST["opcionales"],
                    "precio" => $_POST["precio"],
                    "operacion" => $_POST["operacion"]
                );

                $respuesta = ModelTransferencia::mdlEnviarTransferencia($tabla, $datos);

            
           

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡Felicitaciones! Has reservado la excursión exitosamente',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'index';
                          }
                      })
                                
                        
                             </script>";
                }
                } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡La transferencia no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'index';
                      }
                  })
                            
                    
                         </script>";
                 }
        }
    }
}