<?php

$id = $_GET["id"];

$frecuentes = ControladorFrecuentes::ctrMostrarFrecuentes();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editar Pregunta</h1>
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
                                <div class="card card-info card-outline">

                                    <div class="card-body">
                                        <form method="POST">
                                            <?php foreach ($frecuentes as $key => $value) : ?>
                                            <?php if ($id == $value["id"]) : ?>
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                <label>Pregunta</label>
                                                <input type="text" class="form-control" name="pregunta"
                                                    value="<?php echo $value["pregunta"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Respuesta</label>
                                                <textarea id="summernoteRespuesta"
                                                    name="respuesta"><?php echo $value["respuesta"] ?></textarea>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block">Editar
                                                    Pregunta</button>
                                            </div>
                                            <?php

                                            $editarPregunta = new ControladorFrecuentes();
                                            $editarPregunta->ctrEditarPregunta();
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