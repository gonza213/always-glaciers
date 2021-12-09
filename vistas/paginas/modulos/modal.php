<?php

$planes = ControladorPlanes::ctrMostrarPlanes();
$catalogo = ControladorPlanes::ctrMostrarPlanesCatalogo();

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Reservar por transferencia</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form action="formulario.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="faqs-contacto">
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Excursión:</span>
                                    <input class="form-control input-lg required" name="excursion" id="excursion"
                                        placeholder="Excursion" type="text" required readonly>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Precio Adultos:</span>
                                    <input class="form-control input-lg required" name="precio_bajo" id="precio_bajo"
                                        placeholder="Precio adultos" type="text" required readonly>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Precio Niños:</span>
                                    <input class="form-control input-lg required" name="precio_ninos" id="precio_ninos"
                                        placeholder="Precio niños" type="text" required readonly>
                                </div>
                                <div id="datosPersonales">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                        style="padding:0;">
                                        <span>Datos personales:  </span>
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="nombre" placeholder="Nombre"
                                            type="text" required>
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="email" placeholder="Email"
                                            type="text" required>

                                    </div>

                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="telefono" placeholder="Teléfono"
                                            type="text" required>

                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="dni"
                                            placeholder="DNI o Pasaporte" type="text" required>

                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                        style="padding:0;">
                                        <input class="form-control input-lg required" name="nacionalidad"
                                            placeholder="Nacionalidad" type="text" required>

                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-7 text-right">Agregar pasajero <a style="cursor: point;" onclick="modal()" class="float-right btn btn-info btn-sm"><i class="fa fa-plus"></i></a></div> 
                                <div id="infoPasajeros"></div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Día de reserva y cantidad de pasajeros:</span>
                                </div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="fecha" id="datepickerModal"
                                        placeholder="Selecciona fecha" type="text" required>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                   >
                                    <select class="form-control input-lg required" name="" id="turnos">
                                         <option  value="">Seleccione un turno</option>
                                        <option selected value=""></option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" id="adultos" name="adultos"
                                        placeholder="Adultos" type="number" required>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" id="ninos" name="ninos"
                                        placeholder="Niños" type="number" required>
                                </div>

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

                                <hr>


                                <!-- <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3" style="padding:0;">
                                    Consulta <textarea class="form-control textarea-contacto" name="mensaje" rows="3"
                                        required></textarea>

                                </div> -->

                                <div id="cbu">
                                    <span style="font-weight: bold;">Ver datos bancarios:</span>
                                    <div id="ocultar-cbu" class="col-md-12">
                                        <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                            style="padding:0;">

                                            <a style="cursor:pointer;" class="btn btn-success btn-sm"
                                                onclick="verCbu()">Ver
                                                Datos</a>

                                        </div>
                                    </div>
                                </div>

                                <div id="adjuntar">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3">
                                        <span>Adjuntar comprobante</span>
                                        <input type="file" class="form-control input-lg">
                                    </div>
                                </div>

                                <div id="precio-total">
                                    <div id="ocultar-total" class="col-md-12 text-right">

                                        <h4>Precio a transferir: $ <span id="precio-final"
                                                style="font-weight: bold;">0</span> ARS</h4>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Solicitar Voucher</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Consultar pago por transferencia</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form action="formulario.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="faqs-contacto">
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Excursión:</span>
                                    <select class="form-control input-lg  required" name="excursion">
                                        <?php foreach ($planes as $key => $value) : ?>
                                        <?php if ($value["category"] == "Excursion") : ?>
                                        <option value="<?php echo $value["titulo"] ?>">
                                            <?php echo $value["titulo"] ?>
                                        </option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Datos personales:</span>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="nombre" placeholder="Nombre"
                                        type="text" required>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="email" placeholder="Email"
                                        type="text" required>

                                </div>

                                <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="telefono" placeholder="Teléfono"
                                        type="text" required>

                                </div>
                                <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="dni"
                                        placeholder="DNI o Pasaporte" type="text" required>

                                </div>
                                <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="nacionalidad"
                                        placeholder="Nacionalidad" type="text" required>

                                </div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Día de reserva y cantidad de pasajeros:</span>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12 col-md-6 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="fecha" id="datepickerModal"
                                        placeholder="Selecciona fecha" type="text" required>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" name="adultos" placeholder="Adultos"
                                        type="number" required>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto"
                                    style="padding:0;">

                                    <input class="form-control input-lg required" name="ninos" placeholder="Niños"
                                        type="number" required>
                                </div>

                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3" style="padding:0;">
                                    Consulta <textarea class="form-control textarea-contacto" name="mensaje" rows="5"
                                        required></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Enviar consulta</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Catálogos de las excursiones</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group">
                            <?php foreach ($catalogo as $key => $value) : ?>
                            <?php if ($value["category"] == "Excursion") : ?>
                            <form method="post" id="my_forma<?php echo $value["id"]; ?>"
                                action="index.php?pagina=reserva&id=<?php echo $value["id"]; ?>">
                                <input type="hidden" name="fecha" value="<?php echo date('y-m-d') ?>">
                                <input type="hidden" name="imp" value="<?php echo $value["id"]; ?>">
                                <a href="javascript:{}"
                                    onclick="document.getElementById('my_forma<?php echo $value["id"]; ?>').submit();"
                                    class="list-group-item list-group-item-action"
                                    style="font-weight:bold; cursor: pointer"><?php echo $value["titulo"] ?></a>
                            </form>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="prueba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Agregar pasajero:</h2>
            </div>
                <div class="modal-body">
                    <div id="datosPersonales">
                        <div class="row">
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <span>Datos personales:  </span>
                                </div>
                                <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="nombre" placeholder="Nombre Completo"
                                        type="text" id="nameP" required>
                                </div>
                        
                                <div class="form-group col-sm-4 col-xs-12 col-md-3 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="edad"
                                        placeholder="Edad" type="text" id="edadP" required>

                                </div>
                                <div class="form-group col-sm-5 col-xs-12 col-md-5 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="dni" id="dniP"
                                        placeholder="DNI o Pasaporte" type="text" required>

                                </div>
                                <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto"
                                    style="padding:0;">
                                    <input class="form-control input-lg required" name="nacionalidad" id="nacP"
                                        placeholder="Nacionalidad" type="text" required>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button  class="btn btn-info" id="boton-guardar">Añadir</button>
                    </div>
                </div>
        </div>
    </div>
</div>