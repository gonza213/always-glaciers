<?php

class ControladorGaleria
{

    // SUBIR IMAGEN
    static public function ctrSubirImagen()
    {

        if (isset($_POST["id_excursion"])) {

            if (preg_match('/^[0-9]+$/', $_POST["id_excursion"])) {

                $ruta = "";

                if (isset($_FILES["imagen"]["tmp_name"])) {


                    list($ancho, $alto) = getimagesize($_FILES["imagen"]["tmp_name"]);

                    // $nuevoancho = 400;
                    // $nuevoalto = 400;

                    // $directorio = "vistas/img/galeria/";

                    // mkdir($directorio, 0755);

                    if ($_FILES["imagen"]["type"] == "image/jpeg") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/galeria/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["imagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($ancho, $alto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                        imagejpeg($destino, $ruta);
                    } else if ($_FILES["imagen"]["type"] == "image/png") {

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/galeria/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);

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
                  
                              window.location = 'ver-galeria';
                          }
                      })
                                
                        
                             </script>";
                    }
                }

                $tabla = "galeria";

                $datos = array(
                    "id_excursion" => $_POST["id_excursion"],
                    "excursion" => $_POST["excursion"],
                    "imagen" => $ruta
                );

                $respuesta = ModeloGaleria::mdlCrearGaleria($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
          
                    Swal.fire({
                      icon: 'success',
                      title: '¡Se subio la imagen correctamente!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'galeria';
                      }
                  })
                            
                    
                         </script>";
                }
            } else {

                echo "<script>
          
                Swal.fire({
                  icon: 'error',
                  title: '¡La imagen no debe llevar caracteres especiales!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
                  }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'galeria';
                  }
              })
                        
                
                     </script>";
            }
        }
    }

    // MOSTRAR IMAGENES
    static public function ctrMostrarImagen()
    {

        $tabla = "galeria";

        $resultado = ModeloGaleria::mdlMostrarImagen($tabla);

        return $resultado;
    }

    // BORRAR IMAGEN
    static public function ctrBorrarImagen()
    {

        if (isset($_GET["idGaleria"])) {

            $tabla = "galeria";
            $datos = $_GET["idGaleria"];

            $respuesta = ModeloGaleria::mdlBorrarGaleria($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡La imagen ha sido eliminada!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'galeria';
                }
            })
                      
              
                   </script>";
            }
        }
    }







    // SUBIR VARIAS IMAGENES
    static public function mostrarImagen($datos)
    {
        list($ancho, $alto) = getimagesize($datos["imagenTemporal"]);

        if ($ancho < 600 || $alto < 600) {

            echo 0;
        } else {

            $aleatorio = mt_rand(100, 999);

            $ruta = "../../vistas/img/galeria/" . $aleatorio . ".jpg";

            $origen = imagecreatefromjpeg($datos["imagenTemporal"]);

            imagejpeg($origen, $ruta);

            $id = $datos["idGaleria"];

            $tabla = "galeria";

            ModeloGaleria::subirImagen($id, $ruta, $tabla);

            $respuesta = ModeloGaleria::mostrarImagen($ruta, $tabla);

            $enviarDatos = array(
                "imagen" => $respuesta["imagen"],
                "id_excursion" => $respuesta["id_excursion"],
                "excursion" => $respuesta["excursion"]
            );

            echo json_encode($enviarDatos);
        }
    }

    // MOSTRAR IMAGENES
    static public function mostrarImagenVista()
    {

        $tabla = "galeria";

        $respuesta = ModeloGaleria::mostrarImagenVista($tabla);

        foreach ($respuesta as $row => $item) {

            echo '<li style="list-style: none; display: inline-block" class="p-2" id="' . $item["id"] . '"><button class="fa fa-times pull-right btn btn-danger p-2"></button><img style="width: 200px !important; height: 200px !important;" src="' . substr($item["imagen"], 6)  . '" class="img-thumbnail"></li>';
        }
    }

    // EDITAR IMAGEN
    static public function editorImagen()
    {

        $respuesta = ModeloGaleria::mostrarImagenVista("galeria");

        foreach ($respuesta as $key => $value) {
            # code...
            echo '<li style="list-style: none; display: inline-block" class="p-2 border border-warning m-2" id="' . $value["id"] . '">
            <button class="fa fa-eye pull-right btn btn-info p-2 editarImagen"></button>
            <img style="width: 200px !important; height: 200px !important;" src="' . substr($value["imagen"], 6)  . '" class="img-thumbnail">
            <p>' . $value["excursion"] . '</p>
            </li>';
        }
    }

    // ELIMINAR IMAGEN
    static public function eliminarImagen($datos)
    {
        $respuesta = ModeloGaleria::eliminarImagen($datos, "galeria");

        unlink($datos["rutaImagen"]);

        echo $respuesta;
    }
}