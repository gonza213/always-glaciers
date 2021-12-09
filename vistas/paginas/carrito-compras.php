<?php

if (isset($_COOKIE['Categoria_Carrito'])) {
    $categoria = $_COOKIE['Categoria_Carrito'];
}
?>
<?php include "modulos/cabecera.php"; ?>


<main class="oe-blog oe-blog-width-sidebar">
    <div class="bg-color-con-borde">

        <div class="alto-fijo-top"></div>
        <section class="container oe-main-content" data-uk-scrollspy="{cls:'animate-started',delay:300}">
            <div class="row oe-effects oe-frombottom">
                <?php if ($categoria == "Excursion") : ?>
                    <h2 class="oe-heading-3 oe-heading-deco-reflect m-t-40"><i class="fa fa-shopping-cart"></i> Formulario de
                        Resevas</h2>
                <?php else : ?>
                    <h2 class="oe-heading-3 oe-heading-deco-reflect m-t-40"><i class="fa fa-shopping-cart"></i> Formulario de pasajes
                        Buses</h2>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <div class="container col-gris" id="containerReserva">
        <div class="row col-md-12" style="margin-top: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
            <div class="col-md-6" style="margin-top: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888">
                <form method="POST" id="guardarForm" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <h5>Formulario contacto:</h5>
                            <span class="text-danger">Campos obligatorios (*)</span> <br>
                            <p>Pasajero 1 <button type="button" class="btn btn-info btn-sm pull-right" onclick="botonPasajero()" data-toggle="modal" data-target="#modalPasajeros">Añadir pasajero</button></p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Nombre: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Nombres" id="nombre-reserva" name="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Apellidos: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Apellido" id="apellido-reserva" name="apellidos">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Email: <b class="text-danger">*</b></span>
                                    <input type="email" class="form-control" placeholder="Email" id="email-reserva" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Teléfono: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Teléfono" id="tel-reserva" name="tel">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>DNI o Pasaporte: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Dni o Pasaporte" id="dni-reserva" name="dni">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>Fecha nacimiento: <b class="text-danger">*</b></span>
                                    <input type="date" class="form-control" placeholder="Fecha nacimiento" id="edad-reserva" name="edad">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>Nacionalidad: <b class="text-danger">*</b></span>
                                    <input type="text" class="form-control" placeholder="Nacionalidad" id="nacionalidad-reserva" name="nacionalidad">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" style="margin-bottom: 5px;" onclick="btnLimpiar()" class="btn btn-warning btn-sm pull-right">Limpiar Datos</button>
                            </div>
                            <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;">
                            </div>
                            <div id="anadirPasajero">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card" style="margin-top: 10px; padding-left: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
                    <div class="card-body">
                        <?php if ($categoria == "Excursion") : ?>
                            <h4>Pedido de Reservas</h4>
                        <?php else : ?>
                            <h4>Pedido de Buses</h4>
                        <?php endif; ?>

                        <div id="pedidoCarrito"></div>
                        <h4 class="text-right" style="padding: 15px;">Total: $<b style="color: #024e6a" id="totalCarrito"></b> </h4>
                    </div>
                </div>
                <div class="card" style="margin-top: 10px; padding-left: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
                    <div class="card-body">
                        <div class="row p-5">
                            <h5 style="margin-left: 10px;">Opciones de pago:</h5>
                            <div class="col-md-10">
                                <select name="" class="form-control" id="selectPago">
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
                    $payment->transaction_amount = $_COOKIE["TotalCarrito"];
                    $payment->token = $token;
                    $payment->description = 'Excursiones';
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
                            "excursiones" => $_COOKIE['Excursiones'],
                            "pasajeros" => $_COOKIE['Pasajeros'],
                            "metodo_pago" => $_COOKIE['Metodo'],
                            "total" => $_COOKIE['TotalCarrito'],
                            "operacion" => $operacion,
                            "numero_transaccion" => $payment->id
                        );

                        $respuesta = ControllerCarrito::ctrEnviarCarrito($datos);


                        if ($respuesta == 'ok') {

                            echo "
                            
                            <script>

                                    
                                    Swal.fire({
                                    icon: 'success',
                                    title: '¡Felicitaciones! Has reservado las excursiones exitosamente',
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
                    
                                window.location = 'carrito-reservas';
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


<!-- Modal -->
<div class="modal fade" id="modalPasajeros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir pasajero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formPasajero">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dni" placeholder="Dni o Pasaporte">
                            </div>
                        </div>
                     
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <span for="">Fecha nacimiento:</span>
                                <input type="date" class="form-control" name="edad" placeholder="Fecha nacimiento">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarDatos()">Añadir pasajero</button>
                </div>
            </form>
        </div>
    </div>
</div>