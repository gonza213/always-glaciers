<?php

$transferencia = ControllerTransferencia::ctrMostrarTransferencia();

?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Transferencias</h1>
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
                            <div class="card card-danger card-outline">

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
                                                                Operación</th>
                                                            <th>
                                                                Nombre</th>
                                                            <th>
                                                                 Excursión</th>
                                                            <th>
                                                                Comprobante</th>
                                                            <th>
                                                                Precio</th>
                                                            <th>
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($transferencia as $key => $value) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $key + 1; ?></td>
                                                            <td>N° <?php echo $value["operacion"] ?></td>
                                                            <td><?php echo $value["nombre"] ?></td>
                                                            <td><?php echo $value["excursion"] ?></td>
                                                            <td> <a href=" <?php echo $value["comprobante"] ?>" class="btn btn-info btn-sm" download><i class="fa fa-download"></i> Descargar</a></td>
                                                            <td>$ <?php echo $value["precio"] ?></td>
                                                            <td>
                                                            <a class="btn btn-secondary text-white btnEditarTra"
                                                                    idEditTra="<?php echo $value["id"] ?>" data-toggle="modal"
                                                                            data-target="#exampleModal2"><i
                                                                        class="fa fa-eye"></i></a>
                                                                <a class="btn btn-danger text-white btnEliminarTra"
                                                                    idTra="<?php echo $value["id"] ?>"><i
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

$borrarTra = new ControllerTransferencia();
$borrarTra->ctrBorrarTra();

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Ver más información</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Excursión:</label>
                                <input type="text" class="form-control" name="editCategoria" id="excursionM" readonly>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Datos pasajero principal:</label>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre:</label>
                                        <input type="text" class="form-control" name="editSubcategoria" id="nombreM" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Email:</label>
                                        <input type="text" class="form-control" name="editSubcategoria" id="emailM" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="">Teléfono:</label>
                                    <input type="text" class="form-control" name="editSubcategoria" id="telM" readonly>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Dni:</label>
                                        <input type="text" class="form-control" name="editSubcategoria" id="dniM" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nacionalidad:</label>
                                        <input type="text" class="form-control" name="editSubcategoria" id="nacM" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                <label for="">Otros pasajeros:</label>
                                    <textarea name="" class="form-control" id="otrosM" rows="3" readonly></textarea>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Datos reserva:</label>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="">Fecha:</label>
                                    <input type="text" class="form-control" name="editSubcategoria" id="fechaM" readonly>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Turno:</label>
                                        <input type="text" class="form-control" name="editSubcategoria" id="turnoM" readonly>
                                    </div>
                                </div>
                               <div class="col-md-2">                            
                                       <div class="form-group">
                                        <label for="">Adultos:</label>
                                            <input type="text" class="form-control" name="editSubcategoria" id="adultoM" readonly>
                                        </div>                     
                               </div>
                               <div class="col-md-2">
                                    <div class="form-group">
                                                <label for="">Niños:</label>
                                                    <input type="text" class="form-control" name="editSubcategoria" id="ninoM" readonly>
                                                </div>
                                            </div>  
                                    </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="">Opcionales:</label>
                                      <textarea name="" class="form-control" id="opcionalM" rows="5" readonly></textarea>
                                   </div>
                                   
                               </div>
                               <div class="col-md-6">
                                   <label for="">Dinero transferido:</label>
                               </div>
                               <div class="col-md-6">
                                    <h4  class="text-right">$ <span id="precioM"></span></h4>
                               </div>
                            </div>
                                   
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                    </div>
            
        </div>
    </div>
</div>