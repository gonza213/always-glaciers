<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursionesPrecio();
$opcionales = ControladorOpcionales::ctrMostrarOpcionales();
$relacionOpcional = ControladorRelacion::ctrMostrarRelacionOpcional();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-5">
                    <h1 class="m-0 text-dark">Relación opcional</h1>
                </div><!-- /.col -->
                <div class="col-sm-7">
                    <a style="cursor:pointer" onclick="botonRenta()"
                        class="btn btn-sm btn-primary pull-right ml-2 text-white">Rent a car</a>
                    <a style="cursor:pointer" onclick="botonBuses()"
                        class="btn btn-sm btn-primary pull-right ml-2 text-white">Buses regulares</a>
                    <a style="cursor:pointer" onclick="botonEntrada()"
                        class="btn btn-sm btn-secondary pull-right ml-2 text-white">Entrada</a>
                    <a style="cursor:pointer" onclick="botonVianda()"
                        class="btn btn-sm btn-warning pull-right ml-2 text-white">Vianda</a>
                    <a style="cursor:pointer" onclick="botonNavegacion()"
                        class="btn btn-sm btn-info pull-right ml-2 text-white">Navegación</a>
                    <a style="cursor:pointer" onclick="botonAlmuerzo()"
                        class="btn btn-sm btn-success pull-right ml-2 text-white">Almuerzo</a>
                    <a style="cursor:pointer" onclick="botonTraslado()"
                        class="btn btn-sm btn-danger pull-right ml-2 text-white">Traslado</a>
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
                    <div class="card">
                        <div class="card-body">
                            <div id="trasladoOpcional">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-danger card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Excursiones</label>
                                                            <select class="form-control" name="id_excursion">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Excursion") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcional">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "traslado") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-danger btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionTra = new ControladorRelacion();
                                                    $crearRelacionTra->ctrCrearRelacionOpcionalT();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-danger card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleTraslado"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Excursión</th>
                                                                        <th>
                                                                            Traslado</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "traslado") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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
                            <div id="almuerzoOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-success card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Almuerzo
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Excursiones</label>
                                                            <select class="form-control" name="id_excursionA">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Excursion") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalA">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "almuerzo") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-success btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionAlm = new ControladorRelacion();
                                                    $crearRelacionAlm->ctrCrearRelacionOpcionalA();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-success card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleAlmuerzo"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Excursión</th>
                                                                        <th>
                                                                            Traslado</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "almuerzo") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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
                            <div id="navegacionOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-info card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Navegación
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Excursiones</label>
                                                            <select class="form-control" name="id_excursionN">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Excursion") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalN">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "navegacion") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionNav = new ControladorRelacion();
                                                    $crearRelacionNav->ctrCrearRelacionOpcionalN();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-info card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleNavegacion"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Excursión</th>
                                                                        <th>
                                                                            Traslado</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "navegacion") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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
                            <div id="viandaOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-warning card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Vianda
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Excursiones</label>
                                                            <select class="form-control" name="id_excursionV">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Excursion") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalV">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "vianda") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-warning btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionVia = new ControladorRelacion();
                                                    $crearRelacionVia->ctrCrearRelacionOpcionalV();

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
                                                            <table id="exampleVianda"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Excursión</th>
                                                                        <th>
                                                                            Vianda</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "vianda") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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

                            <div id="entradaOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-secondary card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Entrada
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Excursiones</label>
                                                            <select class="form-control" name="id_excursionE">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Excursion") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalE">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "entrada") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-secondary btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionEnt = new ControladorRelacion();
                                                    $crearRelacionEnt->ctrCrearRelacionOpcionalE();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-secondary card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleEntrada"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Excursión</th>
                                                                        <th>
                                                                            Entrada</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "entrada") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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

                            <div id="busesOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-secondary card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Buses Regulares
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Buses Regulares</label>
                                                            <select class="form-control" name="id_excursionB">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Buses") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalB">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "buses") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-secondary btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionBuses = new ControladorRelacion();
                                                    $crearRelacionBuses->ctrCrearRelacionOpcionalB();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-secondary card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleBuses"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Buses Regulares</th>
                                                                        <th>
                                                                            Opcionales</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "buses") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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

                            <div id="rentaOpcional" style="display:none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card card-secondary card-outline">
                                            <div class="card-header">
                                                Crear Relacion-opcional Renta a car
                                            </div>
                                            <div class="card-body">
                                                <form method="POST">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Renta a car</label>
                                                            <select class="form-control" name="id_excursionR">
                                                                <?php foreach ($excursiones as $key => $value) : ?>
                                                                <?php if ($value["category"] == "Renta") : ?>
                                                                <option value="<?php echo $value["id"] ?>">
                                                                    <?php echo $value["titulo"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Opcionales</label>
                                                            <select class="form-control" name="id_opcionalR">
                                                                <?php foreach ($opcionales as $key => $value) : ?>
                                                                <?php if ($value["categoria"] == "renta") : ?>
                                                                <option value="<?php echo $value["id_op"] ?>">
                                                                    <?php echo $value["opcional"] ?></option>
                                                                <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-secondary btn-block">Crear
                                                                Relación</button>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $crearRelacionRenta = new ControladorRelacion();
                                                    $crearRelacionRenta->ctrCrearRelacionOpcionalR();

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card card-secondary card-outline">

                                            <div class="card-body">
                                                <div id="example1_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="exampleRenta"
                                                                class="table table-borderless table-hover table-responsive dataTable">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th>
                                                                            #</th>
                                                                        <th>
                                                                            Renta a car</th>
                                                                        <th>
                                                                            Opcionales</th>

                                                                        <th>
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($relacionOpcional as $key => $value) : ?>
                                                                    <?php if ($value["categoria"] == "renta") : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td><?php echo $key + 1 ?></td>
                                                                        <td><?php echo $value["titulo"] ?></td>
                                                                        <td><?php echo $value["opcional"] ?></td>

                                                                        <td><a class="btn btn-danger text-white btnEliminarRelacionOp"
                                                                                idRelacionOp="<?php echo $value["id_ro"] ?>"><i
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

$borrarRelacionOp = new ControladorRelacion();
$borrarRelacionOp->ctrBorrarRelacionOpcional();

?>