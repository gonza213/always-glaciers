<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursionesInicio();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Inicio</h1>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>$ 15000</h3>

                                                            <p>Ganancias</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-cash"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">Más Info <i
                                                                class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>12</h3>

                                                            <p>Ventas</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-android-cart"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">Más Info <i
                                                                class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>9</h3>

                                                            <p>Nuevos clientes</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-android-happy"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">Más info <i
                                                                class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card card-warning card-outline">
                                        <div class="card-header">
                                            <h3>Últimas excursiones</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="example1_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table
                                                            class="table table-borderless table-hover table-responsive  dataTable">
                                                            <thead>
                                                                <tr role="row">

                                                                    <th>
                                                                        Titulo</th>

                                                                    <th>
                                                                        Imagen</th>
                                                                    <th>
                                                                        Precio</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <tr role="row" class="odd">

                                                                    <td><?php echo $value["titulo"] ?></td>

                                                                    <td><img src="<?php echo $value["banner"] ?>"
                                                                            class="img-thumbnail"
                                                                            style="width: 200px !important; height: 150px !important" />
                                                                    </td>
                                                                    <td>$ <?php echo $value["precio_bajo"] ?></td>

                                                                </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-info card-outline">
                                                <div class="card-header">
                                                    <h4>Ultimo mensaje recibido</h4>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-responsive">
                                                        <thead>
                                                            <th>Nombre</th>
                                                            <th></th>
                                                        </thead>
                                                        <tbody>
                                                            <td>Gonzalo Vidal</td>
                                                            <td>
                                                                <a href="" class="btn btn-info btn-sm"><i
                                                                        class="fa fa-eye"></i> ver mensaje</a>
                                                            </td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3>Calendario</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div id="datepicker"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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