<?php

class ControladorRelacion
{

    // MOSTRAR RELACION
    static public function ctrMostrarRelacion()
    {

        $tabla = "relacion";
        $tabla2 = "excursiones";
        $tabla3 = "subcategoria";

        $resultado = ModeloRelacion::mdlMostrarRelacion($tabla, $tabla2, $tabla3);

        return $resultado;
    }

    // CREAR RELACION
    static public function ctrCrearRelacion()
    {

        if (isset($_POST["id_subcategoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_subcategoria"])) {

                $tabla = "relacion";

                $datos = array(
                    "id_subcategoria" => $_POST["id_subcategoria"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
           
                     Swal.fire({
                       icon: 'success',
                       title: '¡La relación ha sido creada!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                       }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'relacion-excursiones';
                       }
                   })
                             
                     
                          </script>";
                }
            } else {

                echo "<script>
           
                 Swal.fire({
                   icon: 'error',
                   title: '¡Error al crear la relación!',
                   showConfirmButton: true,
                   confirmButtonText: 'Cerrar',
                   closeOnConfirm: false
                   }).then((result)=>{
           
                   if(result.value){
           
                       window.location = 'relacion-excursiones';
                   }
               })
                         
                 
                      </script>";
            }
        }
    }

    // BORRAR RELACION
    static public function ctrBorrarRelacion()
    {

        if (isset($_GET["idRelacion"])) {

            $tabla = "relacion";
            $datos = $_GET["idRelacion"];

            $respuesta = ModeloRelacion::mdlBorrarRelacion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
         
               Swal.fire({
                 icon: 'success',
                 title: '¡La relación ha sido eliminada!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
             }).then((result)=>{
         
                 if(result.value){
         
                     window.location = 'relacion-excursiones';
                 }
             })
                       
               
                    </script>";
            }
        }
    }

    // CREAR RELACION-LUGARES
    static public function ctrCrearRelacionL()
    {

        if (isset($_POST["id_subcategoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_subcategoria"])) {

                $tabla = "relacion";

                $datos = array(
                    "id_subcategoria" => $_POST["id_subcategoria"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡La relación ha sido creada!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'relacion-lugares';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡Error al crear la relación!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'relacion-lugares';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }

    // BORRAR RELACION-LUGARES
    static public function ctrBorrarRelacionL()
    {

        if (isset($_GET["idRelacionL"])) {

            $tabla = "relacion";
            $datos = $_GET["idRelacionL"];

            $respuesta = ModeloRelacion::mdlBorrarRelacion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡La relación ha sido eliminada!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'relacion-lugares';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // CREAR RELACION-BUSES
    static public function ctrCrearRelacionB()
    {

        if (isset($_POST["id_subcategoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_subcategoria"])) {

                $tabla = "relacion";

                $datos = array(
                    "id_subcategoria" => $_POST["id_subcategoria"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡La relación ha sido creada!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'relacion-buses';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡Error al crear la relación!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'relacion-buses';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }

    // BORRAR RELACION-BUSES
    static public function ctrBorrarRelacionB()
    {

        if (isset($_GET["idRelacionB"])) {

            $tabla = "relacion";
            $datos = $_GET["idRelacionB"];

            $respuesta = ModeloRelacion::mdlBorrarRelacion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡La relación ha sido eliminada!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'relacion-buses';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // CREAR RELACION-RENTA
    static public function ctrCrearRelacionR()
    {

        if (isset($_POST["id_subcategoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_subcategoria"])) {

                $tabla = "relacion";

                $datos = array(
                    "id_subcategoria" => $_POST["id_subcategoria"],
                    "id_excursion" => $_POST["id_excursion"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡La relación ha sido creada!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'relacion-rentas';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡Error al crear la relación!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'relacion-rentas';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }

    // BORRAR RELACION-BUSES
    static public function ctrBorrarRelacionR()
    {

        if (isset($_GET["idRelacionR"])) {

            $tabla = "relacion";
            $datos = $_GET["idRelacionR"];

            $respuesta = ModeloRelacion::mdlBorrarRelacion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡La relación ha sido eliminada!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'relacion-rentas';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }



    // MOSTRAR OTRA RELACION
    static public function ctrMostrarOtraRelacion()
    {

        $tabla = "otras";
        $tabla2 = "excursiones";
        $tabla3 = "subcategoria";

        $resultado = ModeloRelacion::mdlMostrarRelacionOtras($tabla, $tabla2, $tabla3);

        return $resultado;
    }

    // CREAR OTRA RELACION
    static public function ctrCrearOtraRelacion()
    {

        if (isset($_POST["id_subcategoriao"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_subcategoriao"])) {

                $tabla = "otras";

                $datos = array(
                    "id_subcategoriao" => $_POST["id_subcategoriao"],
                    "id_excursiono" => $_POST["id_excursiono"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOtras($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
           
                     Swal.fire({
                       icon: 'success',
                       title: '¡La relación ha sido creada!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                       }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'relacion-excursiones';
                       }
                   })
                             
                     
                          </script>";
                }
            } else {

                echo "<script>
           
                 Swal.fire({
                   icon: 'error',
                   title: '¡Error al crear la relación!',
                   showConfirmButton: true,
                   confirmButtonText: 'Cerrar',
                   closeOnConfirm: false
                   }).then((result)=>{
           
                   if(result.value){
           
                       window.location = 'relacion-excursiones';
                   }
               })
                         
                 
                      </script>";
            }
        }
    }

    // BORRAR OTRA RELACION
    static public function ctrBorrarOtraRelacion()
    {

        if (isset($_GET["idRelacion"])) {

            $tabla = "otras";
            $datos = $_GET["idRelacion"];

            $respuesta = ModeloRelacion::mdlBorrarOtraRelacion($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
         
               Swal.fire({
                 icon: 'success',
                 title: '¡La relación ha sido eliminada!',
                 showConfirmButton: true,
                 confirmButtonText: 'Cerrar',
                 closeOnConfirm: false
             }).then((result)=>{
         
                 if(result.value){
         
                     window.location = 'relacion-excursiones';
                 }
             })
                       
               
                    </script>";
            }
        }
    }


    // MOSTRAR RELACION OPCIONAL
    static public function ctrMostrarRelacionOpcional()
    {

        $tabla = "reopcional";
        $tabla2 = "excursiones";
        $tabla3 = "opcionales";

        $resultado = ModeloRelacion::mdlMostrarRelacionOpcional($tabla, $tabla2, $tabla3);

        return $resultado;
    }

    // CREAR OTRA RELACION TRASLADO
    static public function ctrCrearRelacionOpcionalT()
    {

        if (isset($_POST["id_excursion"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursion"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursion"],
                    "id_opcional" => $_POST["id_opcional"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
             
                       Swal.fire({
                         icon: 'success',
                         title: '¡La relación ha sido creada!',
                         showConfirmButton: true,
                         confirmButtonText: 'Cerrar',
                         closeOnConfirm: false
                         }).then((result)=>{
                 
                         if(result.value){
                 
                             window.location = 'relacion-opcional';
                         }
                     })
                               
                       
                            </script>";
                }
            } else {

                echo "<script>
             
                   Swal.fire({
                     icon: 'error',
                     title: '¡Error al crear la relación!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                     }).then((result)=>{
             
                     if(result.value){
             
                         window.location = 'relacion-opcional';
                     }
                 })
                           
                   
                        </script>";
            }
        }
    }

    // CREAR OTRA RELACION Almuerzo
    static public function ctrCrearRelacionOpcionalA()
    {

        if (isset($_POST["id_excursionA"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionA"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionA"],
                    "id_opcional" => $_POST["id_opcionalA"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
               
                         Swal.fire({
                           icon: 'success',
                           title: '¡La relación ha sido creada!',
                           showConfirmButton: true,
                           confirmButtonText: 'Cerrar',
                           closeOnConfirm: false
                           }).then((result)=>{
                   
                           if(result.value){
                   
                               window.location = 'relacion-opcional';
                           }
                       })
                                 
                         
                              </script>";
                }
            } else {

                echo "<script>
               
                     Swal.fire({
                       icon: 'error',
                       title: '¡Error al crear la relación!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                       }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'relacion-opcional';
                       }
                   })
                             
                     
                          </script>";
            }
        }
    }

    // CREAR OTRA RELACION Navegacion
    static public function ctrCrearRelacionOpcionalN()
    {

        if (isset($_POST["id_excursionN"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionN"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionN"],
                    "id_opcional" => $_POST["id_opcionalN"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                  
                            Swal.fire({
                              icon: 'success',
                              title: '¡La relación ha sido creada!',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'relacion-opcional';
                              }
                          })
                                    
                            
                                 </script>";
                }
            } else {

                echo "<script>
                  
                        Swal.fire({
                          icon: 'error',
                          title: '¡Error al crear la relación!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'relacion-opcional';
                          }
                      })
                                
                        
                             </script>";
            }
        }
    }

    // CREAR OTRA RELACION Vianda
    static public function ctrCrearRelacionOpcionalV()
    {

        if (isset($_POST["id_excursionV"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionV"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionV"],
                    "id_opcional" => $_POST["id_opcionalV"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                      
                                Swal.fire({
                                  icon: 'success',
                                  title: '¡La relación ha sido creada!',
                                  showConfirmButton: true,
                                  confirmButtonText: 'Cerrar',
                                  closeOnConfirm: false
                                  }).then((result)=>{
                          
                                  if(result.value){
                          
                                      window.location = 'relacion-opcional';
                                  }
                              })
                                        
                                
                                     </script>";
                }
            } else {

                echo "<script>
                      
                            Swal.fire({
                              icon: 'error',
                              title: '¡Error al crear la relación!',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'relacion-opcional';
                              }
                          })
                                    
                            
                                 </script>";
            }
        }
    }


    // CREAR OTRA RELACION Vianda
    static public function ctrCrearRelacionOpcionalE()
    {

        if (isset($_POST["id_excursionE"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionE"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionE"],
                    "id_opcional" => $_POST["id_opcionalE"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                      
                                Swal.fire({
                                  icon: 'success',
                                  title: '¡La relación ha sido creada!',
                                  showConfirmButton: true,
                                  confirmButtonText: 'Cerrar',
                                  closeOnConfirm: false
                                  }).then((result)=>{
                          
                                  if(result.value){
                          
                                      window.location = 'relacion-opcional';
                                  }
                              })
                                        
                                
                                     </script>";
                }
            } else {

                echo "<script>
                      
                            Swal.fire({
                              icon: 'error',
                              title: '¡Error al crear la relación!',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'relacion-opcional';
                              }
                          })
                                    
                            
                                 </script>";
            }
        }
    }



    // CREAR OTRA RELACION Buses
    static public function ctrCrearRelacionOpcionalB()
    {

        if (isset($_POST["id_excursionB"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionB"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionB"],
                    "id_opcional" => $_POST["id_opcionalB"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                      
                                Swal.fire({
                                  icon: 'success',
                                  title: '¡La relación ha sido creada!',
                                  showConfirmButton: true,
                                  confirmButtonText: 'Cerrar',
                                  closeOnConfirm: false
                                  }).then((result)=>{
                          
                                  if(result.value){
                          
                                      window.location = 'relacion-opcional';
                                  }
                              })
                                        
                                
                                     </script>";
                }
            } else {

                echo "<script>
                      
                            Swal.fire({
                              icon: 'error',
                              title: '¡Error al crear la relación!',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'relacion-opcional';
                              }
                          })
                                    
                            
                                 </script>";
            }
        }
    }


    // CREAR OTRA RELACION Buses
    static public function ctrCrearRelacionOpcionalR()
    {

        if (isset($_POST["id_excursionR"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_excursionR"])) {

                $tabla = "reopcional";

                $datos = array(
                    "id_excursion" => $_POST["id_excursionR"],
                    "id_opcional" => $_POST["id_opcionalR"]
                );

                $respuesta = ModeloRelacion::mdlCrearRelacionOpcional($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                       
                                 Swal.fire({
                                   icon: 'success',
                                   title: '¡La relación ha sido creada!',
                                   showConfirmButton: true,
                                   confirmButtonText: 'Cerrar',
                                   closeOnConfirm: false
                                   }).then((result)=>{
                           
                                   if(result.value){
                           
                                       window.location = 'relacion-opcional';
                                   }
                               })
                                         
                                 
                                      </script>";
                }
            } else {

                echo "<script>
                       
                             Swal.fire({
                               icon: 'error',
                               title: '¡Error al crear la relación!',
                               showConfirmButton: true,
                               confirmButtonText: 'Cerrar',
                               closeOnConfirm: false
                               }).then((result)=>{
                       
                               if(result.value){
                       
                                   window.location = 'relacion-opcional';
                               }
                           })
                                     
                             
                                  </script>";
            }
        }
    }

    // BORRAR OTRA RELACION
    static public function ctrBorrarRelacionOpcional()
    {

        if (isset($_GET["idRelacionOp"])) {

            $tabla = "reopcional";
            $datos = $_GET["idRelacionOp"];

            $respuesta = ModeloRelacion::mdlBorrarRelacionOpcional($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
           
                 Swal.fire({
                   icon: 'success',
                   title: '¡La relación ha sido eliminada!',
                   showConfirmButton: true,
                   confirmButtonText: 'Cerrar',
                   closeOnConfirm: false
               }).then((result)=>{
           
                   if(result.value){
           
                       window.location = 'relacion-opcional';
                   }
               })
                         
                 
                      </script>";
            }
        }
    }
}