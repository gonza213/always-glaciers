<?php


$planes = ControladorPlanes::ctrMostrarPlanes();


?>

<div class="container-fluid oe-fullwidth">
    <section class="container oe-main-content">
        <div class="row">
            <div class="col-md-12 col-xs-12 oe-main-col">
                <div class="oe-home-portfolio-showcase-article">
                    <h2 class="oe-heading-3 oe-heading-deco-reflect" style="text-align: left;">Agregar Viaja a tus
                        destinos con Buses Regulares</h2>

                </div>
            </div>
        </div>
    </section>
    <div class="container oe-main-content oe-col-non-pd">
        <div class="row oe-row m-b-40">


            <?php foreach ($planes as $key => $value) : ?>
            <?php if ($value["category"] == "Buses") : ?>
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
                                    action="index.php?pagina=reserva&id=<?php echo $value["id"]; ?>&categoria=<?php echo $value["category"]; ?>" method="post">
                                    <input type="hidden" name="fecha" value="<?php echo date('y-m-d') ?>">
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
                            <!-- <div class="precio-listado"><sup>$</sup>
                                <input type="hidden" id="monto" value="<?php echo $value["precio_bajo"]; ?>">
                                <b id="monto2"><?php echo $value["precio_bajo"]; ?></b>
                                <b id="resultado"></b>
                                <sup id="moneda">
                                    ARG </sup>
                                <sup id="moneda2"></sup>
                            </div> -->
                            <div class="precio-listado arg"><sup>$</sup>
                                <?php echo $value["precio_bajo"]; ?>
                                <sup>
                                    ARG </sup>

                            </div>
                            <div class="precio-listado usd" style="display: none"><sup>$</sup>
                            <?php
                               $precio = str_replace(".", "", $value["precio_bajo"]);
                               $usd = $precio/$moneda_usd;
                               echo intval($usd);
                            ?>
                                <sup>
                                    USD </sup>

                            </div>
                            <div class="precio-listado eur" style="display: none"><sup>$</sup>
                            <?php
                               $precio = str_replace(".", "", $value["precio_bajo"]);
                               $eur = $precio/$moneda_eur;
                               echo intval($eur);
                            ?>
                                <sup>
                                    EUR </sup>

                            </div>
                            <div class="precio-listado brl" style="display: none"><sup>$</sup>
                            <?php
                               $precio = str_replace(".", "", $value["precio_bajo"]);
                               $brl = $precio/$moneda_brl;
                               echo intval($brl);
                            ?>
                                <sup>
                                    BRL </sup>

                            </div>
                        </div>
                        <form method="post" action="index.php?pagina=reserva&id=<?php echo $value["id"]; ?>&categoria=<?php echo $value["category"]; ?>">
                            <div class="col-xs-6 col-md-6 col-sm-6 m-p-0">
                                <input type="hidden" name="fecha" value="<?php echo date('y-m-d') ?>">
                                <button type="submit"
                                    class="btn oe-btn oe-btn-blue oe-btn-inline-icon pull-left btn-ch">
                                    <span data-btn-text="RESERVAR">RESERVAR</span></button>
                            </div>
                        </form>

                        <div class="clearfix"></div>
                        <div class="col-md-12 transferencia">
                            <span class="small text-white"></span>
                            <a class="btnExcursion" idExcursion="<?php echo $value["id"]; ?>" data-toggle="modal"
                                data-target="#exampleModal" style="cursor:pointer"><span class="small text-white"
                                    style="font-weight: bold;"><i class="fa fa-arrow-right"></i> Paga
                                    con transferencia
                                    bancaria y ahorra 1,5%</span></a>
                        </div>

                    </div>


                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->