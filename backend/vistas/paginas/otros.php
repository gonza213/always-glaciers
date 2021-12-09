<?php

$opcionales = ControladorOpcionales::ctrMostrarOpcionales();
$otros = ControladorOtros::ctrMostrarOtros();
$redes = ControladorOtros::ctrMostrarRedes();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Más opciones</h1>
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
                            <div class="card card-success card-outline">
                                <div class="row">
                                    <div class="col-md-12 p-3">
                                        <h2 class="p-3">Transferencia</h2>
                                        <form method="post">
                                            <div class="row">
                                                <?php foreach ($otros as $key => $value) : ?>
                                                <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-header">Descuento</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Descuento" name="descuento"
                                                                    value="<?php echo $value["descuento"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">CBU</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="cbu"
                                                                    placeholder="CBU"
                                                                    value="<?php echo $value["cbu"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="card">
                                                        <div class="card-header">Alias</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="alias"
                                                                    placeholder="Alias"
                                                                    value="<?php echo $value["alias"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">CUIT</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="cuit"
                                                                    placeholder="CUIT"
                                                                    value="<?php echo $value["cuit"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">Banco</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="banco"
                                                                    placeholder="Banco"
                                                                    value="<?php echo $value["banco"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">N° de Cuenta</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="cuenta"
                                                                    placeholder="N° de Cuenta"
                                                                    value="<?php echo $value["cuenta"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group p-3">
                                                        <button type="submit"
                                                            class="btn btn-success btn-lg pull-right">Actualizar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $editarOtros = new ControladorOtros();
                                            $editarOtros->editarOtros();
                                            ?>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-success card-outline m-5">
                                            <div class="card-header">
                                                <h3 class="p-2">Redes Sociales</h3>
                                            </div>
                                            <div class="card-body">
                                                <?php foreach ($redes as $key => $value) : ?>
                                                <div class="col-md-10 mx-auto">
                                                    <form method="post">
                                                        <div class="card ">
                                                            <div class="card-body">
                                                                <label>Link:</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="<?php echo $value["icono"] ?>"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="id_a"
                                                                        value="<?php echo $value["id"] ?>">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Link" name="detalle"
                                                                        value="<?php echo $value["detalle"] ?>">
                                                                    <div class="input-group-prepend">
                                                                        <button type="submit"
                                                                            class="btn btn-success btn-sm"><i
                                                                                class="fa fa-edit"></i></button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <?php

                                                            $editRed = new ControladorOtros();
                                                            $editRed->editarRed();

                                                            ?>
                                                    </form>
                                                </div>
                                                <?php endforeach; ?>
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