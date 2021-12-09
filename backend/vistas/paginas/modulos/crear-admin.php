<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear Usuario</h1>
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
                                <div class="card card-info card-outline">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Nombre completo</label>
                                                <input type="text" class="form-control" name="nombre"
                                                    placeholder="Nombre completo">
                                            </div>
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" name="usuario"
                                                    placeholder="Usuario">
                                            </div>
                                            <div class="form-group">
                                                <label>Correo eléctronico</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Correo eléctronico">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Contraseña">
                                            </div>

                                            <div class="form-group">
                                                <label>Rol</label>
                                                <select class="form-control" name="rol">
                                                    <option value="administrador">Administrador</option>
                                                    <option value="editor">Editor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto de perfil</label>
                                                <input type="file" class="form-control-file imagen" name="imagen">
                                                <p class="help-block small text-center">Dimension: 400px(ancho),
                                                    400px(alto) |
                                                    Formato: JPG o PNG</p>
                                                <img src="vistas/img/user.png" class="img-thumbnail previsualizar"
                                                    style="width: 200px; height: 200px" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block">Crear
                                                    usuario</button>
                                            </div>
                                            <?php

                                            $crearAdmin = new ControladorAdministrador();
                                            $crearAdmin->ctrCrearAdmin();

                                            ?>
                                        </form>
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