<?php


class ControladorRecorrido
{
    // CREAR RECORRIDO
    static public function ctrCrearRecorrido()
    {

        if (isset($_POST["titulo"])) {

            $datos = array(
                "id_excursion" => $_POST["id_excursion"],
                "titulo" => $_POST["titulo"],
                "horario" => $_POST["horario"],
                "icono" => $_POST["icono"],
                "recorrido" => $_POST["recorrido"],
                "descripcion" => $_POST["descripcion"]
            );

            $tabla = "recorridos";

            $respuesta = ModeloRecorrido::mdlCrearRecorrido($datos, $tabla);

            if ($respuesta == "ok") {

                echo "<script>
         
                   Swal.fire({
                     icon: 'success',
                     title: '¡El recorrido se ha creado correctamente!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                        window.location.assign('index.php?pagina=ver-recorrido&id=" . $_GET["id"] . "');
                     }
                 })
                           
                   
                        </script>";
            } else {

                echo "<script>
         
               Swal.fire({
                 icon: 'error',
                 title: '¡El recorrido no debe llevar caracteres especiales!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
                 }).then((result)=>{
         
                 if(result.value){
         
                    window.location.assign('index.php?pagina=ver-recorrido&id=" . $_GET["id"] . "');
                 }
             })
                       
               
                    </script>";
            }
        }
    }

    // MOSTRAR RECORRIDO
    static public function ctrMostrarRecorrido()
    {

        $tabla = "recorridos";

        $resultado = ModeloRecorrido::mdlMostrarRecorrido($tabla);

        return $resultado;
    }

    // CREAR RECORRIDO
    static public function ctrEditarRecorrido()
    {

        if (isset($_POST["titulo"])) {

            $datos = array(
                "id" => $_POST["id"],
                "titulo" => $_POST["titulo"],
                "horario" => $_POST["horario"],
                "icono" => $_POST["icono"],
                "recorrido" => $_POST["recorrido"],
                "descripcion" => $_POST["descripcion"]
            );

            $tabla = "recorridos";

            $respuesta = ModeloRecorrido::mdlEditarRecorrido($datos, $tabla);

            if ($respuesta == "ok") {

                echo "<script>
         
                   Swal.fire({
                     icon: 'success',
                     title: '¡El recorrido se ha editado correctamente!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){

                        window.location.assign('index.php?pagina=editar-recorrido&id=" . $_GET["id"] . "');
                   
                     }
                 })
                           
                   
                        </script>";
            } else {

                echo "<script>
         
               Swal.fire({
                 icon: 'error',
                 title: '¡El recorrido no debe llevar caracteres especiales!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
                 }).then((result)=>{
         
                 if(result.value){

                    window.location.assign('index.php?pagina=editar-recorrido&id=" . $_GET["id"] . "');
                   
                 }
             })
                       
               
                    </script>";
            }
        }
    }

    // BORRAR RECORRIDO
    static public function ctrBorrarRecorrido()
    {

        if (isset($_GET["idRecorrido"])) {

            $tabla = "recorridos";
            $datos = $_GET["idRecorrido"];

            $respuesta = ModeloRecorrido::mdlBorrarRecorrido($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
          
                Swal.fire({
                  icon: 'success',
                  title: '¡El recorrido ha sido eliminado!',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  closeOnConfirm: false
              }).then((result)=>{
          
                  if(result.value){
          
                      window.location = 'recorridos';
                  }
              })
                        
                
                     </script>";
            }
        }
    }
}