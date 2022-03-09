<?php

$mercado = ControllerMercado::ctrMostrarMercado();
$mercado_carrito = ControllerMercado::ctrMostrarMercadoCarrito();
$mercado_renta = ControllerMercado::ctrMostrarMercadoRenta();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">PayPal</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header">
                            <h4>Lista de Reservas Individuales</h4>
                        </div>
                        <div class="card-body">
                            <div class="card card-danger card-outline">

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1" class="table table-borderless table-hover table-responsive dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Operación</th>
                                                            <th>
                                                                Excursión</th>
                                                            <th>
                                                                Pasajero Ppal</th>

                                                            <th>
                                                                N° Transacción</th>
                                                            <th>
                                                                Precio Total</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($mercado as $key => $value) : ?>
                                                            <?php if ($value['metodo_pago'] == "PayPal") : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1; ?></td>
                                                                    <td>N° <?php echo $value["operacion"] ?></td>
                                                                    <td><?php echo $value["excursion"] ?></td>

                                                                    <td>
                                                                        <?php
                                                                        $detalles = json_decode($value["pasajeros"]);

                                                                        echo '<b>Nombre:</b> ';
                                                                        echo $detalles[0]->nombre;
                                                                        echo ' ';
                                                                        echo $detalles[0]->apellidos;
                                                                        echo '<br> <b>Tel:</b> ';
                                                                        echo $detalles[0]->tel;
                                                                        echo '<br> <b>Email:</b> ';
                                                                        echo $detalles[0]->email;
                                                                        echo '<br> <b>DNI:</b> ';
                                                                        echo $detalles[0]->dni;
                                                                        echo '<br> <b>Edad:</b> ';
                                                                        echo $detalles[0]->edad;
                                                                        echo '<br> <b>Nacionalidad:</b> ';
                                                                        echo $detalles[0]->nacionalidad;


                                                                        ?>
                                                                    </td>

                                                                    <td><?php echo $value["numero_transaccion"] ?></td>
                                                                    <td>$ <?php echo $value["total"] ?> USD</td>
                                                                    <td>
                                                                        <a class="btn btn-info text-white btnVerMercado" idMercado="<?php echo $value["id"] ?>"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModalReserva"></i></a>
                                                                        <a class="btn btn-danger text-white btnBorrarPaypal" idPaypal="<?php echo $value["id"] ?>"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lista de Reservas del Carrito</h4>
                        </div>
                        <div class="card-body">
                            <div class="card card-danger card-outline">

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example3" class="table table-borderless table-hover table-responsive dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Operación</th>
                                                            <th>
                                                                Excursiones</th>
                                                            <th>
                                                                Pasajero Ppal</th>
                                                            <th>
                                                                N° Transacción</th>
                                                            <th>
                                                                Precio Total</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($mercado_carrito as $key => $value) : ?>
                                                            <?php if ($value['metodo_pago'] == "PayPal") : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1; ?></td>
                                                                    <td>N° <?php echo $value["operacion"] ?></td>
                                                                    <td>
                                                                        <?php
                                                                        $detalles = json_decode($value["excursiones"]);

                                                                        foreach ($detalles as $key => $value) {

                                                                            echo '<p>' . $value->excursion . '</p>';
                                                                        }



                                                                        ?>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            <?php foreach ($mercado_carrito as $key => $value) : ?>
                                                                <?php if ($value['metodo_pago'] == "PayPal") : ?>

                                                                    <td>
                                                                        <?php
                                                                        $detalles = json_decode($value["pasajeros"]);

                                                                        echo '<b>Nombre:</b> ';
                                                                        echo $detalles[0]->nombre;
                                                                        echo ' ';
                                                                        echo $detalles[0]->apellidos;
                                                                        echo '<br> <b>Tel:</b> ';
                                                                        echo $detalles[0]->tel;
                                                                        echo '<br> <b>Email:</b> ';
                                                                        echo $detalles[0]->email;
                                                                        echo '<br> <b>DNI:</b> ';
                                                                        echo $detalles[0]->dni;
                                                                        echo '<br> <b>Edad:</b> ';
                                                                        echo $detalles[0]->edad;
                                                                        echo '<br> <b>Nacionalidad:</b> ';
                                                                        echo $detalles[0]->nacionalidad;


                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $value["numero_transaccion"] ?></td>
                                                                    <td>$ <?php echo $value["total"] ?> USD</td>
                                                                    <td>
                                                                        <a class="btn btn-info text-white btnVerMercadoCarrito" idMercadoCarrito="<?php echo $value["id"] ?>" data-toggle="modal" data-target="#exampleModalCarrito"><i class="fa fa-eye"></i></a>
                                                                        <a class="btn btn-danger text-white btnBorrarPaypal" idPaypal="<?php echo $value["id"] ?>"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lista de Reservas de Renta Car</h4>
                        </div>
                        <div class="card-body">
                            <div class="card card-danger card-outline">

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="exampleTraslado" class="table table-borderless table-hover table-responsive dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Operación</th>
                                                            <th>
                                                                Renta</th>
                                                            <th>
                                                                Pasajero Ppal</th>
                                                            <th>
                                                                N° Transacción</th>
                                                            <th>
                                                                Precio Total</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($mercado_renta as $key => $value) : ?>
                                                            <?php if ($value['metodo_pago'] == "Mercado Pago") : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1; ?></td>
                                                                    <td>N° <?php echo $value["operacion"] ?></td>
                                                                    <td>
                                                                        <?php
                                                                        $detalles = json_decode($value["renta"]);



                                                                        echo '<p><b>Vehiculo:</b> ' . $detalles->renta . '</p>';
                                                                        echo '<p><b>Entrada:</b> ' . $detalles->entrada . '</p>';
                                                                        echo '<p><b>Salida:</b> ' . $detalles->salida . '</p>';
                                                                        echo '<p><b>Cantidad de dias:</b> ' . $detalles->dias . '</p>';
                                                                        echo '<p><b>Opcionales:</b> ';
                                                                        $opcionales = $detalles->opcionales;

                                                                        foreach ($opcionales as $key => $value) {

                                                                            echo  $opcionales;
                                                                        }

                                                                        echo '</p>';


                                                                        ?>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            <?php foreach ($mercado_renta as $key => $value) : ?>
                                                                <?php if ($value['metodo_pago'] == "Mercado Pago") : ?>

                                                                    <td>
                                                                        <?php
                                                                        $detalles = json_decode($value["pasajeros"]);

                                                                        echo '<b>Nombre:</b> ';
                                                                        echo $detalles->nombre;
                                                                        echo ' ';
                                                                        echo $detalles->apellido;
                                                                        echo '<br> <b>Tel:</b> ';
                                                                        echo $detalles->tel;
                                                                        echo '<br> <b>DNI:</b> ';
                                                                        echo $detalles->dni;
                                                                        echo '<br> <b>Domicilio:</b> ';
                                                                        echo $detalles->dol;
                                                                        echo '<br> <b>N° Registro de conducir:</b> ';
                                                                        echo $detalles->registro;
                                                                        echo '<br> <b>Expiración del registro:</b> ';
                                                                        echo $detalles->exp;
                                                                        echo '<br> <b>Retiro del vehiculo:</b> ';
                                                                        echo $detalles->retiro;
                                                                        echo '<br> <b>Devolución del vehiculo:</b> ';
                                                                        echo $detalles->devolucion;


                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $value["numero_transaccion"] ?></td>
                                                                    <td>$ <?php echo $value["total"] ?> ARS</td>
                                                                    <td>
                                                                        <!-- <a class="btn btn-info text-white btnVerMercadoCarrito" idMercadoCarrito="<?php echo $value["id"] ?>" data-toggle="modal" data-target="#exampleModalCarrito"><i class="fa fa-eye"></i></a> -->
                                                                        <a class="btn btn-danger text-white btnBorrarMercadoRentaP" idMercadoRenta="<?php echo $value["id"] ?>"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?php

$borrarMercado = new ControllerMercado();
$borrarMercado->ctrBorrarPaypal();

?>

<?php

$borrarMercadoRenta = new ControllerMercado();
$borrarMercadoRenta->ctrBorrarMercadoRentaP();

?>
<?php

$borrarMercado = new ControllerMercado();
$borrarMercado->ctrBorrarPaypalCarrito();

?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Ver Reserva carrito</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Excursiones:</h3>
                        </div>
                        <div class="col-md-12 text-left" id="verCarrito">
                        </div>
                        <div class="col-md-12" style="border-top: 2px solid #888888">  </div>
                        <div class="col-md-12">
                            <h3>Pasajeros:</h3>
                        </div>
                        <div class="col-md-12 text-left" id="verPasajerosCarrito">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                   
                </div>
          
        
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalReserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Ver Reserva</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Excursión:</h3>
                        </div>
                        <div class="col-md-12 text-left" id="verReserva">
                        </div>
                        <div class="col-md-12" style="border-top: 2px solid #888888">  </div>
                        <div class="col-md-12">
                            <h3>Pasajeros:</h3>
                        </div>
                        <div class="col-md-12 text-left" id="verPasajerosReserva">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                   
                </div>
          
        
        </div>
    </div>
</div>