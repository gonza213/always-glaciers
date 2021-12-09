<?php

$opcionales = ControladorOpcionales::ctrMostrarOpcionales();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Opcionales</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#exampleModal"
                        class="btn btn-sm btn-danger pull-right text-white">Nuevo
                        opcional</a>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <?php include "buscador.php" ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card card-secondary card-outline">
                                <div class="row">
                                    <?php foreach ($opcionales as $key => $value) : ?>
                                    <div class="col-md-4 p-3 itemOpcional">
                                        <div class="card">
                                            <div class="card-header bg-secondary">
                                                <b
                                                    class="tituloOpcional text-white"><?php echo $value["opcional"] ?></b>
                                            </div>
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_op"
                                                            value="<?php echo $value["id_op"] ?>">
                                                        <label>Titulo</label>
                                                        <input type="text" name="opcional" class="form-control"
                                                            placeholder="Titulo"
                                                            value="<?php echo $value["opcional"] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Precio</label>
                                                        <input type="text" name="precio" class="form-control"
                                                            placeholder="Precio" value="<?php echo $value["precio"] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Detalle</label>
                                                        <textarea name="detalle" rows="5"
                                                            class="form-control"><?php echo $value["detalle"] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-sm btn-block">Actualizar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="btn btn-danger btn-sm btn-block text-white btnEliminarOpcional"
                                                            idOpcional="<?php echo $value["id_op"] ?>">Borrar</a>
                                                    </div>
                                                    <?php
                                                        $editarOpcional = new ControladorOpcionales();
                                                        $editarOpcional->editarOpcional();
                                                        ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

<?php

$borrarOpcional = new ControladorOpcionales();
$borrarOpcional->borrarOpcional();

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Crear opcional</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="categoria" class="form-control">
                                    <option>Seleccione una categoria:</option>
                                    <option value="almuerzo">Almuerzo</option>
                                    <option value="traslado">Traslado</option>
                                    <option value="vianda">Vianda</option>
                                    <option value="navegacion">Navegación</option>
                                    <option value="entrada">Entrada</option>
                                    <option value="buses">Buses Regulares</option>
                                    <option value="renta">Renta a car</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="opcional" placeholder="Titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="Precio">
                            </div>
                            <div class="form-group">
                                <textarea name="detalle" class="form-control" rows="5"
                                    placeholder="Detalles"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Crear</button>
                </div>
                <?php

                $crearOpcional = new ControladorOpcionales();
                $crearOpcional->crearOpcional();

                ?>
            </form>
        </div>
    </div>
</div>