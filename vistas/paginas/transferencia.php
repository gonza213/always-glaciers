<!-- NAVEGADOR -->

<?php

$id = $_GET["id"];
$planes = ControladorPlanes::ctrMostrarPlanes();
$turnos = ControladorTurnos::ctrTurnos();
$relacionTraslado = ControladorRelacion::ctrMostrarRelacionOpcionalTraslado($id);
$relacionAlmuerzo = ControladorRelacion::ctrMostrarRelacionOpcionalAlmuerzo($id);
$relacionVianda = ControladorRelacion::ctrMostrarRelacionOpcionalVianda($id);
$relacionNavegacion = ControladorRelacion::ctrMostrarRelacionOpcionalNavegacion($id);
$relacionEntrada = ControladorRelacion::ctrMostrarRelacionOpcionalEntrada($id);
$operacion = mt_rand(1000, 10000);


?>

<?php

include "modulos/cabecera.php";


?>


<main class="oe-blog oe-blog-width-sidebar">
    <div class="bg-color-con-borde">

        <div class="alto-fijo-top"></div>
        <section class="container oe-main-content" data-uk-scrollspy="{cls:'animate-started',delay:300}">
            <div class="row oe-effects oe-frombottom">
                <h2 class="oe-heading-3 oe-heading-deco-reflect m-t-40">Pago por Transferencia</h2>
            </div>
        </section>
    </div>

    <div class="container col-gris" id="containerTransferencia">
    <form method="POST" enctype="multipart/form-data">
        <div class="col-md-2"></div>
                    <div class="row col-md-8" style="margin-top: 10px; margin-bottom: 10px; border: 1px solid gray; box-shadow: 2px 0px 4px #888888">
                        <div class="col-md-12">
                            <div class="faqs-contacto">
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <!-- <span>Excursión:</span> -->
                                    <?php foreach($planes as $key => $value):?>
                                        <?php if($value["id"] == $id): ?>
                                            <h3><?php echo $value["titulo"] ?></h3>
                                            <input type="hidden" name="excursion" value="<?php echo $value["titulo"] ?>">
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Precio Adultos:</span>
                                    <?php foreach($planes as $key => $value):?>
                                        <?php if($value["id"] == $id): ?>
                                            <h4 >$ <span id="precio_bajo"><?php echo $value["precio_bajo"] ?></span></h4>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Precio Niños:</span>
                                    <?php foreach($planes as $key => $value):?>
                                        <?php if($value["id"] == $id): ?>
                                            <h4>$ <span id="precio_ninos"><?php echo $value["precio_ninos"] ?></span></h4>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div id="datosPersonales">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                        style="padding:0;">
                                        <span>Datos personales: Pasajero Principal </span>
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="nombre" placeholder="Nombre"
                                            type="text" id="nombreT" required>
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="email" placeholder="Email"
                                            type="text" id="emailT" required>

                                    </div>

                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="telefono" placeholder="Teléfono"
                                            type="text" id="telT" required>

                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="dni"
                                            placeholder="DNI o Pasaporte" type="number" id="dniT" required>

                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="nacionalidad"
                                            placeholder="Nacionalidad" type="text" id="nacT" required>

                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-7 text-right">Agregar pasajero <a style="cursor: point;" onclick="modal()" class="float-right btn btn-info btn-sm"><i class="fa fa-plus"></i></a></div> 
                                <input type="hidden" name="otros" class="form-control" id="xxx" value="-">
                                <div id="infoPasajeros">    
                                </div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Día de reserva y cantidad de pasajeros:</span>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12 col-md-3cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="fecha" id="datepickerModal"
                                        placeholder="Selecciona fecha" type="text" required>
                                </div>
                               
                                <div class="form-group col-sm-5 col-xs-12 col-md-5 cel3 formContacto"
                                style="padding:0;">
                                    <select class="form-control input-lg required" name="turnos" id="turnosT" required>
                                         <option  value="">Seleccione un turno</option>
                                         <?php foreach($turnos as $key => $value):?>
                                        <?php if($value["id_excursion"] == $id): ?>
                                            <option value="<?php echo $value["horarios"] ?>"><?php echo $value["horarios"] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12 col-md-2 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" id="adultosT" name="adultos"
                                        placeholder="Adultos" type="number" required>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12 col-md-2 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" id="ninos" name="ninos"
                                        placeholder="Niños" type="number">
                                </div>

                                <div class="col-md-12">
                                <p class="f-s-12 txt-labels" style="margin-left:15px;"><b>Opcionales</b>. Deseo incluir
                            en la reserva:</p>
                                </div>
                        
                        <?php foreach ($relacionTraslado as $key => $value) : ?>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                <div class="checkbox" style="margin-top:0;">
                                    <input type="checkbox" name="trasladoRsm" id="ttrasladoRsm<?php echo $key + 1 ?>" />

                                    <label for="ttrasladoRsm<?php echo $key + 1 ?>"></label>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                <input type="hidden" name="precioTraslado" id="tprecioTraslado<?php echo $key + 1 ?>"
                                    value="<?php echo $value["precio"] ?>">
                                <strong class="celeste-reserva">
                                    <sup>$</sup>
                                    <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                    <sup>ARS</sup>
                                </strong>
                            </div>
                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                <div class="panel-group panel-group-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#fff;">
                                            <span class="f-s-14" id="tTraslado<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                            <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse"
                                                data-target="#collapse1<?php echo $key + 1 ?>">Ver detalle</a>
                                        </div>
                                        <div style="height: auto;" id="collapse1<?php echo $key + 1 ?>"
                                            class="collapse">
                                            <div class="panel-body" style="border:none;">
                                                <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionAlmuerzo as $key => $value) : ?>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                <div class="checkbox" style="margin-top:0;">
                                    <input type="checkbox" name="almuerzoRsm" id="talmuerzoRsm<?php echo $key + 1 ?>" />
                                    <label for="talmuerzoRsm<?php echo $key + 1 ?>"></label>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                <input type="hidden" name="precioAlmuerzo" id="tprecioAlmuerzo<?php echo $key + 1 ?>"
                                    value="<?php echo $value["precio"] ?>">
                                <strong class="celeste-reserva">
                                    <sup>$</sup>
                                    <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                    <sup>ARS</sup>
                                </strong>
                            </div>
                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                <div class="panel-group panel-group-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#fff;">
                                            <span class="f-s-14" id="tAlmuerzo<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                            <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse"
                                                data-target="#detalle-opcional-27<?php echo $key + 1 ?>">Ver detalle</a>
                                        </div>
                                        <div style="height: auto;" id="detalle-opcional-27<?php echo $key + 1 ?>"
                                            class="collapse">
                                            <div class="panel-body" style="border:none;">
                                                <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionVianda as $key => $value) : ?>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                <div class="checkbox" style="margin-top:0;">
                                    <input class="opcionales" type="checkbox" name="viandaRsm"
                                        id="tviandaRsm<?php echo $key + 1 ?>" />
                                    <label for="tviandaRsm<?php echo $key + 1 ?>"></label>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                <input type="hidden" name="precioVianda" id="tprecioVianda<?php echo $key + 1 ?>"
                                    value="<?php echo $value["precio"] ?>">
                                <strong class="celeste-reserva">
                                    <sup>$</sup>
                                    <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                    <sup>ARS</sup>
                                </strong>
                            </div>
                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                <div class="panel-group panel-group-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#fff;">
                                            <span class="f-s-14" id="tVianda<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                            <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse"
                                                data-target="#detalle-opcional-99<?php echo $key + 1 ?>">Ver detalle</a>
                                        </div>
                                        <div style="height: auto;" id="detalle-opcional-99<?php echo $key + 1 ?>"
                                            class="collapse">
                                            <div class="panel-body" style="border:none;">
                                                <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionNavegacion as $key => $value) : ?>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                <div class="checkbox" style="margin-top:0;">
                                    <input class="opcionales" type="checkbox" name="navegacionRsm"
                                        id="tnavegacionRsm<?php echo $key + 1 ?>" />
                                    <label for="tnavegacionRsm<?php echo $key + 1 ?>"></label>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                <input type="hidden" name="precioNavegacion" id="tprecioNavegacion<?php echo $key + 1 ?>"
                                    value="<?php echo $value["precio"] ?>">
                                <strong class="celeste-reserva">
                                    <sup>$</sup>
                                    <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                    <sup>ARS</sup>
                                </strong>
                            </div>
                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                <div class="panel-group panel-group-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#fff;">
                                            <span class="f-s-14" id="tNavegacion<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                            <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse"
                                                data-target="#detalle-opcional-100<?php echo $key + 1 ?>">Ver
                                                detalle</a>
                                        </div>
                                        <div style="height: auto;" id="detalle-opcional-100<?php echo $key + 1 ?>"
                                            class="collapse">
                                            <div class="panel-body" style="border:none;">
                                                <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionEntrada as $key => $value) : ?>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                <div class="checkbox" style="margin-top:0;">
                                    <input class="opcionales" type="checkbox" name="entradaRsm"
                                        id="tentradaRsm<?php echo $key + 1 ?>" />
                                    <label for="tentradaRsm<?php echo $key + 1 ?>"></label>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                <input type="hidden" name="precioEntrada" id="tprecioEntrada<?php echo $key + 1 ?>"
                                    value="<?php echo $value["precio"] ?>">
                                <strong class="celeste-reserva">
                                    <sup>$</sup>
                                    <span class="f-s-16" id=""><?php echo $value["precio"] ?></span>
                                    <sup>ARS</sup>
                                </strong>
                            </div>
                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                <div class="panel-group panel-group-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#fff;">
                                            <span class="f-s-14"><?php echo $value["opcional"] ?></span>
                                            <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse"
                                                data-target="#detalle-opcional-101<?php echo $key + 1 ?>">Ver
                                                detalle</a>
                                        </div>
                                        <div style="height: auto;" id="detalle-opcional-101<?php echo $key + 1 ?>"
                                            class="collapse">
                                            <div class="panel-body" style="border:none;">
                                                <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                                <div id="precios">
                                   
                                    <div id="ocultar-precios" class="col-md-12">
                                        <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto"
                                            style="padding:0;">

                                            <a style="cursor:pointer;" class="btn btn-primary btn-sm"
                                                onclick="ver()">Calcular
                                                precios <i class="fa fa-arrow-right"></i></a>

                                        </div>
                                    </div>
                                </div>

                                <div id="precio-total">
                                    <div id="ocultar-total" class="col-md-12 text-right">

                                        <h4>Precio a transferir: $ <span id="precio-final"
                                                style="font-weight: bold;">0</span> ARS</h4>
                                        <input type="hidden" name="precio" id="precioFinal" class="form-control" >

                                    </div>
                                </div>

                             
                                <div id="cbu" style="margin-bottom: 10px; padding: 20px;">
                                    <div class="row" >
                                        <div class="col-md-12" >
                                            <h5 style="font-weight: bold;">Datos bancarios de Always Glaciers:</h5> 
                                        </div>
                                        
                                       <?php foreach ($otros as $key => $value) : ?>
                                        <div class="col-md-6">
                                             CBU:  <span style="font-weight: bold;"><?php echo $value["cbu"] ?></span> 
                                        </div>
                                        <div class="col-md-6">
                                             Alias:  <span style="font-weight: bold;"><?php echo $value["alias"] ?></span> 
                                        </div>
                                        <div class="col-md-6">
                                             Cuit:  <span style="font-weight: bold;"><?php echo $value["cuit"] ?></span> 
                                        </div>
                                        <div class="col-md-6">
                                             Banco:  <span style="font-weight: bold;"><?php echo $value["banco"] ?></span> 
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                         
                                   
                                <div id="adjuntar" style="margin-bottom: 10px;">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3" >
                                        <span>Adjuntar comprobante</span>
                                        <input type="file" class="form-control input-lg" name="comprobante" id="comprobanteT" required>
                                    </div>
                                </div>
                                <input type="hidden" name="opcionales" class="form-control" id="verificarT">
                                <input type="hidden" name="operacion" class="form-control" value="0<?php echo $operacion ?>">
                            </div>
                        </div>
                     
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-lg" onclick="transferencia()">Solicitar Voucher</button>
                        </div>
                    </div>
                </div>
               <?php 
                 $enviar = new ControllerTrasnferencia();
                 $enviar -> ctrEnviarTransferencia();
               ?>
            </form>
    </div>

</main>