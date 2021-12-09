<?php

class ControladorExcursiones
{

    // MOSTRAR EXCURSIONES
    static public function ctrMostrarExcursiones()
    {

        $tabla = "excursiones";

        $resultado = ModeloExcursiones::mdlMostrarExcursiones($tabla);

        return $resultado;
    }


    //  CREAR EXCURSION
    static public function ctrCrearExcursion()
    {

        if (isset($_POST["titulo"])) {

            if (preg_match('/^[0-9]+$/', $_POST["recomendado"])) {

                $ruta = "";

                if (isset($_FILES["banner"]["tmp_name"])) {


                    list($ancho, $alto) = getimagesize($_FILES["banner"]["tmp_name"]);

                    // $nuevoancho = 1400;
                    // $nuevoalto = 800;

                    $directorio = "vistas/img/excursiones/" . $_POST["precio_bajo"];

                    mkdir($directorio, 0755);

                    if ($_FILES["banner"]["type"] == "image/jpeg") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/excursiones/" . $_POST["precio_bajo"] . "/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["banner"]["tmp_name"]);

                        $destino = imagecreatetruecolor($ancho, $alto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                        imagejpeg($destino, $ruta);
                    } else if ($_FILES["banner"]["type"] == "image/png") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/excursiones/" . $_POST["precio_bajo"] . "/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["banner"]["tmp_name"]);

                        $destino = imagecreatetruecolor($ancho, $alto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                        imagepng($destino, $ruta);
                    } else {

                        echo "<script>
          
                        Swal.fire({
                          icon: 'error',
                          title: '¡La imagen debe ser formato JPG o PNG!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'crear-excursion';
                          }
                      })
                                
                        
                             </script>";
                    }
                }
                $tabla = "excursiones";

                $datos = array(
                    "titulo" => $_POST["titulo"],
                    "category" => $_POST["category"],
                    "precio_bajo" => $_POST["precio_bajo"],
                    "precio_alto" => $_POST["precio_alto"],
                    "precio_ninos" => $_POST["precio_ninos"],
                    "reservada" => $_POST["reservada"],
                    "opcional" => $_POST["opcional"],
                    "turnos" => $_POST["turnos"],
                    "duracion" => $_POST["duracion"],
                    "requisitos" => $_POST["requisitos"],
                    "incluye" => $_POST["incluye"],
                    "no_incluye" => $_POST["no_incluye"],
                    "rango_adultos" => $_POST["rango_adultos"],
                    "rango_ninos" => $_POST["rango_ninos"],
                    "recorrido" => $_POST["recorrido"],
                    "recomendado" => $_POST["recomendado"],
                    "intro" => $_POST["intro"],
                    "descripcion" => $_POST["descripcion"],
                    "banner" => $ruta
                );

                $respuesta = ModeloExcursiones::mdlCrearExcursion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
          
                    Swal.fire({
                      icon: 'success',
                      title: '¡La excursión se ha creado correctamente!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'excursiones';
                      }
                  })
                            
                    
                         </script>";
                }
            } else {

                echo "<script>
          
                Swal.fire({
                  icon: 'error',
                  title: '¡La excursión no debe llevar caracteres especiales!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
                  }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'excursiones';
                  }
              })
                        
                
                     </script>";
            }
        }
    }

    // EDITAR EXCURSION
    static public function ctrEditarExcursiones()
    {

        if (isset($_POST["titulo"])) {

            if (preg_match('/^[0-9]+$/', $_POST["recomendado"])) {

                $ruta = "";

                if ($_FILES["banner"]["tmp_name"] == "") {

                    $ruta = $_POST["bannerActual"];
                } else {

                    if (isset($_FILES["banner"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["banner"]["tmp_name"]);

                        // $nuevoancho = 1400;
                        // $nuevoalto = 600;

                        $directorio = "vistas/img/excursiones/" . $_POST["id"];

                        mkdir($directorio, 0755);

                        if (isset($_POST["bannerActual"])) {
                            unlink($_POST["bannerActual"]);
                        }

                        if ($_FILES["banner"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["banner"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["banner"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["banner"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagepng($destino, $ruta);
                        } else {

                            echo "<script>
                 
                               Swal.fire({
                                 icon: 'error',
                                 title: '¡La imagen debe ser formato JPG o PNG!',
                                 showConfirmButton: true,
                                 confirmButtonText: 'Cerrar',
                                 closeOnConfirm: false
                                 }).then((result)=>{
                         
                                 if(result.value){
                         
                                     window.location = 'editar-escursion';
                                 }
                             })
                                       
                               
                                    </script>";
                        }
                    }
                }

                $tabla = "excursiones";

                $datos = array(
                    "id" => $_POST["id"],
                    "category" => $_POST["category"],
                    "titulo" => $_POST["titulo"],
                    "precio_bajo" => $_POST["precio_bajo"],
                    "precio_alto" => $_POST["precio_alto"],
                    "precio_ninos" => $_POST["precio_ninos"],
                    "reservada" => $_POST["reservada"],
                    "opcional" => $_POST["opcional"],
                    "turnos" => $_POST["turnos"],
                    "duracion" => $_POST["duracion"],
                    "requisitos" => $_POST["requisitos"],
                    "incluye" => $_POST["incluye"],
                    "no_incluye" => $_POST["no_incluye"],
                    "rango_adultos" => $_POST["rango_adultos"],
                    "rango_ninos" => $_POST["rango_ninos"],
                    "recorrido" => $_POST["recorrido"],
                    "recomendado" => $_POST["recomendado"],
                    "intro" => $_POST["intro"],
                    "descripcion" => $_POST["descripcion"],
                    "banner" => $ruta
                );

                $respuesta = ModeloExcursiones::mdlEditarExcursiones($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
             
                       Swal.fire({
                         icon: 'success',
                         title: '¡La excursión se ha editado correctamente!',
                         showConfirmButton: true,
                         confirmButtonText: 'Cerrar',
                         closeOnConfirm: false
                         }).then((result)=>{
                 
                         if(result.value){
                 
                             window.location.assign('index.php?pagina=ver-excursion&id=" . $_GET["id"] . "');
                         }
                     })
                               
                       
                            </script>";
                }
            } else {

                echo "<script>
             
                   Swal.fire({
                     icon: 'error',
                     title: '¡La excursión no debe llevar caracteres especiales!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                        window.location.assign('index.php?pagina=ver-excursion&id=" . $_GET["id"] . "');
                     }
                 })
                           
                   
                        </script>";
            }
        }
    }

    // BORRAR EXCURSION
    static public function ctrBorrarExcursion()
    {

        if (isset($_GET["idExcursion"])) {

            $tabla = "excursiones";
            $datos = $_GET["idExcursion"];

            $respuesta = ModeloExcursiones::mdlBorrarExcursion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡La excursión ha sido eliminado!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'excursiones';
                }
            })
                      
              
                   </script>";
            }
        }
    }

    // MOSTRAR EXCURSIONES
    static public function ctrMostrarExcursionesInicio()
    {

        $tabla = "excursiones";

        $resultado = ModeloExcursiones::mdlMostrarExcursionesInicio($tabla);

        return $resultado;
    }



    // MOSTRAR EXCURSIONES
    static public function ctrMostrarExcursionesPrecio()
    {

        $tabla = "excursiones";

        $resultado = ModeloExcursiones::mdlMostrarExcursionesPrecio($tabla);

        return $resultado;
    }




    //EDITAR Excursion
    static public function editarExcursion()
    {
        if (isset($_POST["id"])) {

            $tabla = "excursiones";

            $datos = array(
                "id" => $_POST["id"],
                "precio_bajo" => $_POST["precio_bajo"],
                "precio_alto" => $_POST["precio_alto"],
                "precio_ninos" => $_POST["precio_ninos"]
            );

            $respuesta = ModeloExcursiones::editarExcursion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
         
                   Swal.fire({
                     icon: 'success',
                     title: '¡El item se ha editado correctamente!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                        window.location = 'precios';
                     }
                 })
                           
                   
                        </script>";
            } else {

                echo "<script>
         
               Swal.fire({
                 icon: 'error',
                 title: '¡El item no debe llevar caracteres especiales!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
                 }).then((result)=>{
         
                 if(result.value){
         
                    window.location = 'precios';
                 }
             })
                       
               
                    </script>";
            }
        }
    }


    //EDITAR TRIP
    static public function editarTrip()
    {
        if (isset($_POST["id"])) {

            $tabla = "excursiones";

            $datos = array(
                "id" => $_POST["id"],
                "trip_link" => $_POST["trip_link"],
                "trip_detalle" => $_POST["trip_detalle"]
            );

            $respuesta = ModeloExcursiones::editarTrip($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                      Swal.fire({
                        icon: 'success',
                        title: '¡El item se ha actualizado correctamente!',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        closeOnConfirm: false
                        }).then((result)=>{
                
                        if(result.value){
                
                           window.location = 'trip';
                        }
                    })
                              
                      
                           </script>";
            } else {

                echo "<script>
            
                  Swal.fire({
                    icon: 'error',
                    title: '¡El item no debe llevar caracteres especiales!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                       window.location = 'trip';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }
}