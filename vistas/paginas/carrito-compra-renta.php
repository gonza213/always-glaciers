<?php

if (isset($_COOKIE['Category'])) {
    $categoria = $_COOKIE['Category'];
}
?>
<?php include "modulos/cabecera.php"; ?>


<main class="oe-blog oe-blog-width-sidebar">
    <div class="bg-color-con-borde">

        <div class="alto-fijo-top"></div>
        <section class="container oe-main-content" data-uk-scrollspy="{cls:'animate-started',delay:300}">
            <div class="row oe-effects oe-frombottom">
                    <h2 class="oe-heading-3 oe-heading-deco-reflect m-t-40"><i class="fa fa-shopping-cart"></i> Formulario de
                        Renta Car</h2>
           
            </div>
        </section>
    </div>

    <div class="container col-gris" id="containerReservaR">
        <div class="row col-md-12" style="margin-top: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
            <div class="col-md-6" style="margin-top: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888">
                <form method="POST" id="guardarForm" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <h5>Formulario contacto:</h5>
                            <span class="text-danger">Campos obligatorios (*)</span> <br>
                            <!-- <p>Pasajero 1 <button type="button" class="btn btn-info btn-sm pull-right" id="botonPasajero" data-toggle="modal" data-target="#modalPasajeros">Añadir pasajero</button></p> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Nombre: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Nombres" id="nombre-reservaR" name="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Apellidos: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Apellidos" id="apellido-reservaR" name="apellidos">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>DNI: <b class="text-danger">*</b></span>
                                    <input type="number" class="form-control" placeholder="DNI" id="dni-reservaR" name="dni">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <span>Domicilio: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Domicilio" id="dol-reservaR" name="domicilio">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <span>Registro de conducir N°: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="N° de registro" id="registro-reservaR" name="registro">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>Fecha de expiración: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Fecha expiración" id="exp-reservaR" name="expiracion">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span>Fecha y hora y lugar de retiro : <b class="text-danger">*</b></span>
                                    <textarea name="retiro" class="form-control" rows="5" placeholder="Escribe fecha, hora y lugar..." id="retiroR"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span>Fecha y hora y lugar de devolución : <b class="text-danger">*</b></span>
                                    <textarea name="devolucion" class="form-control" rows="5" placeholder="Escribe fecha, hora y lugar..." id="devolucionR"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Teléfono: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Teléfono" id="tel-reservaR" name="tel">
                                </div>
                            </div>
                         
                            <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;">
                            </div>
                          
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card" style="margin-top: 10px; padding-left: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
                    <div class="card-body">
                        <h4>Pedido de Reserva</h4>
                        <ul class="list-group text-info p-5">
                                <li class="list-group-item">
                                    <span class="badge" style="background: #024e6a" id="vehicPed"></span>
                                    <b>Vehículo:</b>
                                </li>
                          
                            <li class="list-group-item">
                                <span class="badge" style="background: #024e6a" id="fechaEPed"></span>
                                <b>Fecha entrada:</b>
                            </li>
                            <li class="list-group-item">
                                <span class="badge" style="background: #024e6a" id="fechaSPed"></span>
                                <b>Fecha salida:</b>
                            </li>
                            <li class="list-group-item">
                            <span class="badge" style="background: #024e6a" id="diasPed"></span>
                                <b>Cantidad de días:</b>
                            </li>
                            <li class="list-group-item">
                                <span class="badge" style="background: #024e6a" id="opcionalesPed"></span>
                                <b>Opcionales:</b>
                            </li>
                        </ul>
                        <h4 class="text-right" style="padding: 15px;">Total: $<b style="color: #024e6a" id="totalPed"></b> </h4>
                    </div>
                </div>
                <div class="card" style="margin-top: 10px; padding-left: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
                    <div class="card-body">
                        <div class="row p-5">
                            <h5 style="margin-left: 10px;">Opciones de pago:</h5>
                            <div class="col-md-10">
                                <select name="" class="form-control" id="selectPagoR" onclick="pago()">
                                    <option value="">Seleccione una opcion...</option>
                                    <option value="mercado">Mercado Pago</option>
                                    <option value="paypal">Paypal</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <textarea style="display:none" class="form-control" id="verDatos" rows="5"></textarea>
                </div>

                <div class="col-md-12" style="margin-bottom: 30px; display:none" id="divMercado">
                    <div class="card">
                        <div class="card-body d-flex">
                            <figure>
                                <img src="vistas/images/logo-mercadopago.png" style="width: 200px; height: 80px;">
                                <div class="pull-right" style="padding-top: 20px" id="btnMercado"></div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 30px; display:none" id="divPaypal">
                    <div class="card">
                        <div class="card-body d-flex">
                            <figure>
                                <img src="vistas/images/logo-paypal.png" style="width: 200px; height: 80px;">
                                <div class="pull-right" style="padding-top: 20px" id="btnPaypal"></div>
                            </figure>
                        </div>
                    </div>
                </div>



                <?php

                $operacion = mt_rand(10000, 20000);

                if (isset($_REQUEST['token'])) {

                    $token = $_REQUEST["token"];
                    $payment_method_id = $_REQUEST["payment_method_id"];
                    $installments = $_REQUEST["installments"];
                    $issuer_id = $_REQUEST["issuer_id"];

                    MercadoPago\SDK::setAccessToken("APP_USR-4951476334635977-101012-f572cbdb78968afb6b8990384f770051__LA_LD__-44572108");
                    //...
                    $payment = new MercadoPago\Payment();
                    $payment->transaction_amount = $_COOKIE['TotalRenta'];
                    $payment->token = $token;
                    $payment->description = 'Renta Car';
                    $payment->installments = $installments;
                    $payment->payment_method_id = $payment_method_id;
                    $payment->issuer_id = $issuer_id;
                    $payment->payer = array(
                        "email" => "john@yourdomain.com"
                    );
                    // Guarda y postea el pago
                    $payment->save();


                    // Imprime el estado del pago
                    if ($payment->status == "approved") {
                       
                        $datos = array(
                            "excursiones" => $_COOKIE['Renta'],
                            "pasajeros" => $_COOKIE['Pasajeros'],
                            "metodo_pago" => $_COOKIE['Metodo'],
                            "total" => $_COOKIE['TotalRenta'],
                            "operacion" => $operacion,
                            "numero_transaccion" => $payment->id
                        );

                        $respuesta = ControllerCarrito::ctrEnviarCarrito($datos);


                        if ($respuesta == 'ok') {

                            echo "<script>
                                    
                                    Swal.fire({
                                    icon: 'success',
                                    title: '¡Felicitaciones! Has reservado tu vehiculo exitosamente',
                                    showConfirmButton: true,
                                    confirmButtonText: 'Cerrar',
                                    closeOnConfirm: false
                                    }).then((result)=>{
                            
                                    if(result.value){
                            
                                        window.location = 'index.php?pagina=index&status=apro';
                                    }
                                })
                                            
                        
                            </script>";
                        } else {
                            echo "<script>
                                    
                            Swal.fire({
                            icon: 'warning',
                            title: '¡Algo salio Mal!',
                            showConfirmButton: true,
                            confirmButtonText: 'Cerrar',
                            closeOnConfirm: false
                            }).then((result)=>{
                    
                            if(result.value){
                    
                                window.location = 'carrito-reserva';
                            }
                        })
                                    
                
                    </script>";
                        }
                    } else {

                        echo '<pre>';
                        print_r($payment->status);
                        echo '</pre>';
                    }
                    //...
                }



                ?>

                <button type="button" class="btn btn-info btn-block btn-lg pull-right" style="margin-bottom: 10px; display: none" id="btnPaypal"> <i class="fa fa-dollar"></i> Pagar</button>
            </div>

        </div>

    </div>

</main>

