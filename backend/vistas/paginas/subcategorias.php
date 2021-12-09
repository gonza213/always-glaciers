<?php

$conn = new mysqli("localhost", "root", "", "reservas-turismo");


if (isset($_POST["update"])) {

    foreach ($_POST["positions"] as $position) {
        $index = $position[0];
        $newPosition = $position[1];

        $conn->query("UPDATE subcategoria SET position = '$newPosition' WHERE id = '$index'");
    }

    exit('success');
}

$subcategorias = ControladorSubcategorias::ctrMostrarSubcategorias();


?>

<div class="content-wrapper" style="min-height: 613px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Subcategorias</h1>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            Crear Subcategoria
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Categorías</label>
                                                        <select class="form-control" name="categoria">
                                                            <option value="excursiones">Excursiones</option>
                                                            <option value="lugares">Lugares de Interés</option>
                                                            <option value="buses">Buses Regulares</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Subcategoría</label>
                                                        <input type="text" class="form-control" name="subcategoria"
                                                            placeholder="Escribe la subcategoria">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block">Crear</button>
                                                    </div>
                                                </div>
                                                <?php

                                                $crearSubcategoria = new ControladorSubcategorias();
                                                $crearSubcategoria->ctrCrearSubcategoria();

                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card card-primary card-outline">

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
                                                                        Categorias</th>
                                                                    <th>
                                                                        Subcategorias</th>
                                                                    <th>
                                                                        Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($subcategorias as $key => $value) : ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?php echo $key + 1; ?></td>
                                                                    <?php
                                                                        if ($value["categoria"] == "excursiones") {
                                                                            echo "<td>Excursiones</td>";
                                                                        } else if ($value["categoria"] == "lugares") {
                                                                            echo "<td>Lugares de Interés</td>";
                                                                        } else if ($value["categoria"] == "buses") {
                                                                            echo "<td>Buses Regulares</td>";
                                                                        } else {
                                                                            echo "<td>Rentas Car</td>";
                                                                        }
                                                                        ?>
                                                                    <td><?php echo $value["subcategoria"] ?></td>
                                                                    <?php if ($value["categoria"] != "renta") : ?>
                                                                    <td>
                                                                        <a class="btn btn-warning text-white btnEditarSub"
                                                                            idEditSub="<?php echo $value["id"] ?>"
                                                                            data-toggle="modal"
                                                                            data-target="#exampleModal"><i
                                                                                class="fa fa-edit"></i></a>

                                                                        <a class="btn btn-danger text-white btnEliminarSub"
                                                                            idSub="<?php echo $value["id"] ?>"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    <?php else : ?>
                                                                    <td>
                                                                        <p class="small">No eliminar</p>
                                                                    </td>
                                                                    <?php endif ?>
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
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Cambiar de posiciones a las subcategorias</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <table
                                                            class="table table-stripped table-hover table-bordered orden">
                                                            <thead>
                                                                <tr>
                                                                    <td>Excursiones
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sql = $conn->query("SELECT * FROM subcategoria ORDER BY position");

                                                                while ($data = $sql->fetch_array()) {
                                                                    if ($data["categoria"] == "excursiones") {

                                                                        echo '
                                                                <tr data-index="' . $data["id"] . '" data-position="' . $data["position"] . '">
                                                                    <td style="cursor:pointer;">' . $data["subcategoria"] . '</td>
                                                                </tr>
                                                                ';
                                                                    }
                                                                }

                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <table
                                                            class="table table-stripped table-hover table-bordered orden">
                                                            <thead>
                                                                <tr>
                                                                    <td>Lugares de Interés
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sql = $conn->query("SELECT * FROM subcategoria ORDER BY position");


                                                                while ($data = $sql->fetch_array()) {
                                                                    if ($data["categoria"] == "lugares") {

                                                                        echo '
                                                                <tr data-index="' . $data["id"] . '" data-position="' . $data["position"] . '">
                                                                    <td style="cursor:pointer;">' . $data["subcategoria"] . '</td>
                                                                </tr>
                                                                ';
                                                                    }
                                                                }

                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <table
                                                            class="table table-stripped table-hover table-bordered orden">
                                                            <thead>
                                                                <tr>
                                                                    <td>Buses Regulares
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sql = $conn->query("SELECT * FROM subcategoria ORDER BY position");


                                                                while ($data = $sql->fetch_array()) {
                                                                    if ($data["categoria"] == "buses") {

                                                                        echo '
                                                                <tr data-index="' . $data["id"] . '" data-position="' . $data["position"] . '">
                                                                    <td style="cursor:pointer;">' . $data["subcategoria"] . '</td>
                                                                </tr>
                                                                ';
                                                                    }
                                                                }

                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
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

$borrarSubcategoria = new ControladorSubcategorias();
$borrarSubcategoria->ctrBorrarSubcategoria();

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="oe-heading-2">Editar subcategoria</h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" id="id">
                                <input type="text" class="form-control" name="editCategoria" id="categoria" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="editSubcategoria" id="subcategoria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </div>
                <?php

                $editSub = new ControladorSubcategorias();
                $editSub->ctrEditarSubcategoria();

                ?>
            </form>
        </div>
    </div>
</div>