<?php

class ControladorAdministrador
{

    // LOGIN
    static public function ctrIngresarUsuario()
    {

        if (isset($_POST["usuario"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {

                $encriptar = crypt($_POST["password"], '$2y$05$2ihDv8vVf7QZ9BsaRrKyqs2tkn55Yq');

                $tabla = "administradores";

                $item = "usuario";
                $valor = $_POST["usuario"];

                $respuesta = ModeloAdministrador::mdlIngresarUsuario($tabla, $item, $valor);

                if ($respuesta["usuario"] == $_POST["usuario"] && $respuesta["password"] == $encriptar) {

                    $_SESSION["iniciarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["imagen"] = $respuesta["imagen"];
                    $_SESSION["usuario"] = $respuesta["usuario"];

                    echo '<script> 
      
                 window.location = "inicio";
                
                </script>';
                } else {

                    echo "<div class='alert alert-danger'>Error al ingresar, vuelve a intentar</div>";
                }
            }
        }
    }

    // MOSTRAR ADMIN
    static public function ctrMostrarAdmin()
    {

        $tabla = "administradores";

        $resultado = ModeloAdministrador::mdlMostrarAdmin($tabla);

        return $resultado;
    }

    // REGISTRAR ADMIN
    static public function ctrCrearAdmin()
    {

        if (isset($_POST["usuario"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["rol"])) {

                $ruta = "";

                if ($_FILES["imagen"]["tmp_name"] == "") {

                    $ruta = "vistas/img/user.png";
                } else {

                    if (isset($_FILES["imagen"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["imagen"]["tmp_name"]);

                        // $nuevoancho = 400;
                        // $nuevoalto = 400;

                        $directorio = "vistas/img/administradores/" . $_POST["usuario"];

                        mkdir($directorio, 0755);

                        if ($_FILES["imagen"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "vistas/img/administradores/" . $_POST["usuario"] . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["imagen"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "vistas/img/administradores/" . $_POST["usuario"] . "/" . $aleatorio . ".png";

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
                        
                                    window.location = 'crear-admin';
                                }
                            })
                                      
                              
                                   </script>";
                        }
                    }
                }


                $tabla = "administradores";

                $encriptar = crypt($_POST["password"], '$2y$05$2ihDv8vVf7QZ9BsaRrKyqs2tkn55Yq');

                $datos = array(
                    "usuario" => $_POST["usuario"],
                    "email" => $_POST["email"],
                    "password" => $encriptar,
                    "nombre" => $_POST["nombre"],
                    "rol" => $_POST["rol"],
                    "imagen" => $ruta
                );

                $respuesta = ModeloAdministrador::mdlCrearAdmin($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
            
                      Swal.fire({
                        icon: 'success',
                        title: '¡El usuario se ha creado correctamente!',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        closeOnConfirm: false
                        }).then((result)=>{
                
                        if(result.value){
                
                            window.location = 'administrador';
                        }
                    })
                              
                      
                           </script>";
                }
            } else {

                echo "<script>
            
                  Swal.fire({
                    icon: 'error',
                    title: '¡El usuario no debe llevar caracteres especiales!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'administrador';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // EDITAR ADMIN
    static public function ctrEditarAdmin()
    {

        if (isset($_POST["usuario"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id"])) {

                $ruta = "";

                if ($_FILES["imagen"]["tmp_name"] == "") {

                    $ruta = $_POST["imagenActual"];
                } else {

                    if (isset($_FILES["imagen"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["imagen"]["tmp_name"]);

                        // $nuevoancho = 400;
                        // $nuevoalto = 400;

                        $directorio = "vistas/img/administradores/" . $_POST["usuario"];

                        mkdir($directorio, 0755);


                        if ($_FILES["imagen"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "vistas/img/administradores/" . $_POST["usuario"] . "/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["imagen"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "vistas/img/administradores/" . $_POST["usuario"] . "/" . $aleatorio . ".png";

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
                        
                                    window.location = 'crear-admin';
                                }
                            })
                                      
                              
                                   </script>";
                        }
                    }
                }


                $tabla = "administradores";

                if ($_POST["password"] == "") {

                    $encriptar = $_POST["passwordActual"];
                } else {

                    $encriptar = crypt($_POST["password"], '$2y$05$2ihDv8vVf7QZ9BsaRrKyqs2tkn55Yq');
                }



                $datos = array(
                    "id" => $_POST["id"],
                    "usuario" => $_POST["usuario"],
                    "email" => $_POST["email"],
                    "password" => $encriptar,
                    "nombre" => $_POST["nombre"],
                    "rol" => $_POST["rol"],
                    "imagen" => $ruta
                );

                $respuesta = ModeloAdministrador::mdlEditarAdmin($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
            
                      Swal.fire({
                        icon: 'success',
                        title: '¡El usuario se ha editado correctamente!',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        closeOnConfirm: false
                        }).then((result)=>{
                
                        if(result.value){
                
                            window.location.assign('index.php?pagina=editar-admin&id=" . $_GET["id"] . "');
                        }
                    })
                              
                      
                           </script>";
                }
            } else {

                echo "<script>
            
                  Swal.fire({
                    icon: 'error',
                    title: '¡El usuario no debe llevar caracteres especiales!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location.assign('index.php?pagina=editar-admin&id=" . $_GET["id"] . "');
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // BORRAR SUBCATEGORIAS
    static public function ctrBorrarAdmin()
    {

        if (isset($_GET["idAdmin"])) {

            $tabla = "administradores";
            $datos = $_GET["idAdmin"];

            $respuesta =  ModeloAdministrador::mdlBorrarAdmin($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
          
                Swal.fire({
                  icon: 'success',
                  title: '¡El usuario ha sido eliminado!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
              }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'administrador';
                  }
              })
                        
                
                     </script>";
            }
        }
    }
}