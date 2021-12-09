<?php

$id = $_GET["id"];

$excursiones = ControladorExcursiones::ctrMostrarExcursiones();

?>


<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear Excursión</h1>
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
                            <form method="POST" enctype="multipart/form-data">
                                <?php foreach ($excursiones as $key => $value) : ?>
                                <?php if ($id == $value["id"]) : ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card rounded-lg card-primary card-outline">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                    <label>Titulo</label>
                                                    <input type="text" class="form-control" name="titulo"
                                                        value="<?php echo $value["titulo"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio Bajo</label>
                                                    <input type="text" class="form-control" name="precio_bajo"
                                                        value="<?php echo $value["precio_bajo"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio Alto</label>
                                                    <input type="text" class="form-control" name="precio_alto"
                                                        value="<?php echo $value["precio_alto"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rango de edad Adultos</label>
                                                    <input type="text" class="form-control" name="rango_adultos"
                                                        value="<?php echo $value["rango_adultos"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio para niños</label>
                                                    <input type="text" class="form-control" name="precio_ninos"
                                                        value="<?php echo $value["precio_ninos"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rango de edad Niños</label>
                                                    <input type="text" class="form-control" name="rango_ninos"
                                                        value="<?php echo $value["rango_ninos"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Reservadas última semana</label>
                                                    <input type="text" class="form-control" name="reservada"
                                                        value="<?php echo $value["reservada"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Opcional</label>
                                                    <textarea name="opcional" class="form-control"
                                                        rows="3"><?php echo $value["opcional"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Turnos</label>
                                                    <textarea name="turnos" class="form-control"
                                                        rows="3"><?php echo $value["turnos"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Duración</label>
                                                    <input type="text" class="form-control" name="duracion"
                                                        value="<?php echo $value["duracion"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requisitos</label>
                                                    <textarea name="requisitos" class="form-control"
                                                        rows="3"><?php echo $value["requisitos"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Incluye</label>
                                                    <textarea name="incluye" class="form-control"
                                                        rows="3"><?php echo $value["incluye"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>No incluye</label>
                                                    <textarea name="no_incluye" class="form-control"
                                                        rows="3"><?php echo $value["no_incluye"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mapa recorrido</label>
                                                    <textarea name="recorrido" class="form-control"
                                                        rows="5"><?php echo $value["recorrido"] ?></textarea>
                                                    <span class="small">Insertar código compratido en Google Map</span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <div class="card rounded-lg card-primary card-outline">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Intro</label>
                                                    <textarea id="summernoteIntro"
                                                        name="intro"><?php echo $value["intro"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea id="summernoteDescripcion"
                                                        name="descripcion"><?php echo $value["descripcion"] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Imagen principal</label>
                                                    <input type="file" class="form-control-file imagen" name="banner">
                                                    <p class="help-block small text-center">Dimension: 1400px(ancho)*
                                                        800px(alto) |
                                                        Formato: JPG o PNG</p>
                                                    <img src="<?php echo $value["banner"] ?>""
                                                        class=" img-thumbnail previsualizar"
                                                        style="width: 100%; height: 200px" />
                                                    <input type="hidden" name="bannerActual"
                                                        value="<?php echo $value["banner"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pertenece a categoria:</label>
                                                    <select name="category" class="form-control">
                                                        <option value="<?php echo $value["category"] ?>"></option>
                                                        <option value="Excursion">Excursión</option>
                                                        <option value="Buses">Buses Regulares</option>
                                                        <option value="Renta">Renta Car</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>¿Lo recomiendas?</label>
                                                    <select name="recomendado" class="form-control">
                                                        <option value="<?php echo $value["recomendado"] ?>"></option>
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg pull-right">Editar
                                            Excursión</button>
                                    </div>

                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                <?php

                                $editarExcursion = new ControladorExcursiones();
                                $editarExcursion->ctrEditarExcursiones();

                                ?>
                            </form>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>