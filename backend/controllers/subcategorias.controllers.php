<?php

class ControladorSubcategorias
{

    // MOSTRAR SUBCATEGORIAS
    static public function ctrMostrarSubcategorias()
    {

        $tabla = "subcategoria";

        $resultado = ModeloSubcategorias::mdlMostrarSubcategorias($tabla);

        return $resultado;
    }

    // CREAR SUBCATEGORIAS
    static public function ctrCrearSubcategoria()
    {

        if (isset($_POST["categoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["categoria"])) {

                $tabla = "subcategoria";

                $datos = array(
                    "categoria" => $_POST["categoria"],
                    "subcategoria" => $_POST["subcategoria"]
                );

                $respuesta = ModeloSubcategorias::mdlCrearSubcategorias($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
        
                  Swal.fire({
                    icon: 'success',
                    title: '¡La categoría ha sido creada!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                    }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'subcategorias';
                    }
                })
                          
                  
                       </script>";
                }
            } else {

                echo "<script>
        
              Swal.fire({
                icon: 'error',
                title: '¡Error al crear la subcategoría!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
                }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'subcategorias';
                }
            })
                      
              
                   </script>";
            }
        }
    }

    // BORRAR SUBCATEGORIAS
    static public function ctrBorrarSubcategoria()
    {

        if (isset($_GET["idSub"])) {

            $tabla = "subcategoria";
            $datos = $_GET["idSub"];

            $respuesta = ModeloSubcategorias::mdlBorrarSubcategorias($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
        
              Swal.fire({
                icon: 'success',
                title: '¡La subcategoria ha sido eliminado!',
                showConfirmButton: true,
                confirmButtonText: 'Cerrar',
                closeOnConfirm: false
            }).then((result)=>{
        
                if(result.value){
        
                    window.location = 'subcategorias';
                }
            })
                      
              
                   </script>";
            }
        }
    }

    // CREAR SUBCATEGORIAS
    static public function ctrEditarSubcategoria()
    {

        if (isset($_POST["editCategoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editCategoria"])) {

                $tabla = "subcategoria";

                $datos = array(
                    "id" => $_POST["id"],
                    "categoria" => $_POST["editCategoria"],
                    "subcategoria" => $_POST["editSubcategoria"]
                );

                $respuesta = ModeloSubcategorias::mdlEditarSubcategorias($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
         
                   Swal.fire({
                     icon: 'success',
                     title: '¡La categoría ha sido editada!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                         window.location = 'subcategorias';
                     }
                 })
                           
                   
                        </script>";
                }
            } else {

                echo "<script>
         
               Swal.fire({
                 icon: 'error',
                 title: '¡Error al editar la subcategoría!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
                 }).then((result)=>{
         
                 if(result.value){
         
                     window.location = 'subcategorias';
                 }
             })
                       
               
                    </script>";
            }
        }
    }

    // MOSTRAR SUBCATEGORIA
    static public function ctrVerSubcategoria($item, $valor)
    {

        $tabla = "subcategoria";

        $resultado = ModeloSubcategorias::mdlVerSubcategoria($tabla, $item, $valor);

        return $resultado;
    }
}