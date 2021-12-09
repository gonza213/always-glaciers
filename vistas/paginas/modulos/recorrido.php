<?php

$id = $_GET["id"];

$recorridos = ControladorRecorrido::ctrMostrarRecorrido();

?>

<div class="col-md-4 col-xs-12 m-t-50" id="linea-tiempo">
    <div class=" imagenes-resp">
    </div>
    <div class="modulo-linea-tiempo igualarAltura">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <?php foreach ($recorridos as $key => $value) : ?>
                <?php if ($id == $value["id_excursion"]) : ?>
                <tr>
                    <td class="col-ref"><strong><?php echo $value["horario"] ?></strong></td>
                    <td class="col-bg col-bg-pel"></td>
                    <td class="col-desc"><strong><?php echo $value["titulo"] ?></strong></td>
                </tr>
                <tr>
                    <?php if ($value["icono"] == "sin-icono") : ?>
                    <td><span></span></td>
                    <?php else : ?>
                    <td class="col-ref"><img src="<?php echo $servidor . $value["icono"] ?>" width="20" height="20"
                            alt="" /></td>
                    <?php endif; ?>
                    <?php if ($value["recorrido"] == "vistas/img/linea_azul.png") : ?>
                    <td class="col-bg col-bg-cel"></td>
                    <?php elseif ($value["recorrido"] == "vistas/img/linea_roja.png") : ?>
                    <td class="col-bg col-bg-roj"></td>
                    <?php else : ?>
                    <td><span></span></td>
                    <?php endif; ?>
                    <td class="col-desc"><?php echo $value["descripcion"] ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="m-b-20 m-t-40">
            <tbody>
                <tr>
                    <td><img src="vistas/images/uploads/bg-lin-tiem-cel2.png" alt="" /></td>
                    <td valign="middle">Actividades incluidas</td>
                </tr>
                <tr>
                    <td><img src="vistas/images/uploads/bg-lin-tiem-roj.png" alt="" /></td>
                    <td valign="middle">Actividades opcionales</td>
                </tr>
            </tbody>
        </table>
        <p>Los horarios, el orden y las actividades puede variar según la organización del día.</p>
    </div>
</div>