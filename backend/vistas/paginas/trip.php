<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursionesPrecio();
$opcionales = ControladorOpcionales::ctrMostrarOpcionales();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark p-2">Actualizar tripAdvisor</h1>
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

                            <div id="excursiones-trip" style="display: block;">
                                <?php foreach ($excursiones as $key => $value) : ?>
                                <?php if ($value["category"] == "Excursion") : ?>
                                <div class="row p-5" style="border-bottom: 2px solid #888888;">
                                    <div class="col-md-12">
                                        <h5 class="text-info" style="font-weight: bold;">
                                            <?php echo $value["titulo"] ?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="id"
                                                            value="<?php echo $value["id"] ?>">
                                                        <div class="col-md-12 p-3">
                                                            <label>Link sitio:</label>
                                                            <input type="text" class="form-control" name="trip_link"
                                                                value="<?php echo $value["trip_link"] ?>">
                                                        </div>
                                                        <div class="col-md-12 p-3">
                                                            <label>Link script</label>
                                                            <input type="text" class="form-control" name="trip_detalle"
                                                                value="<?php echo $value["trip_detalle"] ?>">
                                                        </div>


                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-info  pull-right">Actualizar</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            $editarTrip = new ControladorExcursiones();
                                                            $editarTrip->editarTrip();
                                                            ?>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
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