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
                    <h1 class="m-0 text-dark">Ver Excursión</h1>
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
                            <?php foreach ($excursiones as $key => $value) : ?>
                            <?php if ($id == $value["id"]) : ?>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card rounded-lg card-primary card-outline">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <p><?php echo $value["titulo"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio Bajo</label>
                                                <p>$ <?php echo $value["precio_bajo"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio Alto</label>
                                                <p>$ <?php echo $value["precio_alto"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Rango de edad Adultos</label>
                                                <p><?php echo $value["rango_adultos"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio Niños</label>
                                                <p>$ <?php echo $value["precio_ninos"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Rango de edad Niños</label>
                                                <p><?php echo $value["rango_ninos"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Reservadas última semana</label>
                                                <p><?php echo $value["reservada"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Opcional</label>
                                                <p><?php echo $value["opcional"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Turnos</label>
                                                <p><?php echo $value["turnos"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Duración</label>
                                                <p><?php echo $value["duracion"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Requisitos</label>
                                                <p><?php echo $value["requisitos"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Incluye</label>
                                                <p><?php echo $value["incluye"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>No incluye</label>
                                                <p><?php echo $value["no_incluye"] ?></p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-7">
                                    <div class="card rounded-lg card-primary card-outline">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Intro</label>
                                                <p><?php echo $value["intro"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <p><?php echo $value["descripcion"] ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Imagen principal</label>
                                                <img src="<?php echo $value["banner"] ?>"
                                                    class="img-thumbnail previsualizar"
                                                    style="width: 100%; height: 200px" />
                                            </div>
                                            <div class="form-group">
                                                <label>Pertenece a categoria:</label>
                                                <?php if ($value["category"] == "Excursion") : ?>
                                                <p>Excursión</p>
                                                <?php elseif ($value["category"] == "Buses") : ?>
                                                <p>Buses Regulares</p>
                                                <?php elseif ($value["category"] == "Renta") : ?>
                                                <p>Renta Car</p>
                                                <?php else : ?>
                                                <p>-</p>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <label>¿Lo recomiendas?</label>
                                                <?php if ($value["recomendado"] == "1") : ?>
                                                <p>Recomendado</p>
                                                <?php else : ?>
                                                <p>No recomendado</p>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mapa recorrido</label>
                                        <p style="width: 100% !important"><?php echo $value["recorrido"] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="index.php?pagina=editar-excursion&id=<?php echo $value["id"]; ?>"
                                        class="btn btn-warning btn-lg pull-right text-white"><i class="fa fa-edit"></i>
                                        Editar</a>
                                </div>

                            </div>
                            <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>