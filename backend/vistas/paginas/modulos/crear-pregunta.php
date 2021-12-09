<?php

$frecuentes = ControladorFrecuentes::ctrMostrarFrecuentes();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear Pregunta</h1>
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
                            <div class="col-md-7 mx-auto">
                                <div class="card card-danger card-outline">

                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label>Pregunta</label>
                                                <input type="text" class="form-control" name="pregunta">
                                            </div>
                                            <div class="form-group">
                                                <label>Respuesta</label>
                                                <textarea id="summernoteRespuesta" name="respuesta"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger btn-block">Crear
                                                    Pregunta</button>
                                            </div>
                                            <?php

                                            $pregunta = new ControladorFrecuentes();
                                            $pregunta->ctrCrearPregunta();
                                            ?>
                                        </form>
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