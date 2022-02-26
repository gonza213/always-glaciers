<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();
$dias = ControladorTurnos::ctrMostrarRelacionDia();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark p-2">Dias Reservados</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Añadir día reservado</button>
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
                            <h3>Lista de días reservados</h3>
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1"
                                                    class="table table-borderless table-hover  dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                excursión</th>
                                                            <th>
                                                                Día</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($dias as $key => $value) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $key + 1; ?></td>
                                                            <td><?php echo $value["titulo"] ?></td>
                                                            <td><?php echo $value["dia"] ?></td>
                                                            <td>
                                                                <a class="btn btn-danger text-white btnBorrarDia"
                                                                    idBorrarDia="<?php echo $value["id_i"] ?>"><i
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
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php

$borrar = new ControladorTurnos();
$borrar->ctrBorrarDia();

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Añadir dia reservado</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="id_excursion" class="form-control">
                                    <option>Seleccione una excursión:</option>
                                    <?php foreach ($excursiones as $key => $value) : ?>
                                        <?php if ($value['category'] == 'Excursion') : ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo $value['titulo'] ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dia" placeholder="Fecha">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Añadir</button>
                </div>
                <?php

                $crear = new ControladorTurnos();
                $crear->ctrCrearDia();

                ?>
            </form>
        </div>
    </div>
</div>