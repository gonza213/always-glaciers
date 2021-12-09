<?php

class ControladorContacto
{

    static public function ctrMostrarContactos()
    {

        $tabla = "contactos";

        $respuesta = ModeloContacto::mdlMostrarContactos($tabla);

        return $respuesta;
    }

    // BORRAR SUBCATEGORIAS
    static public function ctrBorrarContacto()
    {

        if (isset($_GET["idContacto"])) {

            $tabla = "contactos";
            $datos = $_GET["idContacto"];

            $respuesta = ModeloContacto::mdlBorrarContacto($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
          
                Swal.fire({
                  icon: 'success',
                  title: '¡El contacto ha sido borrado!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
              }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'contacto';
                  }
              })
                        
                
                     </script>";
            }
        }
    }
}