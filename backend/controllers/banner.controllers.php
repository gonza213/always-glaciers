<?php

class ControladorBanner
{

    // MOSTRAR BANNER
    static public function ctrMostrarBanner()
    {

        $tabla = "banner";

        $resultado = ModeloBanner::mdlMostrarBanner($tabla);

        return $resultado;
    }

    //CREAR BANNER
    static public function ctrCrearBanner()
    {

        if (isset($_POST["excursion"])) {

            if (preg_match('/^[0-9]+$/', $_POST["precio"])) {

                $ruta = "";

                if (isset($_FILES["img"]["tmp_name"])) {


                    list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

                    // $nuevoancho = 1400;
                    // $nuevoalto = 800;

                    $directorio = "vistas/img/banner/" . $_POST["precio"];

                    mkdir($directorio, 0755);

                    if ($_FILES["img"]["type"] == "image/jpeg") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/banner/" . $_POST["precio"] . "/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["img"]["tmp_name"]);

                        $destino = imagecreatetruecolor($ancho, $alto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                        imagejpeg($destino, $ruta);
                    } else if ($_FILES["img"]["type"] == "image/png") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/banner/" . $_POST["precio"] . "/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["img"]["tmp_name"]);

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
                  
                              window.location = 'crear-banner';
                          }
                      })
                                
                        
                             </script>";
                    }
                }

                $tabla = "banner";

                $datos = array(
                    "excursion" => $_POST["excursion"],
                    "precio" => $_POST["precio"],
                    "img" => $ruta
                );

                $respuesta = ModeloBanner::mdlCrearBanner($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
          
                    Swal.fire({
                      icon: 'success',
                      title: '¡El slider se ha creado correctamente!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'banner';
                      }
                  })
                            
                    
                         </script>";
                }
            } else {

                echo "<script>
          
                Swal.fire({
                  icon: 'error',
                  title: '¡El slider no debe llevar caracteres especiales!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
                  }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'banner';
                  }
              })
                        
                
                     </script>";
            }
        }
    }

    // BORRAR BANNER
    static public function ctrBorrarBanner()
    {

        if (isset($_GET["idBanner"])) {

            $tabla = "banner";
            $datos = $_GET["idBanner"];

            $respuesta = ModeloBanner::mdlBorrarBanner($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡El slider ha sido eliminado!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'banner';
                }
            })
                      
              
                   </script>";
            }
        }
    }

    //EDITAR BANNER
    static public function ctrEditarBanner()
    {

        if (isset($_POST["id"])) {

            if (preg_match('/^[0-9]+$/', $_POST["precio"])) {

                $ruta = "";

                if ($_FILES["img"]["tmp_name"] == "") {

                    $ruta = $_POST["imgActual"];
                } else {

                    if (isset($_FILES["img"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

                        // $nuevoancho = 1400;
                        // $nuevoalto = 600;

                        $directorio = "vistas/img/banner/" . $_POST["precio"];

                        mkdir($directorio, 0755);

                        if (isset($_POST["imgActual"])) {
                            unlink($_POST["imgActual"]);
                        }

                        if ($_FILES["img"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["img"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["img"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["img"]["tmp_name"]);

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
                         
                                     window.location = 'editar-banner';
                                 }
                             })
                                       
                               
                                    </script>";
                        }
                    }
                }

                $tabla = "banner";

                $datos = array(
                    "id" => $_POST["id"],
                    "excursion" => $_POST["excursion"],
                    "precio" => $_POST["precio"],
                    "img" => $ruta
                );

                $respuesta = ModeloBanner::mdlEditarBanner($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
             
                       Swal.fire({
                         icon: 'success',
                         title: '¡El slider se ha editado correctamente!',
                         showConfirmButton: true,
                         confirmButtonText: 'Cerrar',
                         closeOnConfirm: false
                         }).then((result)=>{
                 
                         if(result.value){
                 
                             window.location.assign('index.php?pagina=edit-banner&id=" . $_GET["id"] . "');
                         }
                     })
                               
                       
                            </script>";
                }
            } else {

                echo "<script>
             
                   Swal.fire({
                     icon: 'error',
                     title: '¡El slider no debe llevar caracteres especiales!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                        window.location.assign('index.php?pagina=edit-banner&id=" . $_GET["id"] . "');
                     }
                 })
                           
                   
                        </script>";
            }
        }
    }
}