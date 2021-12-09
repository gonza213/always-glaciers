<?php

class ControladorInfo
{

    // MOSTRAR INFO
    static public function ctrMostrarInfo()
    {

        $tabla = "info";

        $resultado = ModeloInfo::mdlMostrarInfo($tabla);

        return $resultado;
    }

    //EDITAR INFO
    static public function ctrEditarInfo()
    {

        if (isset($_POST["id"])) {

            if (preg_match('/^[0-9]+$/', $_POST["id"])) {

                $ruta = "";
                $ruta2 = "";

                if ($_FILES["logo"]["tmp_name"] == "") {

                    $ruta = $_POST["logoActual"];
                } else {

                    if (isset($_FILES["logo"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["logo"]["tmp_name"]);

                        // $nuevoancho = 600;
                        // $nuevoalto = 400;

                        $directorio = "vistas/img/" . $_POST["logo"];

                        mkdir($directorio, 0755);

                        if (isset($_POST["logoActual"])) {
                            unlink($_POST["logoActual"]);
                        }

                        if ($_FILES["logo"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["logo"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["logo"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = $directorio . "/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["logo"]["tmp_name"]);

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
                }

                if ($_FILES["logo_footer"]["tmp_name"] == "") {

                    $ruta2 = $_POST["logoFooterActual"];
                } else {

                    if (isset($_FILES["logo_footer"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["logo_footer"]["tmp_name"]);

                        // $nuevoancho = 600;
                        // $nuevoalto = 400;

                        $directorio = "vistas/img/" . $_POST["logo_footer"];

                        mkdir($directorio, 0755);

                        if (isset($_POST["logoFooterActual"])) {
                            unlink($_POST["logoFooterActual"]);
                        }

                        if ($_FILES["logo_footer"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta2 = $directorio . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["logo_footer"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta2);
                        } else if ($_FILES["logo_footer"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta2 = $directorio . "/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["logo_footer"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagepng($destino, $ruta2);
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
                           
                                       window.location = 'info';
                                   }
                               })
                                         
                                 
                                      </script>";
                        }
                    }
                }

                $tabla = "info";

                $datos = array(
                    "id" => $_POST["id"],
                    "titulo" => $_POST["titulo"],
                    "descripcion" => $_POST["descripcion"],
                    "etiquetas" => $_POST["etiquetas"],
                    "email" => $_POST["email"],
                    "telefono" => $_POST["telefono"],
                    "direccion" => $_POST["direccion"],
                    "logo" => $ruta,
                    "logo_footer" => $ruta2
                );

                $respuesta = ModeloInfo::mdlEditarInfo($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
               
                         Swal.fire({
                           icon: 'success',
                           title: '¡La info se ha actualizado correctamente!',
                           showConfirmButton: true,
                           confirmButtonText: 'Cerrar',
                           closeOnConfirm: false
                           }).then((result)=>{
                   
                           if(result.value){
                   
                               window.location = 'info';
                           }
                       })
                                 
                         
                              </script>";
                }
            } else {

                echo "<script>
               
                     Swal.fire({
                       icon: 'error',
                       title: '¡La info no debe llevar caracteres especiales!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                       }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'info';
                       }
                   })
                             
                     
                          </script>";
            }
        }
    }
}