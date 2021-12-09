<?php

$id = $_GET["id"];

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

$recorridos = ControladorRecorrido::ctrMostrarRecorrido();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php foreach ($excursiones as $key => $value) : ?>
                    <?php if ($id == $value["id"]) : ?>
                    <h1 class="m-0 text-dark">Recorrido de <?php echo $value["titulo"] ?></h1>
                    <?php endif; ?>
                    <?php endforeach; ?>
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
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Crear Recorrido</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_excursion" value="<?php echo $id; ?>">
                                                    <input type="text" name="titulo" class="form-control"
                                                        placeholder="Titulo">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="horario" class="form-control"
                                                        placeholder="Horario">
                                                </div>
                                                <div class="form-group">
                                                    <label>Icono</label>
                                                    <select name="icono" class="form-control">
                                                        <option value="sin-icono">Sin icono</option>
                                                        <option value="vistas/img/persona_caminando.png">
                                                            Persona caminando
                                                        </option>
                                                        <option value="vistas/img/bus.png">
                                                            Bus
                                                        </option>
                                                        <option value="vistas/img/barco.png">
                                                            Barco
                                                        </option>
                                                        <option value="vistas/img/casa.png">
                                                            Casa
                                                        </option>
                                                        <option value="vistas/img/cubiertos.png">
                                                            Cubiertos
                                                        </option>
                                                        <option value="vistas/img/camioneta_4x4.png">
                                                            Camioneta 4x4
                                                        </option>
                                                        <option value="vistas/img/bonoculares.png">
                                                            Binoculares
                                                        </option>
                                                        <option value="vistas/img/ovejita.png">
                                                            Ovejita
                                                        </option>
                                                        <option value="vistas/img/cueva_mano.png">
                                                            Mano (cueva de las manos)
                                                        </option>
                                                        <option value="vistas/img/jinete.png">
                                                            Jinete
                                                        </option>
                                                        <option value="vistas/img/kayak.png">
                                                            Kayak
                                                        </option>
                                                        <option value="vistas/img/glaciar.png">
                                                            Glaciar
                                                        </option>
                                                        <option value="vistas/img/picnic.png">
                                                            Picnic
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Activades</label>
                                                    <select name="recorrido" class="form-control">
                                                        <option value="vistas/img/linea_azul.png">Actividad incluida
                                                        </option>
                                                        <option value="vistas/img/linea_roja.png">Actividad opcional
                                                        </option>
                                                        <option value="finalizacion">
                                                            Finalización de recorrido
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea name="descripcion" rows="3"
                                                        class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-success btn-block">Crear</button>
                                                </div>
                                                <?php
                                                $crearRecorrido = new ControladorRecorrido();
                                                $crearRecorrido->ctrCrearRecorrido();
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-md-10 mx-auto">
                                                <div class="row text-center">
                                                    <?php foreach ($recorridos as $key => $value) : ?>
                                                    <?php if ($id == $value["id_excursion"]) : ?>
                                                    <div class="col-md-4 p-0">
                                                        <span><?php echo $value["horario"] ?></span>
                                                    </div>
                                                    <div class="col-md-2 p-0">
                                                        <img src="vistas/img/punto.png" class="img-fluid"
                                                            style="width: 30px; height: 30px;" />
                                                    </div>
                                                    <div class="col-md-6 p-0">
                                                        <p class="text-bold"><?php echo $value["titulo"] ?></p>
                                                    </div>
                                                    <?php if ($value["icono"] == "sin-icono") : ?>
                                                    <div class="col-md-4 p-0">
                                                        <span></span>
                                                    </div>
                                                    <?php else : ?>
                                                    <div class="col-md-4 p-0">
                                                        <img src="<?php echo $value["icono"] ?>" class="img-fluid"
                                                            style="width: 40px; height: 40px;" />
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if ($value["recorrido"] == "finalizacion") : ?>
                                                    <div class="col-md-2 p-0">
                                                        <span></span>
                                                    </div>
                                                    <?php else : ?>
                                                    <div class="col-md-2 p-0">
                                                        <img src="<?php echo $value["recorrido"] ?>" class="img-fluid"
                                                            style="width: 40px; height: 100%;" />
                                                    </div>
                                                    <?php endif ?>
                                                    <div class="col-md-6 p-0">
                                                        <span class="small"><?php echo $value["descripcion"] ?></span>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-success card-outline">

                                        <div class="card-body">
                                            <div id="example1_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example1"
                                                            class="table table-borderless table-hover  dataTable">
                                                            <thead>
                                                                <tr role="row">

                                                                    <th>
                                                                        Titulo</th>
                                                                    <th>
                                                                        Icono</th>
                                                                    <th>
                                                                        Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($recorridos as $key => $value) : ?>
                                                                <?php if ($id == $value["id_excursion"]) : ?>
                                                                <tr role="row" class="odd">

                                                                    <td><?php echo $value["titulo"] ?></td>
                                                                    <?php if ($value["icono"] == "sin-icono") : ?>
                                                                    <td><span>Final recorrido</span></td>
                                                                    <?php else : ?>
                                                                    <td><img src="<?php echo $value["icono"] ?>"
                                                                            class="img-fluid"
                                                                            style="width: 40px; height: 40px;" /></td>
                                                                    <?php endif; ?>
                                                                    <td><a href="index.php?pagina=editar-recorrido&id=<?php echo $value["id"] ?>"
                                                                            class="btn btn-warning text-white"><i
                                                                                class="fa fa-pencil"></i></a>
                                                                        <a class="btn btn-danger text-white btnEliminarRecorrido"
                                                                            idRecorrido="<?php echo $value["id"] ?>"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </td>
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
$borrarRecorrido = new ControladorRecorrido();
$borrarRecorrido->ctrBorrarRecorrido();
?>