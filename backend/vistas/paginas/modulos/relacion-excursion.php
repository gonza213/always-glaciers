<?php

$subcategorias = ControladorSubcategorias::ctrMostrarSubcategorias();
$excursiones = ControladorExcursiones::ctrMostrarExcursiones();
$relacion = ControladorRelacion::ctrMostrarRelacion();
$otra = ControladorRelacion::ctrMostrarOtraRelacion();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Excursiones en el Calafate</h1>
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
                                <div class="col-md-5">
                                    <div class="card card-warning card-outline">
                                        <div class="card-header">
                                            Crear Relacion
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Subcategorias de Excursiones</label>
                                                        <select class="form-control" name="id_subcategoria">
                                                            <?php foreach ($subcategorias as $key => $value) : ?>
                                                            <?php if ($value["categoria"] == "excursiones") : ?>
                                                            <option value="<?php echo $value["id"] ?>">
                                                                <?php echo $value["subcategoria"] ?></option>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Excursiones</label>
                                                        <select class="form-control" name="id_excursion">
                                                            <?php foreach ($excursiones as $key => $value) : ?>
                                                            <option value="<?php echo $value["id"] ?>">
                                                                <?php echo $value["titulo"] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-warning btn-block">Crear
                                                            Relación</button>
                                                    </div>
                                                </div>
                                                <?php

                                                $crearRelacion = new ControladorRelacion();
                                                $crearRelacion->ctrCrearRelacion();

                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card card-warning card-outline">

                                        <div class="card-body">
                                            <div id="example1_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example1"
                                                            class="table table-borderless table-hover table-responsive dataTable">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th>
                                                                        #</th>
                                                                    <th>
                                                                        Subcategorias</th>
                                                                    <th>
                                                                        Excursiones</th>

                                                                    <th>
                                                                        Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($relacion as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "excursiones") : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1 ?></td>
                                                                    <td><?php echo $value["subcategoria"] ?></td>
                                                                    <td><?php echo $value["titulo"] ?></td>

                                                                    <td><a class="btn btn-danger text-white btnEliminarRelacion"
                                                                            idRelacion="<?php echo $value["id_r"] ?>"><i
                                                                                class="fa fa-trash"></i></a></td>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card card-warning card-outline">
                                        <div class="card-header">
                                            Crear Otra Relacion
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Subcategorias de Excursiones</label>
                                                        <select class="form-control" name="id_subcategoriao">
                                                            <?php foreach ($subcategorias as $key => $value) : ?>
                                                            <?php if ($value["categoria"] == "excursiones") : ?>
                                                            <option value="<?php echo $value["id"] ?>">
                                                                <?php echo $value["subcategoria"] ?></option>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Excursiones</label>
                                                        <select class="form-control" name="id_excursiono">
                                                            <?php foreach ($excursiones as $key => $value) : ?>
                                                            <option value="<?php echo $value["id"] ?>">
                                                                <?php echo $value["titulo"] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-warning btn-block">Crear
                                                            Relación</button>
                                                    </div>
                                                </div>
                                                <?php

                                                $crearOtraRelacion = new ControladorRelacion();
                                                $crearOtraRelacion->ctrCrearOtraRelacion();

                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card card-warning card-outline">

                                        <div class=" card-body">
                                            <div id="example1_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example1"
                                                            class="table table-borderless table-hover table-responsive dataTable">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th>
                                                                        #</th>
                                                                    <th>
                                                                        Subcategorias</th>
                                                                    <th>
                                                                        Excursiones</th>

                                                                    <th>
                                                                        Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($otra as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "excursiones") : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1 ?></td>
                                                                    <td><?php echo $value["subcategoria"] ?></td>
                                                                    <td><?php echo $value["titulo"] ?></td>

                                                                    <td><a class="btn btn-danger text-white btnEliminarRelacion"
                                                                            idRelacion="<?php echo $value["id_o"] ?>"><i
                                                                                class="fa fa-trash"></i></a></td>
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

$borrarRelacion = new ControladorRelacion();
$borrarRelacion->ctrBorrarRelacion();

?>


<?php

$borrarOtraRelacion = new ControladorRelacion();
$borrarOtraRelacion->ctrBorrarOtraRelacion();

?>