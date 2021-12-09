<?php

$id = $_GET["id"];

$adminisitradores = ControladorAdministrador::ctrMostrarAdmin();

?>


<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editar Usuario</h1>
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
                            <div class="col-md-6 mx-auto">
                                <div class="card card-warning card-outline">
                                    <div class="card-body">
                                        <?php foreach ($adminisitradores as $key => $value) : ?>
                                        <?php if ($id  == $value["id"]) : ?>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                <label>Nombre completo</label>
                                                <input type="text" class="form-control" name="nombre"
                                                    value="<?php echo $value["nombre"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" name="usuario"
                                                    value="<?php echo $value["usuario"] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Correo eléctronico</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="<?php echo $value["email"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nueva contraseña</label>
                                                <input type="password" class="form-control" name="password">
                                                <input type="hidden" name="passwordActual"
                                                    value="<?php echo $value["password"] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Rol</label>
                                                <?php if ($value["usuario"] == "admin") : ?>
                                                <input type="text" class="form-control" name="rol"
                                                    value="<?php echo $value["rol"] ?>" readonly>
                                                <?php else : ?>
                                                <select class="form-control" name="rol">
                                                    <option value="<?php echo $value["rol"] ?>"></option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="editor">Editor</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto de perfil</label>
                                                <input type="file" class="form-control-file imagen" name="imagen">
                                                <p class="help-block small text-center">Dimension: 400px(ancho),
                                                    400px(alto) |
                                                    Formato: JPG o PNG</p>
                                                <img src="<?php echo $value["imagen"] ?>"
                                                    class="img-thumbnail previsualizar"
                                                    style="width: 200px; height: 200px" />
                                                <input type="hidden" name="imagenActual"
                                                    value="<?php echo $value["imagen"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-block">Editar
                                                    usuario</button>
                                            </div>
                                            <?php

                                                    $editarAdmin = new ControladorAdministrador();
                                                    $editarAdmin->ctrEditarAdmin();

                                                    ?>
                                        </form>
                                        <?php endif; ?>
                                        <?php endforeach ?>
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