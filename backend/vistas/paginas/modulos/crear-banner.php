<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear nuevo slider</h1>
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
                            <div class="col-md-6 mx-auto">
                                <div class="card card-success card-outline">

                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Excursiones</label>
                                                <select class="form-control" name="excursion">
                                                    <?php foreach ($excursiones as $key => $value) : ?>
                                                    <option value="<?php echo $value["titulo"] ?>">
                                                        <?php echo $value["titulo"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="number" class="form-control" name="precio"
                                                    placeholder="Escribe precio">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control-file imagen" name="img" required>
                                                <p class="help-block small text-center">Dimension: 1400px(ancho),
                                                    800px(alto) |
                                                    Formato: JPG o PNG</p>
                                                <img src="vistas/img/banner/imagen.png"
                                                    class="img-thumbnail previsualizar"
                                                    style="width: 100%; height: 200px" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">Crear
                                                    Slider</button>
                                            </div>
                                            <?php

                                            $crearBanner = new ControladorBanner();
                                            $crearBanner->ctrCrearBanner();


                                            ?>
                                        </form>
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