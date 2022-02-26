<?php

$id = $_GET["id"];
$categoria = $_GET["categoria"];

if (isset($_COOKIE['Categoria_Carrito'])) {
    $categoria_carrito = $_COOKIE['Categoria_Carrito'];
} else {
    $categoria_carrito = $categoria;
}

$planes = ControladorPlanes::ctrMostrarPlanes();

$opcionales = ControladorOpcionales::ctrMostrarOpcionales();

$relacion = ControladorRelacion::ctrMostrarRelacion($id);

$galeria = ControladorGaleria::ctrMostrarGaleria();

$reservas = ControladorReservas::ctrMostrarReservas($id);

$turnos = ControladorTurnos::ctrTurnos();

$sumar = ControladorReservas::sumarReservas();

$relacionOpcional = ControladorRelacion::ctrMostrarRelacionOpcional($id);
$relacionTraslado = ControladorRelacion::ctrMostrarRelacionOpcionalTraslado($id);
$relacionAlmuerzo = ControladorRelacion::ctrMostrarRelacionOpcionalAlmuerzo($id);
$relacionVianda = ControladorRelacion::ctrMostrarRelacionOpcionalVianda($id);
$relacionNavegacion = ControladorRelacion::ctrMostrarRelacionOpcionalNavegacion($id);
$relacionEntrada = ControladorRelacion::ctrMostrarRelacionOpcionalEntrada($id);
$relacionRenta = ControladorRelacion::ctrMostrarRelacionOpcionalRenta($id);
$dias = ControladorTurnos::ctrMostrarRelacionDia();


if (isset($_POST["imp"])) {

    echo "<script>
                Swal.fire({
                    title: '¿Desea imprimir el catálogo?',
                    text: 'En caso contrario presione Cancel',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, imprimir!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.print();
                    }
                });

   

           
        </script>";
}

// $cantidad = $sumar[0][0];
// $excursion = $planes[$_GET["id"] - 1][8];





echo '  <script>
        var disableddates = [';
foreach ($dias as $key => $value) {
    if ($value["id_excursion"] == $id) {
        echo '"' . $value["dia"] . '",';
    }
}

echo '];

                        function DisableSpecificDates(date) {
                            var string = jQuery.datepicker.formatDate("dd-mm-yy", date);                return [disableddates.indexOf(string) == -1];
                            }   
                        </script>

                        <script>                  
                        $(function() {
                                    $("#datepickerReserva").datepicker({
                                    minDate: "0D",
                                    maxDate: "+2M, -10D",
                                    beforeShowDay: DisableSpecificDates
                                });
                            });

                            $(function() {               
                                $("#datepickerReservas").datepicker({
                                 minDate: "0D",
                                    maxDate: "+2M, -10D",
                                    beforeShowDay: DisableSpecificDates
                                });

                            });

                    </script>';




?>

<!-- NAVEGADOR -->
<?php

include "modulos/cabecera2.php";


?>


<?php foreach ($planes as $key => $value) : ?>

    <?php if ($_GET["id"] == $value["id"]) : ?>

        <main class="oe-blog" style="padding-top:0 !important;">
            <div id="imprimir<?php echo $_GET["id"] ?>">
                <div class="bg-color-con-borde" style="border-top:none!important;">
                    <section class="container-fluid alto-gde">
                        <div class="oe-banner-holder row alto-gde">
                            <div class="oe-white alto-gde">
                                <div class="col-xs-12 oe-cleaner oe-slider-bg alto-gde" style=" background-image: url(<?php echo $servidor . $value["banner"] ?>); width: 100% !important; height:650px !important">
                                    <div class="oe-block-float oe-float-centered-2x" data-uk-scrollspy="{cls:'animate-started',delay:500}">
                                        <div class="oe-effects oe-frombottom">
                                            <h1 class="oe-text-light oe-mtop-2x oe-fonts-large" style="text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.3);">
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
                                                <span><sup>$ </sup><?php echo $value["precio_bajo"] ?> <sup> ARS</sup></span>
                                            </div>
                                            <div>
                                                <del><sup>$ </sup><?php echo $value["precio_alto"] ?> <sup> ARS</sup></del>
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



                <section class="container oe-main-content p-18-15 information" data-uk-scrollspy="{cls:'animate-started',delay:300}" id="imprimir2">

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
                                        <span style="color: #20c0ef;font-weight: bold">$ <?php echo $value["precio_bajo"] ?>
                                        </span> - Adulto: (<?php echo $value["rango_adultos"] ?>) <br>
                                        <span style="color: #20c0ef;font-weight: bold">$ <?php echo $value["precio_ninos"] ?>
                                        </span> - Niño: (<?php echo $value["rango_ninos"] ?>) <br>
                                        <span style="color: #20c0ef;font-weight: bold"> Gratis
                                        </span> - Bebé: (0 a 2 años)
                                    </td>

                                </tr>
                                <tr>
                                    <td class="td-50"><i class="fa oe-icon fa-magic color-gris"></i></td>
                                    <td class="color-gris f-s-16"><span style=" font-weight: 500;">Opcionales</span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <p><?php echo $value["opcional"] ?></p>

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
                                        <li class="active"><a href="#desc" role="tab" data-toggle="tab"><b>Descripción</b></a>
                                        </li>
                                        <li><a href="<?php echo $value["trip_link"] ?>" target="_blank">Opiniones</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content oe-tabs-content igualarAltura">
                                        <div class="tab-pane active" id="desc">
                                            <p>
                                                <?php echo $value["descripcion"] ?> </p>
                                        </div>
                                        <div class="tab-pane" id="trip">
                                            <div id="TA_selfserveprop997" class="TA_selfserveprop">
                                                <ul id="V7WBtkLwVk9" class="TA_links 8o0w0wu3e4">
                                                    <li id="1W91ek5pDP7I" class="dtpyYRPd">
                                                        <a target="_blank" href="<?php echo $value["trip_link"] ?>"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor" /></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <script src="<?php echo $value["trip_detalle"] ?>">
                                            </script>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- RECORRIDO -->
                            <?php include "modulos/recorrido.php" ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif ?>
    <?php endforeach ?>
    </div>

    <div id="noimprime">

        <?php foreach ($planes as $key => $value) : ?>

            <?php if ($_GET["id"] == $value["id"]) : ?>

                <?php if ($value["category"] == "Renta") : ?>

                    <div class="container-reserva oe-shortcode-section txt-open">

                        <div class="container">

                            <div id="loadingOverlayAjax2" class="loading-overlay-ajax" style="position:absolute">
                                <div>
                                    <img src="/assets/images/ring-alt.svg" alt="loading" />
                                </div>
                            </div>

                            <div id="frmReservaR" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 modulo-reservas">
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 sin-padd" id="reservaExc">
                                    <?php foreach ($planes as $key => $value) : ?>
                                        <?php if ($_GET["id"] == $value["id"]) : ?>
                                            <h4 class="color-negro txt-open m-t-0" id="tituloRenta"><?php echo $value["titulo"]  ?></h4>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <img src="vistas/images/uploads/ok3.png" alt="" width="15"><small class="f-s-11"><span class="color-verde2"><span style="color:#3bc053; font-size: 13px"> Cancelación
                                                gratis
                                                hasta 3 días antes</span></span></small>
                                    <div class="block"><img src="vistas/images/uploads/ok3.png" alt="" width="15">
                                        <span class="color-verde2"><small class="f-s-11"><span style="color:#3bc053; font-size: 13px">Confirmación
                                                    inmediata</span></small></span>
                                    </div>
                                    <form name="frmReserva" action="" method="POST" style="margin:30px 0;">
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                                            <span class="f-s-12 txt-labels">Fecha de Entrada</span>
                                            <div class="box-inputs">
                                                <input style="float:left;" type="text" id="datepickerEntradaR" class="input-datepicker input-datepicker-col" placeholder="Seleccione una fecha" readonly>
                                                <img class="ui-datepicker-trigger oculto" src="vistas/images/icn-calendario.png" alt="" title="">
                                                <!-- <span class="fa fa-calendar blue icon"></span> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                                            <span class="f-s-12 txt-labels">Fecha de Salida</span>
                                            <div class="box-inputs">
                                                <input style="float:left;" type="text" id="datepickerSalidaR" class="input-datepicker input-datepicker-col" placeholder="Seleccione una fecha" readonly>
                                                <img class="ui-datepicker-trigger oculto" src="vistas/images/icn-calendario.png" alt="" title="">
                                                <!-- <span class="fa fa-calendar blue icon"></span> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                                            <span class="f-s-12 txt-labels">Cantidad de dias</span>
                                            <div class="box-inputs">

                                                <input style="float:left; font-size: 24px" type="number" id="cantidadDias" class="input-datepicker input-datepicker-col text-center" value="1" readonly>
                                                <!-- <span class="fa fa-calendar blue icon"></span> -->
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="f-s-12 txt-labels" style="margin-left:15px;"><b>Opcionales</b>. Deseo incluir
                                            en la reserva:</p>
                                        <?php foreach ($relacionRenta as $key => $value) : ?>
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                                    <div class="checkbox" style="margin-top:0;">
                                                        <input type="checkbox" name="rentaRsm" id="rentaRsm<?php echo $key + 1 ?>" />

                                                        <label for="rentaRsm<?php echo $key + 1 ?>"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                                    <input type="hidden" name="precioRenta" id="precioRenta<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                                    <strong class="celeste-reserva">
                                                        <sup>$</sup>
                                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                                        <sup>ARS</sup>
                                                    </strong>
                                                </div>
                                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                                    <div class="panel-group panel-group-4">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" style="background:#fff;">
                                                                <span class="f-s-14" id="tituloOpc<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#collapse1<?php echo $key + 1 ?>">Ver detalle</a>
                                                            </div>
                                                            <div style="height: auto;" id="collapse1<?php echo $key + 1 ?>" class="collapse">
                                                                <div class="panel-body" style="border:none;">
                                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 txt-open text-right p-5">

                                    <?php foreach ($planes as $key => $value) : ?>

                                        <?php if ($_GET["id"] == $value["id"]) : ?>
                                            <div class="mod-precio-1-cont mt-5" id="resultado2" data-precio="<?php echo $value["precio_bajo"] ?>" data-alto="<?php echo $value["precio_alto"] ?>">
                                                <br>

                                                <div class="precio-celestes" id="precio-reserva">

                                                    Total: <span>
                                                        <sup>$ </sup>
                                                        <sup>
                                                            <input type="hidden" name="" id="subTotal" value="<?php echo $value["precio_bajo"] ?>">
                                                            <span class="arg">

                                                                <b id="total"><?php echo $value["precio_bajo"] ?></b> ARS
                                                            </span>
                                                            <span class="usd" style="display: none"><b id="totalUsd">
                                                                    <?php
                                                                    $precio = str_replace(".", "", $value["precio_bajo"]);
                                                                    $usd = $precio / $moneda_usd;
                                                                    echo intval($usd);
                                                                    ?>
                                                                </b> USD
                                                            </span>
                                                            <input type="hidden" id="categoryR" value="<?php echo $categoria ?>">
                                                        </sup>
                                                    </span>
                                                </div>

                                            </div>


                                            <hr>
                                            <button type="button" onclick="reservarRenta()" style="height: 40px !important; margin-bottom: 5px;" class="btn  oe-btn-blue oe-btn-inline-icon btn-block btn3">
                                                <span data-btn-text="RESERVAR">RESERVAR</span></button>
                                            <!-- <form method="post">

                            <a onclick="noFunciona()" style="cursor:pointer;"
                                class=" btn oe-btn-red oe-btn-inline-icon  btn-block btn4"><i class="fa fa-cart-plus"
                                    style="background: none !important"></i>
                                <span data-btn-text=""> Añadir al carrito</span></a>
                        </form> -->

                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <div id="frmCasiR" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 modulo-reservas" style="display: none">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php foreach ($planes as $key => $value) : ?>

                                                <?php if ($_GET["id"] == $value["id"]) : ?>
                                                    <h4 class="color-negro txt-open m-t-0"><?php echo $value["titulo"]  ?>
                                                    </h4>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <div class="col-md-12" id="contentRsm2" style="border: 1px solid #90EE90; height: 100px; background: #F8F8FF">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4 p-3" style="margin-top: 10px;">
                                    <button class="btn btn-secondary btn-sm" onclick="volver()">Volver</button>
                                </div>
                            </div>
                        </div>

                    </div>
    </div>

<?php else : ?>

    <div class="container-reserva oe-shortcode-section txt-open">
        <div class="container">
            <div id="loadingOverlayAjax2" class="loading-overlay-ajax" style="position:absolute">
                <div>
                    <img src="/assets/images/ring-alt.svg" alt="loading" />
                </div>
            </div>

            <div id="frmReserva" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 modulo-reservas">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 sin-padd" id="reservaExc">
                    <?php foreach ($planes as $key => $value) : ?>

                        <?php if ($_GET["id"] == $value["id"]) : ?>
                            <h4 class="color-negro txt-open m-t-0" id="tituloForm"><?php echo $value["titulo"]  ?></h4>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <img src="vistas/images/uploads/ok3.png" alt="" width="15"><small class="f-s-11"><span class="color-verde2"><span style="color:#3bc053; font-size: 13px"> Cancelación
                                gratis
                                hasta 3 días antes del inicio de la excursion</span></span></small>
                    <div class="block"><img src="vistas/images/uploads/ok3.png" alt="" width="15">
                        <span class="color-verde2"><small class="f-s-11"><span style="color:#3bc053; font-size: 13px">Confirmación
                                    inmediata</span></small></span>
                    </div>
                    <form name="frmReserva" action="" method="POST" style="margin:30px 0;">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                            <span class="f-s-12 txt-labels">Fecha de realización <span class="text-danger">*</span></span>
                            <div class="box-inputs">
                                <input style="float:left;" type="text" id="datepickerReserva" class="input-datepicker input-datepicker-col" placeholder="Seleccione una fecha" readonly>
                                <img class="ui-datepicker-trigger oculto" src="vistas/images/icn-calendario.png" alt="" title="">
                                <!-- <span class="fa fa-calendar blue icon"></span> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-resp">
                            <span class="f-s-12 txt-labels">Turno <span class="text-danger">*</span></span>
                            <input type="hidden" value="" id="turnoSelect">
                            <div class="dropdown show" id="turnosDropdown" data-drop="false">
                                <select class="btn styled-select slate dropdown-toggle" id="dropdownTurnos" aria-haspopup="false" aria-expanded="false">
                                    <?php foreach ($turnos as $key => $value) : ?>

                                        <?php if ($_GET["id"] == $value["id_excursion"]) : ?>
                                            <option value="<?php echo $value["horarios"] ?>"><?php echo $value["horarios"] ?>
                                            </option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 m-b-20">

                            <span class="f-s-12 txt-labels">Pasajeros <span class="text-danger">*</span></span>
                            <div class="dropdown show" data-drop="false">
                                <div class="inner"></div>
                                <a class="btn styled-select slate paj dropdown-toggle" id="pasajeros" aria-haspopup="false" aria-expanded="false">
                                    Pasajeros
                                </a>

                                <div id="cantidad" class="col-md-12"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p class="f-s-12 txt-labels" style="margin-left:15px;"><b>Opcionales</b>. Deseo incluir
                            en la reserva:</p>
                        <?php foreach ($relacionTraslado as $key => $value) : ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                    <div class="checkbox" style="margin-top:0;">
                                        <input type="checkbox" name="trasladoRsm" id="trasladoRsm<?php echo $key + 1 ?>" />

                                        <label for="trasladoRsm<?php echo $key + 1 ?>"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                    <input type="hidden" name="precioTraslado" id="precioTraslado<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                    <strong class="celeste-reserva">
                                        <sup>$</sup>
                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                        <sup>ARS</sup>
                                    </strong>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                    <div class="panel-group panel-group-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="background:#fff;">
                                                <span class="f-s-14" id="tituloTraslado<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#collapse1<?php echo $key + 1 ?>">Ver detalle</a>
                                            </div>
                                            <div style="height: auto;" id="collapse1<?php echo $key + 1 ?>" class="collapse">
                                                <div class="panel-body" style="border:none;">
                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionAlmuerzo as $key => $value) : ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                    <div class="checkbox" style="margin-top:0;">
                                        <input type="checkbox" name="almuerzoRsm" id="almuerzoRsm<?php echo $key + 1 ?>" />
                                        <label for="almuerzoRsm<?php echo $key + 1 ?>"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                    <input type="hidden" name="precioAlmuerzo" id="precioAlmuerzo<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                    <strong class="celeste-reserva">
                                        <sup>$</sup>
                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                        <sup>ARS</sup>
                                    </strong>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                    <div class="panel-group panel-group-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="background:#fff;">
                                                <span class="f-s-14" id="tituloAlmuerzo<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#detalle-opcional-27<?php echo $key + 1 ?>">Ver detalle</a>
                                            </div>
                                            <div style="height: auto;" id="detalle-opcional-27<?php echo $key + 1 ?>" class="collapse">
                                                <div class="panel-body" style="border:none;">
                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionVianda as $key => $value) : ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                    <div class="checkbox" style="margin-top:0;">
                                        <input class="opcionales" type="checkbox" name="viandaRsm" id="viandaRsm<?php echo $key + 1 ?>" />
                                        <label for="viandaRsm<?php echo $key + 1 ?>"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                    <input type="hidden" name="precioVianda" id="precioVianda<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                    <strong class="celeste-reserva">
                                        <sup>$</sup>
                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                        <sup>ARS</sup>
                                    </strong>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                    <div class="panel-group panel-group-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="background:#fff;">
                                                <span class="f-s-14" id="tituloVianda<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#detalle-opcional-99<?php echo $key + 1 ?>">Ver detalle</a>
                                            </div>
                                            <div style="height: auto;" id="detalle-opcional-99<?php echo $key + 1 ?>" class="collapse">
                                                <div class="panel-body" style="border:none;">
                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionNavegacion as $key => $value) : ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                    <div class="checkbox" style="margin-top:0;">
                                        <input class="opcionales" type="checkbox" name="navegacionRsm" id="navegacionRsm<?php echo $key + 1 ?>" />
                                        <label for="navegacionRsm<?php echo $key + 1 ?>"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                    <input type="hidden" name="precioNavegacion" id="precioNavegacion<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                    <strong class="celeste-reserva">
                                        <sup>$</sup>
                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                        <sup>ARS</sup>
                                    </strong>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                    <div class="panel-group panel-group-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="background:#fff;">
                                                <span class="f-s-14" id="tituloNavegacion<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#detalle-opcional-100<?php echo $key + 1 ?>">Ver
                                                    detalle</a>
                                            </div>
                                            <div style="height: auto;" id="detalle-opcional-100<?php echo $key + 1 ?>" class="collapse">
                                                <div class="panel-body" style="border:none;">
                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($relacionEntrada as $key => $value) : ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 p-0">
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 p-0 text-right">
                                    <div class="checkbox" style="margin-top:0;">
                                        <input class="opcionales" type="checkbox" name="entradaRsm" id="entradaRsm<?php echo $key + 1 ?>" />
                                        <label for="entradaRsm<?php echo $key + 1 ?>"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-4 p-0 text-center">
                                    <input type="hidden" name="precioEntrada" id="precioEntrada<?php echo $key + 1 ?>" value="<?php echo $value["precio"] ?>">
                                    <strong class="celeste-reserva">
                                        <sup>$</sup>
                                        <span class="f-s-16"><?php echo $value["precio"] ?></span>
                                        <sup>ARS</sup>
                                    </strong>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-7 p-0 m-b-20">
                                    <div class="panel-group panel-group-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="background:#fff;">
                                                <span class="f-s-14" id="tituloEntrada<?php echo $key + 1 ?>"><?php echo $value["opcional"] ?></span>
                                                <a class="collapsed subrayado f-s-13 azul-2" data-toggle="collapse" data-target="#detalle-opcional-101<?php echo $key + 1 ?>">Ver
                                                    detalle</a>
                                            </div>
                                            <div style="height: auto;" id="detalle-opcional-101<?php echo $key + 1 ?>" class="collapse">
                                                <div class="panel-body" style="border:none;">
                                                    <span class="f-s-12 gris-osc"><?php echo $value["detalle"] ?></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 txt-open text-right p-5">

                    <?php foreach ($planes as $key => $value) : ?>

                        <?php if ($_GET["id"] == $value["id"]) : ?>
                            <div class="mod-precio-1-cont mt-5" id="resultado" data-precio="<?php echo $value["precio_bajo"] ?>" data-ninos="<?php echo $value["precio_ninos"] ?>" data-alto="<?php echo $value["precio_alto"] ?>">
                                <br>
                                <div>
                                    <i style="color: gris">Excursion:</i> <del><sup>$
                                        </sup><b id="precio_alto"><?php echo $value["precio_alto"] ?></b> <sup>
                                            ARS</sup></del>
                                    <i style="color: black">$ <b id="precio_bajo"><?php echo $value["precio_bajo"] ?></b>
                                        ARS</i>
                                </div>
                                <div class="precio-celestes" id="precio-reserva">

                                    Total: <span>
                                        <sup>$ </sup>
                                        <sup>
                                            <input type="hidden" name="" id="subTotal" value="<?php echo $value["precio_bajo"] ?>">
                                            <span class="arg">

                                                <b id="total"><?php echo $value["precio_bajo"] ?></b> ARS
                                            </span>
                                            <span class="usd" style="display: none"><b id="totalUsd">
                                                    <?php
                                                    $precio = str_replace(".", "", $value["precio_bajo"]);
                                                    $usd = $precio / $moneda_usd;
                                                    echo intval($usd);
                                                    ?>
                                                </b> USD
                                            </span>
                                            <input type="hidden" id="category" value="<?php echo $categoria ?>"> </sup>
                                    </span>
                                </div>

                            </div>
                            <?php

                            $precio = str_replace(".", "", $value["precio_bajo"]);
                            $precio2 = str_replace(".", "", $value["precio_alto"]);
                            $total = intval($precio2) - intval($precio);
                            $totalP = number_format($total);
                            $totalPa = str_replace(",", ".", $totalP);


                            echo "<br><span id='ahorro' class='text-success' data-ahorro='" . $totalPa . "'>Ahorras: $ <b id='totalAhorro'>" . $totalPa . "</b></span>";

                            ?>

                            <hr>
                            <button style="height: 40px !important; margin-bottom: 5px;" id="btn-reservar" data-category="<?php echo $categoria ?>" class="btn  oe-btn-blue oe-btn-inline-icon btn-block btn3" onclick="reservar()">
                                <span data-btn-text="RESERVAR">RESERVAR</span></button>

                            <?php if ($categoria == $categoria_carrito) : ?>
                                <form method="post">

                                    <a id="enviarCarrito" style="cursor:pointer;" onclick="anadirCarrito()" class=" btn oe-btn-red oe-btn-inline-icon  btn-block btn4"><i class="fa fa-cart-plus" style="background: none !important"></i>
                                        <span data-btn-text=""> Añadir al carrito</span></a>
                                </form>
                            <?php else : ?>
                                <form method="post">

                                    <a id="enviarCarrito" style="cursor:pointer;" onclick="noPermitido()" class=" btn oe-btn-red oe-btn-inline-icon  btn-block btn4"><i class="fa fa-cart-plus" style="background: none !important"></i>
                                        <span data-btn-text=""> Añadir al carrito</span></a>
                                </form>
                            <?php endif; ?>
                            <span id="probar"></span>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
            <div id="frmCasi" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 modulo-reservas" style="display: none">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($planes as $key => $value) : ?>

                                <?php if ($_GET["id"] == $value["id"]) : ?>
                                    <h4 class="color-negro txt-open m-t-0"><?php echo $value["titulo"]  ?>
                                    </h4>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div class="col-md-12" id="contentRsm" style="border: 1px solid #90EE90; height: 100px; background: #F8F8FF">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4 p-3" style="margin-top: 10px;">
                    <button class="btn btn-secondary btn-sm" onclick="volver()">Volver</button>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>


<div class="container" id="page">
    <div class="row m-0">
        <div class="col-md-12 col-sm-12 col-xs-12 p-2">
            <h2 class="oe-heading-2 m-20">GALERÍA DE IMÁGENES</h2>



            <div class="row">
                <?php foreach ($galeria as $key => $value) : ?>

                    <?php if ($id == $value["id_excursion"]) : ?>

                        <div class="col-md-3 p-2 mt-2 demonstrations">
                            <a href='<?php echo $servidor . substr($value["imagen"], 6) ?>' class='fresco' data-fresco-group='example' data-fresco-caption="<?php echo $value["excursion"] ?>">
                                <img src='<?php echo $servidor . substr($value["imagen"], 6) ?>' class="img-fluid galeria" / style="width: 100% !important; height: 280px !important;">
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


<?php include "modulos/banner-fijo-footer.php"; ?>
</div>
        </main>
        </main>