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
                    <h1 class="m-0 text-dark p-2">Actualizar precios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a style="cursor:pointer" onclick="botonRenta2()"
                        class="btn btn-sm btn-danger pull-right ml-2 text-white">Renta Car</a>
                    <a style="cursor:pointer" onclick="botonBuses2()"
                        class="btn btn-sm btn-warning pull-right ml-2 text-white">Buses
                        Regulares</a>
                    <a style="cursor:pointer" onclick="botonExcursiones()"
                        class="btn btn-sm btn-info pull-right ml-2 text-white">Excursiones</a>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <?php include "buscador2.php" ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="text-info" style="display: block;" id="titulo-excursion">Excursiones</h3>
                            <h3 class="text-warning" style="display: none;" id="titulo-buses">Buses Regulares</h3>
                            <h3 class="text-danger" style="display: none;" id="titulo-renta">Renta Car</h3>
                            <div id="excursiones-precio" style="display: block;">
                                <?php foreach ($excursiones as $key => $value) : ?>
                                <?php if ($value["category"] == "Excursion") : ?>
                                <div class="row p-5 itemBody" style="border-bottom: 2px solid #888888;">
                                    <div class="col-md-12">
                                        <h5 class="text-info tituloItem" style="font-weight: bold;">
                                            <?php echo $value["titulo"] ?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="id"
                                                            value="<?php echo $value["id"] ?>">
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Bajo</label>
                                                            <input type="text" class="form-control" name="precio_bajo"
                                                                value="<?php echo $value["precio_bajo"] ?>">
                                                        </div>
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Alto</label>
                                                            <input type="text" class="form-control" name="precio_alto"
                                                                value="<?php echo $value["precio_alto"] ?>">
                                                        </div>
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Niño</label>
                                                            <input type="text" class="form-control" name="precio_ninos"
                                                                value="<?php echo $value["precio_ninos"] ?>">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-info  pull-right">Actualizar</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            $editarPrecio = new ControladorExcursiones();
                                                            $editarPrecio->editarExcursion();
                                                            ?>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div id="buses-precio" style="display: none;">
                                <?php foreach ($excursiones as $key => $value) : ?>
                                <?php if ($value["category"] == "Buses") : ?>
                                <div class="row p-5 itemBody" style="border-bottom: 2px solid #888888;">
                                    <div class="col-md-12">
                                        <h5 class="text-warning tituloItem" style="font-weight: bold;">
                                            <?php echo $value["titulo"] ?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-outline card-warning">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="id"
                                                            value="<?php echo $value["id"] ?>">
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Bajo</label>
                                                            <input type="text" class="form-control" name="precio_bajo"
                                                                value="<?php echo $value["precio_bajo"] ?>">
                                                        </div>
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Alto</label>
                                                            <input type="text" class="form-control" name="precio_alto"
                                                                value="<?php echo $value["precio_alto"] ?>">
                                                        </div>
                                                        <div class="col-md-4 p-3">
                                                            <label>Precio Niño</label>
                                                            <input type="text" class="form-control" name="precio_ninos"
                                                                value="<?php echo $value["precio_ninos"] ?>">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-warning  pull-right">Actualizar</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            $editarPrecio = new ControladorExcursiones();
                                                            $editarPrecio->editarExcursion();
                                                            ?>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div id="renta-precio" style="display: none;">
                                <?php foreach ($excursiones as $key => $value) : ?>
                                <?php if ($value["category"] == "Renta") : ?>
                                <div class="row p-5 itemBody" style="border-bottom: 2px solid #888888;">
                                    <div class="col-md-12">
                                        <h5 class="text-danger tituloItem" style="font-weight: bold;">
                                            <?php echo $value["titulo"] ?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-outline card-danger">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="id"
                                                            value="<?php echo $value["id"] ?>">
                                                        <div class="col-md-6 p-3">
                                                            <label>Precio Bajo</label>
                                                            <input type="text" class="form-control" name="precio_bajo"
                                                                value="<?php echo $value["precio_bajo"] ?>">
                                                        </div>
                                                        <div class="col-md-6 p-3">
                                                            <label>Precio Alto</label>
                                                            <input type="text" class="form-control" name="precio_alto"
                                                                value="<?php echo $value["precio_alto"] ?>">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-danger  pull-right">Actualizar</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            $editarPrecio = new ControladorExcursiones();
                                                            $editarPrecio->editarExcursion();
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

