<?php


class ControladorOpcionales
{

    //MOSTRAR OPCIONALES
    static public function ctrMostrarOpcionales()
    {

        $tabla = "opcionales";

        $respuesta = ModeloOpcionales::mdlMostrarOpcionales($tabla);

        return $respuesta;
    }


    //Editar Opcional
    static public function crearOpcional()
    {

        if (isset($_POST["opcional"])) {

            $tabla = "opcionales";

            $datos = array(
                "categoria" => $_POST["categoria"],
                "opcional" => $_POST["opcional"],
                "precio" => $_POST["precio"],
                "detalle" => $_POST["detalle"]
            );

            $respuesta = ModeloOpcionales::crearOpcional($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
                 Swal.fire({
                     icon: 'success',
                     title: '¡El opcional se ha creado correctamente!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                         window.location = 'opcionales';
                     }
                 })
                 </script>";
            }
        }
    }

    //Editar Opcional
    static public function editarOpcional()
    {

        if (isset($_POST["id_op"])) {

            $tabla = "opcionales";

            $datos = array(
                "id_op" => $_POST["id_op"],
                "opcional" => $_POST["opcional"],
                "precio" => $_POST["precio"],
                "detalle" => $_POST["detalle"]
            );

            $respuesta = ModeloOpcionales::editarOpcional($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡El opcional se ha actualizado correctamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'opcionales';
                    }
                })
                </script>";
            }
        }
    }


    // BORRAR opcional
    static public function borrarOpcional()
    {

        if (isset($_GET["idOpcional"])) {

            $tabla = "opcionales";
            $datos = $_GET["idOpcional"];

            $respuesta = ModeloOpcionales::borrarOpcional($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
           
                 Swal.fire({
                   icon: 'success',
                   title: '¡El opcional ha sido eliminado!',
                   showConfirmButton: true,
                   confirmButtonText: 'Cerrar',
                   closeOnConfirm: false
               }).then((result)=>{
           
                   if(result.value){
           
                       window.location = 'opcionales';
                   }
               })
                         
                 
                      </script>";
            }
        }
    }
}