<?php

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Recorridos de las excursiones</h1>
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

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2"
                                                    class="table table-borderless table-hover  dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Titulo</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($excursiones as $key => $value) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $key + 1; ?></td>
                                                            <td><?php echo $value["titulo"] ?></td>
                                                            <td><a href="index.php?pagina=ver-recorrido&id=<?php echo $value["id"] ?>"
                                                                    class="btn btn-info text-white"><i
                                                                        class="fa fa-eye"></i> Ver Recorridos</a>


                                                            </td>
                                                        </tr>
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
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>