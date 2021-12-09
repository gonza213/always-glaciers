<?php

$moneda = ControladorMoneda::ctrMostrarMoneda();

$planes = ControladorPlanes::ctrMostrarPlanes();

?>

<div class="container-fluid oe-fullwidth">
    <section class="container oe-main-content">
        <div class="row">
            <div class="col-md-12 col-xs-12 oe-main-col">
                <div class="oe-home-portfolio-showcase-article">
                    <h1 class="oe-heading-3 oe-heading-deco-reflect">Principales Excursiones de El Calafate que te
                        recomendamos no perder....</h1>
                    <p class="text-center">Las excursiones que no debes dejar de hacer en tu visita a El Calafate</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container oe-main-content oe-col-non-pd">
        <div class="row oe-row m-b-40">

            <?php foreach ($planes as $key => $value) : ?>
            <?php if ($value["recomendado"] == "1") : ?>
            <div class="col-md-3 col-sm-6 oe-mbot col-exc">
                <div class="mod-lista-excu">
                    <div class="modulo-destacados">
                        <section>
                            <span>
                                <div class="bg-listados">
                                    <h6 class="oe-col-non-pd" style="color:#0177b9;font-size:22px;font-weight:700;">
                                        <?php echo $value["titulo"] ?></h6>
                                </div>
                                <img src="<?php echo $servidor . $value["banner"]; ?>" class="img-responsive"
                                    style="width: 320px !important; height: 260px !important">
                                <form id="my_form<?php echo $value["id"]; ?>" method="post"
                                    action="index.php?pagina=reserva-usd&id=<?php echo $value["id"]; ?>" method="post">
                                    <input type="hidden" name="fecha" value="<?php echo date('y/m/d') ?>">
                                    <a href="javascript:{}"
                                        onclick="document.getElementById('my_form<?php echo $value["id"]; ?>').submit();"
                                        class="over" title="ver ficha" style="border: none;">
                                        <div class="esconde-767">

                                            <p>
                                                <?php echo $value["intro"] ?>
                                                <strong>(leer más)</strong>
                                            </p>
                                            <img class="bg-deg-bco" src="/vistas/assets/img/degra.png" alt="">
                                        </div>
                                    </a>
                                </form>
                            </span>
                        </section>
                        <input type="hidden" id="alert_module_hora_3" value="" />
                        <div id="alert_module_3">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-6 col-md-6 col-sm-6 m-p-0">
                            <div class="precio-listado"><sup>$</sup>
                                <?php echo intval($value["precio_bajo"] / $moneda[0]["usd"]) ?> <sup>
                                    USD </sup>
                            </div>
                        </div>
                        <form method="post" action="index.php?pagina=reserva-usd&id=<?php echo $value["id"]; ?>">
                            <div class="col-xs-6 col-md-6 col-sm-6 m-p-0">
                                <input type="hidden" name="fecha" value="<?php echo date('y/m/d') ?>">
                                <button type="submit"
                                    class="btn oe-btn oe-btn-blue oe-btn-inline-icon pull-left btn-ch">
                                    <span data-btn-text="RESERVAR">RESERVAR</span></button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>