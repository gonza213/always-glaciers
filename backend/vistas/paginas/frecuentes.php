<?php

$frecuentes = ControladorFrecuentes::ctrMostrarFrecuentes();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Preguntas frecuentes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="crear-pregunta" class="btn btn-sm btn-info pull-right">Nueva Pregunta</a>
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
                            <div class="card card-info card-outline">

                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1"
                                                    class="table table-borderless table-hover table-responsive dataTable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>
                                                                #</th>
                                                            <th>
                                                                Pregunta</th>
                                                            <th>
                                                                Respuesta</th>

                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($frecuentes as $key => $value) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $key + 1; ?></td>
                                                            <td><?php echo $value["pregunta"] ?></td>
                                                            <td><?php echo $value["respuesta"] ?></td>

                                                            <td>
                                                                <a href="index.php?pagina=editar-pregunta&id=<?php echo $value["id"] ?>"
                                                                    class="btn btn-warning text-white"><i
                                                                        class="fa fa-edit"></i></a>


                                                                <a class="btn btn-danger text-white btnEliminarPregunta"
                                                                    idPregunta="<?php echo $value["id"] ?>"><i
                                                                        class="fa fa-trash"></i></a>
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

<?php

$borrarPregunta = new ControladorFrecuentes();
$borrarPregunta->ctrBorrarPregunta();

?>