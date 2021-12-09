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
                    <h1 class="m-0 text-dark">Editar recorrido de <?php echo $value["titulo"] ?></h1>
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
                                <div class="col-md-5 mx-auto">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Editar Recorrido</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <?php foreach ($recorridos as $key => $value) : ?>
                                                <?php if ($id == $value["id"]) : ?>
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                    <input type="text" name="titulo" class="form-control"
                                                        value="<?php echo $value["titulo"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="horario" class="form-control"
                                                        value="<?php echo $value["horario"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Icono</label>
                                                    <select name="icono" class="form-control">
                                                        <option value="<?php echo $value["icono"] ?>">
                                                        </option>
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
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Activades</label>
                                                    <select name="recorrido" class="form-control">
                                                        <option value="<?php echo $value["recorrido"] ?>">
                                                        </option>
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
                                                        class="form-control"><?php echo $value["descripcion"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-success btn-block">Editar</button>
                                                </div>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                                <?php
                                                $editarRecorrido = new ControladorRecorrido();
                                                $editarRecorrido->ctrEditarRecorrido();
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <?php foreach ($recorridos as $key => $value) : ?>
                                    <?php if ($id == $value["id"]) : ?>
                                    <a href="index.php?pagina=ver-recorrido&id=<?php echo $value["id_excursion"] ?>"
                                        class="btn btn-success pull-left">Volver atrás</a>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
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