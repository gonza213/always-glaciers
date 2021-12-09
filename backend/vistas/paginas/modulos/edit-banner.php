<?php

$id = $_GET["id"];

$banner = ControladorBanner::ctrMostrarBanner();
$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editar slider</h1>
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
                                <div class="card card-warning card-outline">

                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Excursiones</label>
                                                <?php foreach ($banner as $key => $value) : ?>
                                                <?php if ($_GET["id"] == $value["id"]) : ?>
                                                <input type="hidden" value="<?php echo $value["id"] ?>"
                                                    class="form-control" name="id">
                                                <select name="excursion" class="form-control">
                                                    <option value="<?php echo $value["excursion"] ?>">
                                                        <?php echo $value["excursion"] ?></option>
                                                    <?php endif ?>
                                                    <?php endforeach ?>
                                                    <?php foreach ($excursiones as $key => $value) : ?>
                                                    <option value="<?php echo $value["titulo"] ?>">
                                                        <?php echo $value["titulo"] ?></option>
                                                    <?php endforeach ?>
                                                </select>

                                            </div>
                                            <?php foreach ($banner as $key => $value) : ?>
                                            <?php if ($_GET["id"] == $value["id"]) : ?>
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="number" class="form-control" name="precio"
                                                    value="<?php echo $value["precio"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control imagen" name="img">
                                                <p class=" help-block small text-center">Dimensión: 1400px(ancho),
                                                    600px(alto) |
                                                    Formato: JPG o PNG</p>
                                                <img src="<?php echo $value["img"] ?>"
                                                    class="img-thumbnail previsualizar"
                                                    style="width: 100%; height: 200px" />
                                                <input type="hidden" value="<?php echo $value["img"] ?>"
                                                    class="form-control" name="imgActual">
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-warning btn-block text-white">Editar
                                                    Slider</button>
                                            </div>
                                            <?php

                                            $editarBanner = new ControladorBanner();
                                            $editarBanner->ctrEditarBanner();


                                            ?>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-md-12">
                                <a href="banner" class="btn btn-warning pull-left text-white">Regresar a banner</a>
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