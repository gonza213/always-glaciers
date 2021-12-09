<?php

$info = ControladorInfo::ctrMostrarInfo();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Info</h1>
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
                            <div class="card card-warning card-outline">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <?php foreach ($info as $key => $value) : ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"]; ?>">
                                                    <label>Título</label>
                                                    <input type="text" class="form-control" placeholder="Titulo"
                                                        name="titulo" value="<?php echo $value["titulo"]; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea name="descripcion" rows="3"
                                                        class="form-control"><?php echo $value["descripcion"]; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Etiquetas</label>
                                                    <input type="text" class="form-control" placeholder="Etiquetas"
                                                        name="etiquetas" value="<?php echo $value["etiquetas"]; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Correo eléctronico</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Correo eléctronico" name="email"
                                                        value="<?php echo $value["email"]; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <input type="text" class="form-control" placeholder="Teléfono"
                                                        name="telefono" value="<?php echo $value["telefono"]; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control" placeholder="Dirección"
                                                        name="direccion" value="<?php echo $value["direccion"]; ?>">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Logo</label>
                                                    <input type="file" class="form-control logo" name="logo">
                                                    <img src="<?php echo $value["logo"]; ?>"
                                                        class="img-thumbnail previsualizarLogo"
                                                        style="width: 100%; height: 200px; background-color: grey;" />
                                                    <input type="hidden" name="logoActual"
                                                        value="<?php echo $value["logo"]; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Logo Footer</label>
                                                    <input type="file" class="form-control logo-footer"
                                                        name="logo_footer">
                                                    <img src="<?php echo $value["logo_footer"]; ?>"
                                                        class="img-thumbnail previsualizarLogoFooter"
                                                        style="width: 100%; height: 200px;  background-color: grey;" />
                                                    <input type="hidden" name="logoFooterActual"
                                                        value="<?php echo $value["logo_footer"]; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-warning btn-lg pull-right">Actualizar</button>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </form>
                                    <?php

                                    $editarInfo = new ControladorInfo();
                                    $editarInfo->ctrEditarInfo();

                                    ?>
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