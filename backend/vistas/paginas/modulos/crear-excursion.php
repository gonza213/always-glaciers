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
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card rounded-lg card-primary card-outline">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Titulo</label>
                                                    <input type="text" class="form-control" name="titulo" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio Bajo</label>
                                                    <input type="number" class="form-control" name="precio_bajo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio Alto</label>
                                                    <input type="number" class="form-control" name="precio_alto">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rango de edad Adultos</label>
                                                    <input type="text" class="form-control" name="rango_adultos">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio para niños</label>
                                                    <input type="number" class="form-control" name="precio_ninos">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rango de edad Niños</label>
                                                    <input type="text" class="form-control" name="rango_ninos">
                                                </div>
                                                <div class="form-group">
                                                    <label>Reservadas última semana</label>
                                                    <input type="number" class="form-control" name="reservada">
                                                </div>
                                                <div class="form-group">
                                                    <label>Opcional</label>
                                                    <textarea name="opcional" class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Turnos</label>
                                                    <textarea name="turnos" class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Duración</label>
                                                    <input type="text" class="form-control" name="duracion">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requisitos</label>
                                                    <textarea name="requisitos" class="form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Incluye</label>
                                                    <textarea name="incluye" class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>No incluye</label>
                                                    <textarea name="no_incluye" class="form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mapa recorrido</label>
                                                    <textarea name="recorrido" class="form-control" rows="5"></textarea>
                                                    <span class="small">Insertar código compratido en Google
                                                        Map</span><br>
                                                    <span class="bg-danger text-white p-1 small">Cambiar width="650" por
                                                        width=100% del codigo compartido</span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <div class="card rounded-lg card-primary card-outline">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Intro</label>
                                                    <textarea id="summernoteIntro" name="intro"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea id="summernoteDescripcion" name="descripcion"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Imagen principal</label>
                                                    <input type="file" class="form-control-file imagen" name="banner"
                                                        required>
                                                    <p class="help-block small text-center">Dimension: 1400px(ancho)*
                                                        800px(alto) |
                                                        Formato: JPG o PNG</p>
                                                    <img src="vistas/img/banner/imagen.png"
                                                        class="img-thumbnail previsualizar"
                                                        style="width: 100%; height: 200px" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Pertenece a categoria:</label>
                                                    <select name="category" class="form-control">
                                                        <option value="Excursion">Excursión</option>
                                                        <option value="Buses">Buses Regulares</option>
                                                        <option value="Renta">Renta Car</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>¿Lo recomiendas?</label>
                                                    <select name="recomendado" class="form-control">
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg pull-right">Crear
                                            Excursión</button>
                                    </div>

                                </div>
                                <?php

                                $crearExcursion = new ControladorExcursiones();
                                $crearExcursion->ctrCrearExcursion();

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