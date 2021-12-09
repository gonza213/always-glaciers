<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Excursiones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="crear-excursion" class="btn btn-sm btn-info pull-right">Nueva excursión</a>
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
                            <div class="card card-info card-outline">

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2"
                                                    class="table table-borderless table-hover table-responsive dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Titulo</th>

                                                            <th style="width: 300px !important">
                                                                Imagen</th>
                                                            <th>
                                                                Precio Bajo</th>
                                                            <th style="width: 100px !important">
                                                                Recomendaciones</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($excursiones as $key => $value) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $key + 1; ?></td>
                                                            <td><?php echo $value["titulo"] ?></td>

                                                            <td style="width: 300px"><img
                                                                    src="<?php echo $value["banner"] ?>"
                                                                    class="img-thumbnail"
                                                                    style="width: 200px !important; height: 150px !important" />
                                                            </td>
                                                            <td>$ <?php echo $value["precio_bajo"] ?></td>
                                                            <?php if ($value["recomendado"] == "1") : ?>
                                                            <td style="width: 100px !important">
                                                                <button
                                                                    class="btn btn-success btn-sm text-center">Recomendado</button>
                                                            </td>
                                                            <?php else : ?>
                                                            <td style="width: 100px !important">
                                                                <button class="btn btn-danger btn-sm text-center">No
                                                                    Recomendado</button>
                                                            </td>
                                                            <?php endif; ?>
                                                            <td><a href="index.php?pagina=ver-excursion&id=<?php echo $value["id"] ?>"
                                                                    class="btn btn-secondary text-white"><i
                                                                        class="fa fa-eye"></i></a>


                                                                <a class="btn btn-danger text-white btnEliminarExcursion"
                                                                    idExcursion="<?php echo $value["id"] ?>"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
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

$borrarExcursion = new ControladorExcursiones();
$borrarExcursion->ctrBorrarExcursion();

?>