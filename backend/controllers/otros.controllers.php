<?php

class ControladorOtros
{

    //MOSTRAR OTROS
    static public function ctrMostrarOtros()
    {

        $tabla = "otros";

        $respuesta = ModeloOtros::mdlMostrarOtros($tabla);

        return $respuesta;
    }

    //EDITAR OTROS
    static public function editarOtros()
    {

        if (isset($_POST["id"])) {

            $tabla = "otros";

            $datos = array(
                "id" => $_POST["id"],
                "descuento" => $_POST["descuento"],
                "cbu" => $_POST["cbu"],
                "alias" => $_POST["alias"],
                "cuit" => $_POST["cuit"],
                "banco" => $_POST["banco"],
                "cuenta" => $_POST["cuenta"]
            );

            $respuesta = ModeloOtros::editarOtros($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Se ha actualizado correctamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'otros';
                    }
                })
                </script>";
            }
        }
    }



    //MOSTRAR REDES
    static public function ctrMostrarRedes()
    {

        $tabla = "redes";

        $respuesta = ModeloOtros::mdlMostrarRedes($tabla);

        return $respuesta;
    }

    //EDITAR RED
    static public function editarRed()
    {

        if (isset($_POST["id_a"])) {

            $tabla = "redes";

            $datos = array(
                "id" => $_POST["id_a"],
                "detalle" => $_POST["detalle"]
            );

            $respuesta = ModeloOtros::editarRed($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡La red se ha actualizado correctamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'otros';
                    }
                })
                </script>";
            }
        }
    }
}