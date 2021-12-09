<?php

include '../config/config.php';

$buscador = mysqli_query($con, "SELECT * FROM excursiones WHERE titulo LIKE LOWER('%" . $_POST["buscar"] . "%')");
$numero = mysqli_num_rows($buscador);

?>

<h5 class="card-title">Resultados encontrados:</h5>

<?php while ($resultado = mysqli_fetch_assoc($buscador)) { ?>
    <?php if ($resultado['category'] == 'Excursion') { ?>
        <div class="row">
            <div class="col-md-6">
                <span> <b><?php echo $resultado['titulo'] ?></b> </span>
            </div>
            <div class="col-md-6">
                <form action="index.php?pagina=reserva&id=<?php echo $resultado['id'] ?>" method="post">
                    <input type="hidden" name="fecha" value="<?php echo date('y/m/d') ?>">
                    <button type="submit" class="btn btn-primary btn-sm">Ir</button>
                </form>
            </div>
        </div>
        <br>
    <?php } ?>

<?php } ?>