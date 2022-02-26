<?php

$divisas = ControladorDivisas::ctrMostrarDivisas();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark p-2">Divisas</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Añadir día reservado</button>
                </div> -->


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
                            <form method="POST">
                                <div class="row">
                                    <?php foreach ($divisas as $key => $value) : ?>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">USD:</label>
                                                <input type="number" class="form-control" name="usd" value="<?php echo $value['usd'] ?>" placeholder="USD">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">EUR:</label>
                                                <input type="number" class="form-control" name="eur" placeholder="EUR" value="<?php echo $value['eur'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">BRL:</label>
                                                <input type="number" class="form-control" name="brl" placeholder="BRL" value="<?php echo $value['brl'] ?>">
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning float-right">Actualizar</button>
                                    </div>
                                    <?php 

                                      $actualizar = new ControladorDivisas();
                                      $actualizar-> ctrActualizarDivisas();
                                    ?>
                                </div>
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