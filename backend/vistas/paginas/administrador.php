<?php

$administradores = ControladorAdministrador::ctrMostrarAdmin();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Administradores</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="crear-admin" class="btn btn-success pull-right">Nuevo usuario</a>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card card-success card-outline">
                                    <div class="card-body">
                                        <div id="example1_wrapper"
                                            class="dataTables_wrapper container-fluid dt-bootstrap4">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example1"
                                                        class="table table-borderless table-hover table-responsive dataTable">
                                                        <thead>
                                                            <tr role="row">
                                                                <th>
                                                                    #</th>
                                                                <th>
                                                                    Usuario</th>
                                                                <th>
                                                                    Email</th>
                                                                <th>
                                                                    Nombre</th>
                                                                <th>
                                                                    Rol</th>
                                                                <th style="width: 300px">
                                                                    Imagen</th>
                                                                <th>
                                                                    Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($administradores as $key => $value) : ?>
                                                            <tr role="row" class="odd">
                                                                <td><?php echo $key + 1; ?></td>
                                                                <td><?php echo $value["usuario"] ?></td>
                                                                <td><?php echo $value["email"] ?></td>
                                                                <td><?php echo $value["nombre"] ?></td>
                                                                <td><?php echo $value["rol"] ?></td>
                                                                <td><img src="<?php echo $value["imagen"] ?>"
                                                                        class="img-circle"
                                                                        style="width: 50px !important; height: 50px !important" />
                                                                </td>
                                                                <td><a href="index.php?pagina=editar-admin&id=<?php echo $value["id"] ?>"
                                                                        class="btn btn-warning text-white"><i
                                                                            class="fa fa-edit"></i></a>

                                                                    <?php if ($value["usuario"] != "admin") : ?>
                                                                    <a class="btn btn-danger text-white btnEliminarAdmin"
                                                                        idAdmin="<?php echo $value["id"] ?>"><i
                                                                            class="fa fa-trash"></i></a>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>

                                                    </table>
                                                </div>
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

<?php

$borrarAdmin = new ControladorAdministrador();
$borrarAdmin->ctrBorrarAdmin();

?>