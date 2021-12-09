<?php

$id = $_GET["id"];

$planes = ControladorPlanes::ctrMostrarPlanes();

$relacion = ControladorRelacion::ctrMostrarRelacion($id);

$galeria = ControladorGaleria::ctrMostrarGaleria();

$reservas = ControladorReservas::ctrMostrarReservas($id);

$moneda = ControladorMoneda::ctrMostrarMoneda();

if (isset($_POST["fecha"])) {
    echo '<script>

    $(function() {
        $("#datepickerReserva").datepicker();
        $("#datepickerReserva").datepicker("setDate","' . $_POST["fecha"] . '");
    });

 
         </script>';
} else {
    echo '<script>window.location="' . $rutas . '"</script>';
}

if (!$reservas) {

    echo "<script>
    Swal.fire(
        '¡Hay disponibilidad!',
        'You clicked the button!',
        'success'
    );

    $(function() {
        $('#datepickerReservas').datepicker({
            onSelect: function (date) {
                alert(date)
                },
        });
        
    });
    
    
    </script>";
} else {

    for ($i = 0; $i < count($reservas); $i++) {

        echo '<script>
        $(function() {
            $("#datepickerReservas").datepicker();
        });
        $(function() {
            $("#datepickerReservas").datepicker("setDate","' . $reservas[$i]["fecha_ingreso"] . '");
        });

    
     </script>';
    }
}



?>

<!-- NAVEGADOR -->
<?php

include "modulos/cabecera2_usd.php";

?>

<?php foreach ($planes as $key => $value) : ?>

<?php if ($_GET["id"] == $value["id"]) : ?>

<main class="oe-blog" style="padding-top:0 !important;">
    <div class="bg-color-con-borde" style="border-top:none!important;">
        <section class="container-fluid alto-gde">
            <div class="oe-banner-holder row alto-gde">
                <div class="oe-white alto-gde">
                    <div class="col-xs-12 oe-cleaner oe-slider-bg alto-gde"
                        style=" background-image: url(<?php echo $servidor . $value["banner"] ?>); width: 100% !important; height:650px !important">
                        <div class="oe-block-float oe-float-centered-2x"
                            data-uk-scrollspy="{cls:'animate-started',delay:500}">
                            <div class="oe-effects oe-frombottom">
                                <h1 class="oe-text-light oe-mtop-2x oe-fonts-large"
                                    style="text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.3);">
                                    <?php echo $value["titulo"] ?></h1>
                            </div>
                            <section id="section03" class="demo">
                                <a href="#section04"><span></span></a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section04" style="margin-bottom: 20px;"></section>
        <section class="container oe-main-content p-18-15">
            <div class="row p-5 m-0">
                <div class="row oe-shortcode-list-row">
                    <div class="col-l-fich color-gris">
                        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo $rutas ?>">
                                    <span itemprop="name">Excursiones en El Calafate</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name"><?php echo $value["titulo"] ?></span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>


                        <p><?php echo $value["intro"] ?></p>
                    </div>
                    <div class="col-r-fich btn-inc" align="center">
                        <div class="precio-celestes precio-superior precio-superior-cont">
                            <div class="mod-precio-1-cont">
                                <div>
                                    <span><sup>$ </sup><?php echo intval($value["precio_bajo"] / $moneda[0]["usd"]) ?>
                                        <sup> USD</sup></span>
                                </div>
                                <div>
                                    <del><sup>$ </sup><?php echo intval($value["precio_alto"] / $moneda[0]["usd"]) ?>
                                        <sup> USD</sup></del>
                                </div>
                            </div>
                            <p><span>¡Felicitaciones!</span><br>
                                Menor Precio Garantizado</p>
                            <div class="mod-precio-2-cont">
                                <div>
                                    <span class="al-q-res-nro"><?php echo $value["reservada"] ?></span>
                                    <span class="al-q-res-txt">veces reservada<br>
                                        la última semana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    </script>
    <section class="container oe-main-content p-18-15 information"
        data-uk-scrollspy="{cls:'animate-started',delay:300}">

        <h2 class="oe-heading-2">PRECIO, DISPONIBILIDAD E INFORMACIÓN DETALLADA</h2>
        <div class="col-md-4 col-sm-6">
            <table class="table table-bordered oe-table f-s-13 bg-bco">
                <tbody>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-tags color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Precio</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <span style="color: #20c0ef;font-weight: bold">$
                                <?php echo intval($value["precio_bajo"] / $moneda[0]["usd"]) ?> USD</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-magic color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Opcionales</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["opcional"] ?><br>

                        </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-comment color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Idioma</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <img src="vistas/assets/img/arg.svg" width="35" height="19" alt="Español">
                            <img src="vistas/assets/img/usa.svg" width="35" height="19" alt="English">
                        </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-clock-o color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Turnos</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["turnos"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-tasks color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Duración</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["duracion"] ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-sm-6">
            <table class="table table-bordered oe-table f-s-13 bg-bco">
                <tbody>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-thumb-tack color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Requisitos</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["requisitos"] ?> </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-check-square-o color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">Incluye</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["incluye"] ?> </td>
                    </tr>
                    <tr>
                        <td class="td-50"><i class="fa oe-icon fa-square-o color-gris"></i></td>
                        <td class="color-gris f-s-16"><span style=" font-weight: 500;">No incluye</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo $value["no_incluye"] ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include "modulos/calendario.php"; ?>
    </section>

    <div class="oe-shortcode-section" data-uk-scrollspy="{cls:'animate-started',delay:500}">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-xs-12">

                    <div class="oe-box-tab">
                        <ul class="nav nav-tabs oe-tabs" role="tablist">
                            <li class="active"><a href="#desc" role="tab" data-toggle="tab"><b>Descripción</b></a></li>
                        </ul>
                        <div class="tab-content oe-tabs-content igualarAltura">
                            <div class="tab-pane active" id="desc">
                                <p>
                                    <?php echo $value["descripcion"] ?> </p>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- RECORRIDO -->
                <?php include "modulos/recorrido.php" ?>
            </div>
        </div>
    </div>
    <?php endif ?>
    <?php endforeach ?>
    <div class="container-reserva oe-shortcode-section txt-open">
        <div class="container">
            <div id="loadingOverlayAjax2" class="loading-overlay-ajax" style="position:absolute">
                <div>
                    <img src="/assets/images/ring-alt.svg" alt="loading" />
                </div>
            </div>

            <div id="frmReserva" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 modulo-reservas">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 sin-padd" id="reservaExc">
                    <h4 class="color-negro txt-open m-t-0">Perito Moreno: Pasarelas</h4>
                    <img src="vistas/images/uploads/ok3.png" alt="" width="15"><small class="f-s-11"><span
                            class="color-verde2"><span style="color:#3bc053; font-size: 13px"> Cancelación
                                gratis
                                hasta 3 días antes del inicio de la excursion</span></span></small>
                    <div class="block"><img src="vistas/images/uploads/ok3.png" alt="" width="15">
                        <span class="color-verde2"><small class="f-s-11"><span
                                    style="color:#3bc053; font-size: 13px">Confirmación
                                    inmediata</span></small></span>
                    </div>
                    <form name="frmReserva" action="" method="POST" style="margin:30px 0;">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                            <span class="f-s-12 txt-labels">Fecha de realización</span>
                            <div class="box-inputs">
                                <input style="float:left;" type="text" id="datepickerReserva"
                                    class="input-datepicker input-datepicker-col" placeholder="Seleccione una fecha">
                                <!-- <span class="fa fa-calendar blue icon"></span> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                            <span class="f-s-12 txt-labels">Turno</span>
                            <input type="hidden" value="" id="turnoSelect">
                            <div class="dropdown show" id="turnosDropdown" data-drop="false">
                                <a class="btn styled-select slate dropdown-toggle" id="dropdownTurnos"
                                    aria-haspopup="false" aria-expanded="false">
                                    Seleccione el turno </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownTurnos"></ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-b-20">

                            <span class="f-s-12 txt-labels">Pasajeros</span>
                            <input type="hidden" value="0" class="cantPasajeros">
                            <input type="hidden" value="" class="auxPasajeros">
                            <div class="dropdown show" id="PasajerosDrop" data-drop="false">

                                <a class="btn styled-select slate paj dropdown-toggle" id="dropdownPasajeros"
                                    aria-haspopup="false" aria-expanded="false">
                                    Pasajeros </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownPasajeros"></ul>
                            </div>
                        </div>
                    </form>
                </div>



                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 txt-open text-right p-5">

                    <?php foreach ($planes as $key => $value) : ?>

                    <?php if ($_GET["id"] == $value["id"]) : ?>
                    <div class="mod-precio-1-cont mt-5">
                        <br>
                        <div>
                            <i style="color: gris">Excursion:</i> <del><sup>$
                                </sup><?php echo intval($value["precio_alto"] / $moneda[0]["usd"]) ?> <sup>
                                    USD</sup></del>
                            <i style="color: black">$
                                <?php echo intval($value["precio_bajo"] / $moneda[0]["usd"]) ?> USD</i>
                        </div>
                        <div class="precio-celestes">
                            Total: <span><sup>$
                                </sup><?php echo intval($value["precio_bajo"] / $moneda[0]["usd"]) ?> <sup>
                                    USD</sup></span>
                        </div>

                    </div>
                    <?php
                            $resultado = (int)$value["precio_alto"] - (int)$value["precio_bajo"];

                            echo "<br><span class='text-success'>Ahorras: $" . intval($resultado / $moneda[0]["usd"]) . " USD</span>";

                            ?>

                    <hr>
                    <a href="#" class="btn oe-btn oe-btn-blue oe-btn-inline-icon btn-block">
                        <span data-btn-text="RESERVAR">RESERVAR</span></a>

                    <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="container" id="page">
        <div class="row m-0">
            <div class="col-md-12 col-sm-12 col-xs-12 p-2">
                <h2 class="oe-heading-2 m-20">GALERÍA DE IMÁGENES</h2>



                <div class="row">
                    <?php foreach ($galeria as $key => $value) : ?>

                    <?php if ($id == $value["id_excursion"]) : ?>

                    <div class="col-md-3 p-2 mt-2 demonstrations">
                        <a href='<?php echo $servidor . substr($value["imagen"], 6) ?>' class='fresco'
                            data-fresco-group='example' data-fresco-caption="<?php echo $value["excursion"] ?>">
                            <img src='<?php echo $servidor . substr($value["imagen"], 6) ?>' class="img-fluid galeria" /
                                style="width: 100% !important; height: 280px !important;">
                        </a>
                    </div>

                    <?php endif ?>
                    <?php endforeach ?>
                </div>



                <!-- <section class=" regular slider2 muestra-640 m-0">
                </section>  -->

            </div>
        </div>

    </div>



    <div class="bg-color-con-borde">

        <!-- MAPA -->
        <?php include "modulos/recorrido-map.php"; ?>

        <div id="ancla"></div>


    </div>

    <div class="clearfix"></div>


    <?php include "modulos/beneficios2.php"; ?>
    </div>

    <?php include "modulos/banner-fijo-footer.php"; ?>

</main>