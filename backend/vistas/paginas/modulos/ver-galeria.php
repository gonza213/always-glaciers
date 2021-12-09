<?php

$id = $_GET["id"];

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

$galeria = ControladorGaleria::ctrMostrarImagen();

?>


<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php foreach ($excursiones as $key => $value) : ?>
                    <?php if ($id == $value["id"]) : ?>
                    <h1 class="m-0 text-dark">Ver galeria de <?php echo $value["titulo"]; ?></h1>
                    <?php endif ?>
                    <?php endforeach ?>
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
                                            <p class="text-center"><span class="fa fa-arrow-down"></span> Arrastra tu
                                                imagen aqui</p>
                                            <div id="<?php echo $_GET["id"]; ?>">
                                                <ul id="columnSlide" style="border: 3px dashed #3399ff;">
                                                    <?php foreach ($galeria as $key => $value) : ?>
                                                    <?php if ($id == $value["id_excursion"]) : ?>
                                                    <li style="list-style: none; display: inline-block" class="p-2"
                                                        id="<?php echo $value["id"] ?>">
                                                        <button
                                                            class="fa fa-times pull-right btn btn-danger p-2 eliminarImagen"
                                                            ruta="<?php echo $value["imagen"] ?>"></button><img
                                                            style="width: 200px !important; height: 200px !important;"
                                                            src="<?php echo substr($value["imagen"], 6) ?>"
                                                            class="img-thumbnail">
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    // $verGaleria  = new ControladorGaleria();
                                                    // $verGaleria->mostrarImagenVista();
                                                    ?>
                                                </ul>
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