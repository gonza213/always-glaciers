<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursionesPrecio();
$opcionales = ControladorOpcionales::ctrMostrarOpcionales();
$relacionTurnos = ControladorTurnos::ctrMostrarRelacionTurnos();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark p-2">Crear y actualizar turnos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <a style="cursor:pointer" onclick="botonRenta2()"
                        class="btn btn-sm btn-danger pull-right ml-2 text-white">Renta Car</a> -->
                    <a style="cursor:pointer" onclick="botonBuses2()" class="btn btn-sm btn-warning pull-right ml-2 text-white">Buses
                        Regulares</a>
                    <a style="cursor:pointer" onclick="botonExcursiones()" class="btn btn-sm btn-info pull-right ml-2 text-white">Excursiones</a>
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
                            <h3 class="text-info mb-4" style="display: block;" id="titulo-excursion">Excursiones <button data-toggle="modal" data-target="#exampleModalT" class="btn btn-info btn-sm float-right">Crear Turno</button></h3>
                            <h3 class="text-warning" style="display: none;" id="titulo-buses">Buses Regulares <button data-toggle="modal" data-target="#exampleModalB" class="btn btn-warning btn-sm float-right">Crear Turno</button></h3>
                            <h3 class="text-danger" style="display: none;" id="titulo-renta">Renta Car <button data-toggle="modal" data-target="#exampleModalR" class="btn btn-danger btn-sm float-right">Crear Turno</button></h3>
                            <div id="excursiones-precio" style="display: block;">
                                <?php foreach ($relacionTurnos as $key => $value) : ?>
                                    <?php if ($value["category"] == "Excursion") : ?>
                                        <div class="row itemBody">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8 p-2 mx-auto">
                                                        <div class="row">
                                                            <div class="col-md-6 tituloItem"><i class="fa fa-arrow-right"></i> <?php echo $value["titulo"] ?></div>
                                                            <div class="col-md-6">
                                                                <form method="post">
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="id_tE" value="<?php echo $value["id_t"] ?>">
                                                                        <input type="text" class="form-control" placeholder="Link" name="horariosE" value="<?php echo $value["horarios"] ?>">
                                                                        <div class="input-group-prepend">
                                                                            <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>

                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <a style="cursor:pointer" class="btn btn-danger btn-sm text-white btnBorrarTurno" idBorrarTurno="<?php echo $value["id_t"] ?>"><i class="fa fa-trash"></i></a>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <?php
                                                            $editarTurno = new ControladorTurnos();
                                                            $editarTurno->editarTurno();
                                                            ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div id="buses-precio" style="display: none;">
                                <?php foreach ($relacionTurnos as $key => $value) : ?>
                                    <?php if ($value["category"] == "Buses") : ?>
                                        <div class="row itemBody">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8 p-2 mx-auto">
                                                        <div class="row">
                                                            <div class="col-md-6 tituloItem"><i class="fa fa-arrow-right"></i> <?php echo $value["titulo"] ?></div>
                                                            <div class="col-md-6">
                                                                <form method="post">
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="id_tE" value="<?php echo $value["id_t"] ?>">
                                                                        <input type="text" class="form-control" placeholder="Link" name="horariosE" value="<?php echo $value["horarios"] ?>">
                                                                        <div class="input-group-prepend">
                                                                            <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>

                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <a style="cursor:pointer" class="btn btn-danger btn-sm text-white btnBorrarTurno" idBorrarTurno="<?php echo $value["id_t"] ?>"><i class="fa fa-trash"></i></a>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <?php
                                                            $editarTurno = new ControladorTurnos();
                                                            $editarTurno->editarTurno();
                                                            ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div id="renta-precio" style="display: none;">
                                <?php foreach ($relacionTurnos as $key => $value) : ?>
                                    <?php if ($value["category"] == "Renta") : ?>
                                        <div class="row itemBody">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8 p-2 mx-auto">
                                                        <div class="row">
                                                            <div class="col-md-6 tituloItem"><i class="fa fa-arrow-right"></i> <?php echo $value["titulo"] ?></div>
                                                            <div class="col-md-6">
                                                                <form method="post">
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="id_tE" value="<?php echo $value["id_t"] ?>">
                                                                        <input type="text" class="form-control" placeholder="Link" name="horariosE" value="<?php echo $value["horarios"] ?>">
                                                                        <div class="input-group-prepend">
                                                                            <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>

                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <a style="cursor:pointer" class="btn btn-danger btn-sm text-white btnBorrarTurno" idBorrarTurno="<?php echo $value["id_t"] ?>"><i class="fa fa-trash"></i></a>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <?php
                                                            $editarTurno = new ControladorTurnos();
                                                            $editarTurno->editarTurno();
                                                            ?>
                                                            </form>
                                                        </div>
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

<?php
$borrarTurno = new ControladorTurnos();
$borrarTurno->ctrBorrarTurno();
?>


<!-- Modal -->
<div class="modal fade" id="exampleModalT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Crear turno de Excursión</h2>
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
                                    <option>Seleccione excursión:</option>
                                    <?php foreach ($excursiones as $key => $value) : ?>
                                        <?php if ($value["category"] == "Excursion") : ?>
                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["titulo"] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="horarios" placeholder="Horarios">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Crear turno</button>
                </div>
                <?php

                $crearTurnos = new ControladorTurnos();
                $crearTurnos->ctrCrearTurnos();

                ?>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Crear turno de Buses Regulares</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="id_excursionB" class="form-control">
                                    <option>Seleccione buses:</option>
                                    <?php foreach ($excursiones as $key => $value) : ?>
                                        <?php if ($value["category"] == "Buses") : ?>
                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["titulo"] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="horariosB" placeholder="Horarios">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Crear turno</button>
                </div>
                <?php

                $crearTurnos = new ControladorTurnos();
                $crearTurnos->ctrCrearTurnosB();

                ?>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Crear turno de Rent a Car</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="id_excursionR" class="form-control">
                                    <option>Seleccione Renta a car:</option>
                                    <?php foreach ($excursiones as $key => $value) : ?>
                                        <?php if ($value["category"] == "Renta") : ?>
                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["titulo"] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="horariosR" placeholder="Horarios">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Crear turno</button>
                </div>
                <?php

                $crearTurnos = new ControladorTurnos();
                $crearTurnos->ctrCrearTurnosR();

                ?>
            </form>
        </div>
    </div>
</div>