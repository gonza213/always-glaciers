<?php

if (isset($_POST["fecha_ingreso"])) {

    echo '<pre class="bg-white">';
    print_r($_POST["fecha_ingreso"]);
    echo '</pre>';

    echo '<pre class="bg-white">';
    print_r($_POST["fecha_salida"]);
    echo '</pre>';
} else {
    echo '<script>window.location="' . $rutas . '"</script>';
}

?>

<?php include "modulos/cabecera.php" ?>


<main class="oe-blog oe-blog-width-sidebar bg-eee">
    <div>
        <section class="container oe-main-content p-t-0">
            <div class="row">

                <div class="col-xs-12 col-sm-3 col-md-3 display-responsive columna-data">
                    <h3 class="col-cel f-s-20" id="titulo-filtro" style="margin-top:  19px">Filtrar excursiones...</h3>
                    <div class="modulo-itinerario p-5 m-t-20">
                        <h6 class="m-t-0">
                            <div style="display: inline-block; margin-top: -10px;">
                                <svg style="vertical-align: middle;" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 224 224" width="28px"
                                    height="28px">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,224v-224h224v224z" fill="none"></path>
                                        <g fill="#1c79b5">
                                            <g id="surface1">
                                                <path
                                                    d="M53.76,0c-4.9,0 -8.96,4.06 -8.96,8.96v8.96h-26.88c-4.9,0 -8.96,4.06 -8.96,8.96v76.16c-0.0175,1.61 0.8225,3.115 2.2225,3.9375c1.4,0.805 3.115,0.805 4.515,0c1.4,-0.8225 2.24,-2.3275 2.2225,-3.9375v-31.36h188.16v134.4h-188.16v-35.84c0.0175,-1.61 -0.8225,-3.115 -2.2225,-3.9375c-1.4,-0.805 -3.115,-0.805 -4.515,0c-1.4,0.8225 -2.24,2.3275 -2.2225,3.9375v35.84c0,4.9 4.06,8.96 8.96,8.96h188.16c4.9,0 8.96,-4.06 8.96,-8.96v-179.2c0,-4.9 -4.06,-8.96 -8.96,-8.96h-26.88v-8.96c0,-4.9 -4.06,-8.96 -8.96,-8.96h-8.96c-4.9,0 -8.96,4.06 -8.96,8.96v8.96h-80.64v-8.96c0,-4.9 -4.06,-8.96 -8.96,-8.96zM53.76,8.96h8.96v26.88h-8.96v-12.6875c0.0875,-0.49 0.0875,-0.98 0,-1.4525zM161.28,8.96h8.96v12.6875c-0.0875,0.49 -0.0875,0.98 0,1.4525v12.74h-8.96zM17.92,26.88h26.88v8.96c0,4.9 4.06,8.96 8.96,8.96h8.96c4.9,0 8.96,-4.06 8.96,-8.96v-8.96h80.64v8.96c0,4.9 4.06,8.96 8.96,8.96h8.96c4.9,0 8.96,-4.06 8.96,-8.96v-8.96h26.88v35.84h-188.16zM75.32,99.1725c-1.82,-0.035 -3.4825,1.0325 -4.2175,2.695c-0.7175,1.68 -0.35,3.6225 0.9275,4.935l22.12,23.1175h-80.71c-1.61,-0.0175 -3.115,0.8225 -3.9375,2.2225c-0.805,1.4 -0.805,3.115 0,4.515c0.8225,1.4 2.3275,2.24 3.9375,2.2225h78.5575l-19.9675,20.8775c-1.715,1.8025 -1.6625,4.6375 0.1225,6.335c1.8025,1.715 4.6375,1.6625 6.335,-0.1225l26.18,-27.37c1.295,-0.49 2.275,-1.5225 2.695,-2.8175l2.3975,-2.5025l-31.255,-32.69c-0.8225,-0.875 -1.9775,-1.4 -3.185,-1.4175z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <style scoped>
                                @media (min-width: 1200px) {
                                    .title_iti {
                                        color: black;
                                        padding: 0 0 0 10px;
                                        display: inline-block;
                                        vertical-align: middle;
                                    }
                                }

                                @media (max-width: 1199px) {
                                    .title_iti {
                                        color: #2289cb;
                                        padding: 0 0 0 10px;
                                        display: inline-block;
                                        vertical-align: middle;
                                    }
                                }
                                </style>
                                <span class="title_iti">
                                    Por fecha
                                </span>
                            </div>
                        </h6>
                        <form>
                            <span class="txt-labels f-s-12" style="font-weight:600">Fecha de llegada:</span>
                            <div class="box-inputs">
                                <input type="text" id="datepicker" class="input-datepicker input-datepicker-col"
                                    placeholder="Seleccione fecha de llegada"
                                    value="<?php echo $_POST["fecha_ingreso"] ?>" />
                            </div>
                            <span class="txt-labels f-s-12" style="font-weight:600">Fecha de partida:</span>
                            <div class="box-inputs">
                                <input type="text" id="datepicker2" class="input-datepicker input-datepicker-col"
                                    placeholder="Seleccione fecha de partida"
                                    value="<?php echo $_POST["fecha_salida"] ?>" />
                            </div>
                        </form>
                        <div class="panel-group panel-group-4 m-t-40" id="accordion4">
                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-heading" style="background:none;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#acord-0"
                                            class="collapsed">
                                            <i class="panel-icon panel-icon-right panel-icon-sort"></i>
                                            <div style="display: inline-block; margin-top: -10px;">
                                                <svg style="vertical-align: middle;" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 224 224"
                                                    width="35px" height="35px">
                                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <path d="M0,192v-192h192v192z" fill="none"></path>
                                                        <g fill="#1c79b5">
                                                            <path
                                                                d="M96,7.68c-48.73231,0 -88.32,39.58769 -88.32,88.32c0,48.73231 39.58769,88.32 88.32,88.32c48.73231,0 88.32,-39.58769 88.32,-88.32c0,-48.73231 -39.58769,-88.32 -88.32,-88.32zM96,15.36c44.58172,0 80.64,36.05828 80.64,80.64c0,44.58172 -36.05828,80.64 -80.64,80.64c-44.58172,0 -80.64,-36.05828 -80.64,-80.64c0,-44.58172 36.05828,-80.64 80.64,-80.64zM95.94,26.8275c-2.11782,0.0331 -3.809,1.77462 -3.78,3.8925v54.4275c-4.59978,1.62627 -7.67633,5.9737 -7.68,10.8525c0.00351,1.71623 0.39043,3.40999 1.1325,4.9575l-23.0475,23.0475c-1.00316,0.96314 -1.40727,2.39335 -1.05646,3.73904c0.35081,1.3457 1.40171,2.3966 2.74741,2.74741c1.3457,0.35081 2.77591,-0.05329 3.73904,-1.05646l23.0475,-23.0475c1.54751,0.74207 3.24127,1.12899 4.9575,1.1325c6.36232,0 11.52,-5.15768 11.52,-11.52c-0.00684,-4.87605 -3.08281,-9.21965 -7.68,-10.845v-54.435c0.01421,-1.03795 -0.39236,-2.03745 -1.12708,-2.77076c-0.73472,-0.73331 -1.735,-1.13795 -2.77292,-1.12174z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <style scoped>
                                                @media (min-width: 1200px) {
                                                    .title_iti_2 {
                                                        color: black;
                                                        padding: 0 0 0 5px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }

                                                @media (max-width: 1199px) {
                                                    .title_iti_2 {
                                                        color: #2289cb;
                                                        padding: 0 0 0 5px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }
                                                </style>
                                                <span class="title_iti_2">
                                                    Por horario de inicio y fin
                                                </span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div style="height: auto;" id="acord-0" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <span class="txt-labels f-s-12" style="font-weight:600">Mostrar sólo excursiones
                                            que inicien luego de las:</span><br>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker1" class="form-control input-small timepicker-input"
                                                type="text">
                                            <span class="input-group-addon" onclick="showTimepicker('1')"><i
                                                    class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <br>
                                        <span class="txt-labels f-s-12" style="font-weight:600">Mostrar sólo excursiones
                                            que finalizan antes de las:</span><br>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker2" class="form-control input-small timepicker-input"
                                                type="text">
                                            <span class="input-group-addon" onclick="showTimepicker('2')"><i
                                                    class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-heading" style="background:none;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#acord-1"
                                            class="collapsed">
                                            <i class="panel-icon panel-icon-right panel-icon-sort"></i>
                                            <div style="display: inline-block; margin-top:-10px">
                                                <svg style="vertical-align: middle;" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 224 224"
                                                    width="34px" height="34px">
                                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <path d="M0,192v-192h192v192z" fill="none"></path>
                                                        <g fill="#1c79b5">
                                                            <path
                                                                d="M127.41,6.945l-27.6975,69.9075h-54.12c-1.48305,-9.65246 -6.79167,-17.6235 -15,-21.8775c0.03298,-0.40783 0.1275,-0.79916 0.1275,-1.215c0,-8.43761 -6.92239,-15.36 -15.36,-15.36c-8.43761,0 -15.36,6.92239 -15.36,15.36c0,8.43761 6.92239,15.36 15.36,15.36c5.26014,0 9.93273,-2.69436 12.705,-6.765c6.54247,3.84458 10.3575,10.70158 10.3575,20.0625c-0.00769,0.33066 0.02761,0.66093 0.105,0.9825c0.92821,23.78906 13.78424,43.35792 32.8575,54.9225c-11.94761,0.81899 -21.465,10.81005 -21.465,22.9575c0,12.67916 10.36084,23.04 23.04,23.04c12.67916,0 23.04,-10.36084 23.04,-23.04c0,-5.54713 -1.97972,-10.65383 -5.2725,-14.64c7.13348,1.99096 14.70548,3.0675 22.5525,3.0675c9.88825,0 19.34135,-1.71129 28.02,-4.8225c-4.25023,4.18492 -6.9,9.99077 -6.9,16.395c0,12.67916 10.36084,23.04 23.04,23.04c12.67916,0 23.04,-10.36084 23.04,-23.04c0,-12.67916 -10.36084,-23.04 -23.04,-23.04c-0.78487,0 -1.5598,0.0425 -2.325,0.12c19.84172,-12.00437 32.9925,-32.6578 32.9925,-57.72v-0.6c0.02496,-0.19394 0.03499,-0.38952 0.03,-0.585c0,-0.23337 -0.02788,-0.45733 -0.03,-0.69v-1.9125h-0.0825c-1.17346,-34.07657 -25.07174,-60.34066 -57.3225,-69.0225zM131.8275,16.5525c27.64456,8.72259 47.45174,30.91966 48.57,60.3h-72.465zM15.36,46.08c4.28703,0 7.68,3.39297 7.68,7.68c0,4.28703 -3.39297,7.68 -7.68,7.68c-4.28703,0 -7.68,-3.39297 -7.68,-7.68c0,-4.28703 3.39297,-7.68 7.68,-7.68zM46.425,84.4275h133.71c-2.06314,33.90876 -30.71386,57.705 -66.855,57.705c-36.145,0 -64.79213,-23.79604 -66.855,-57.705zM72.96,145.92c8.52858,0 15.36,6.83142 15.36,15.36c0,8.52858 -6.83142,15.36 -15.36,15.36c-8.52858,0 -15.36,-6.83142 -15.36,-15.36c0,-8.52858 6.83142,-15.36 15.36,-15.36zM157.44,145.92c8.52858,0 15.36,6.83142 15.36,15.36c0,8.52858 -6.83142,15.36 -15.36,15.36c-8.52858,0 -15.36,-6.83142 -15.36,-15.36c0,-8.52858 6.83142,-15.36 15.36,-15.36z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <style scoped>
                                                @media (min-width: 1200px) {
                                                    .title_iti_3 {
                                                        color: black;
                                                        padding: 0 0 0 6px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }

                                                @media (max-width: 1199px) {
                                                    .title_iti_3 {
                                                        color: #2289cb;
                                                        padding: 0 0 0 6px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }
                                                </style>
                                                <span class="title_iti_3">
                                                    Por edades aceptadas
                                                </span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div style="height: auto;" id="acord-1" class="panel-collapse collapse filtro-edad">
                                    <div class="panel-body">
                                        <span style="font-weight: 300;">Algunas excursiones tienen límite de edad. Puede
                                            filtrar los resultados de su búsqueda indicando las edades del viajero más
                                            joven y del viajero más adulto:</span><br><br>
                                        <div id="slider-handles" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                        <input type="text" id="minAge" readonly="readonly">
                                        <input type="text" id="maxAge" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-heading" style="background:none;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#acord-3"
                                            class="collapsed">
                                            <i class="panel-icon panel-icon-right panel-icon-sort"></i>
                                            <div style="display: inline-block; margin-top:-10px"><svg
                                                    style="vertical-align: middle;" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 224 224"
                                                    width="30px" height="30px">
                                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <path d="M0,224v-224h224v224z" fill="none"></path>
                                                        <g fill="#1c79b5">
                                                            <path
                                                                d="M111.93,8.89875c-0.25553,0.00449 -0.51021,0.03084 -0.76125,0.07875c-56.17728,0.44782 -101.71992,45.97577 -102.19125,102.1475c-0.10817,0.56066 -0.10817,1.13684 0,1.6975c0.44314,56.18131 45.97284,101.72865 102.1475,102.2c0.56066,0.10817 1.13684,0.10817 1.6975,0c56.18131,-0.44313 101.72865,-45.97284 102.2,-102.1475c0.10817,-0.56066 0.10817,-1.13684 0,-1.6975c-0.44327,-56.19889 -46.00111,-101.75672 -102.2,-102.2c-0.29412,-0.056 -0.59312,-0.08239 -0.8925,-0.07875zM107.52,18.03375v4.36625c-0.02285,1.61565 0.826,3.11844 2.22151,3.93294c1.39551,0.81449 3.12147,0.81449 4.51698,0c1.39551,-0.81449 2.24436,-2.31729 2.22151,-3.93294v-4.36625c48.44125,2.26432 87.22193,41.045 89.48625,89.48625h-4.36625c-1.61565,-0.02285 -3.11844,0.826 -3.93294,2.22151c-0.81449,1.39551 -0.81449,3.12147 0,4.51698c0.81449,1.39551 2.31729,2.24436 3.93294,2.22151h4.36625c-2.26432,48.44125 -41.045,87.22193 -89.48625,89.48625v-4.36625c0.01658,-1.21095 -0.45775,-2.37703 -1.31492,-3.23255c-0.85717,-0.85552 -2.02417,-1.32761 -3.23508,-1.3087c-2.47079,0.03862 -4.44384,2.07039 -4.41,4.54125v4.36625c-48.44125,-2.26432 -87.22193,-41.045 -89.48625,-89.48625h4.36625c1.61565,0.02285 3.11844,-0.826 3.93294,-2.22151c0.81449,-1.39551 0.81449,-3.12147 0,-4.51698c-0.81449,-1.39551 -2.31729,-2.24436 -3.93294,-2.22151h-4.36625c2.26432,-48.44125 41.045,-87.22193 89.48625,-89.48625zM165.6025,53.76c-0.84134,0.03043 -1.65709,0.29729 -2.35375,0.77l-64.16375,43.3475c-0.47619,0.32137 -0.88614,0.73131 -1.2075,1.2075l-43.3475,64.16375c-1.20245,1.77839 -0.9745,4.15978 0.54348,5.67777c1.51799,1.51799 3.89938,1.74594 5.67777,0.54348l64.1725,-43.3475c0.47619,-0.32137 0.88613,-0.73131 1.2075,-1.2075l43.33875,-64.16375c0.94643,-1.3965 1.02822,-3.20624 0.21161,-4.68242c-0.81661,-1.47618 -2.39317,-2.36853 -4.07911,-2.30883zM104.81625,104.81625l14.3675,14.3675l-44.28375,29.91625z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <style scoped>
                                                @media (min-width: 1200px) {
                                                    .title_iti_4 {
                                                        color: black;
                                                        padding: 0 0 0 10px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }

                                                @media (max-width: 1199px) {
                                                    .title_iti_4 {
                                                        color: #2289cb;
                                                        padding: 0 0 0 10px;
                                                        display: inline-block;
                                                        vertical-align: middle;
                                                    }
                                                }
                                                </style>
                                                <span class="title_iti_4">
                                                    Por ubicación
                                                </span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div style="height: 0px;" id="acord-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="checkbox m-t-0 p-t-0">
                                            <div class="m-10-0 filtro-zona" id="celda-3">
                                                <input id="zona-3" nombre="dataOpcional" name="" value="3"
                                                    class="chkPax zona" checked="" type="checkbox">
                                                <label for="zona-3" class="lblZona">
                                                    <span class="f-s-12">Glaciar Perito Moreno </span>
                                                </label>
                                                <div class="label-solo">
                                                    <a href="javascript: soloFilter(3)" class="f-s-12">Solo</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="promociones">
                        <div class="modulo-itinerario-col">
                            <a href="https://www.patagoniachic.com/medios-de-pago" target="_blank"><img
                                    class="img-responsive" src="/assets/img/banner-mercadopago.png"
                                    alt="Ver promociones 12 cuotas sin interés"></a>
                        </div>
                    </div>

                    <div id="itinerario" style="display: none">
                        <div class="modulo-itinerario-col">
                            <h6>Mi itinerario</h6>
                            <div class="timeline">
                                <dl>
                                </dl>
                            </div>
                            <a href="/reserva/datos-personales.html"
                                class="btn oe-btn oe-btn-blue btn-home btn-home-calendario btn-carro btn-100"
                                style="margin:20px 0 5px 0;">
                                <span class="btn-carro">Comprar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 display-responsive">
                    <div id="cronograma">
                        <div class=" mltt fix_titles  mltt_as_nav hide_767">
                            <div class="mltt__viewport" data-pb-crsell="mlt_timeline">
                                <div class="mltt__button mltt__button--left js__mltt__move_right" style="display: none"
                                    onclick="scrollRightCron()">
                                    <svg class="bk-icon b-icon" height="32" width="32" viewBox="0 0 128 128">
                                        <path
                                            d="M80 104a8 8 0 0 1-5.7-2.3L36.7 64l37.6-37.7a8 8 0 0 1 11.4 11.4L59.3 64l26.4 26.3A8 8 0 0 1 80 104z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mltt__button mltt__button--right js__mltt__move_left" style="display: none"
                                    onclick="scrollLeftCron()">
                                    <svg class="bk-icon b-icon" height="32" width="32" viewBox="0 0 128 128">
                                        <path
                                            d="M48 104a8 8 0 0 1-5.7-13.7L68.7 64 42.3 37.7a8 8 0 0 1 11.4-11.4L91.3 64l-37.6 37.7A8 8 0 0 1 48 104z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mltt__track">
                                    <div class="mltt__bucket">
                                        <div class="mltt__legs" id="contenido-cron">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modulo-itinerario titulo-azul-resp">
                        <div class="encabezados-itinerario">
                            <button id="btn-back" type="button" class="btn btn-ant" disabled><i
                                    class="icon-flecha-atras"></i></button>
                            <div class="itinerarios-fechas">
                                <div id="ds-date"></div>
                                <span id="ds-day"></span>
                            </div>
                            <button id="btn-next" type="button" class="btn btn-sig" disabled><i
                                    class="icon-flecha-sig"></i></button>
                        </div>
                    </div>

                    <div id="ordenamientos" class="ordenamientos hidden">
                        <span class="tit-orden pull-left">Ordenar:</span>
                        <ul style="overflow: visible;" class="nav nav-tabs tabs ordenamiento-excursiones"
                            id="SortFilter">
                            <li id="popularidad"><a href="javascript:reordenar('popularidad');"
                                    data-sort="popularidad">Por popularidad <span
                                        class="fa ml-5 fa-caret-down"></span></a></li>
                            <li id="precio"><a href="javascript:reordenar('precio');" data-sort="precio">Por precio
                                    <span class="fa ml-5 fa-caret-up"></span></a></li>
                        </ul>
                    </div>
                    <!-- <div id="loading" class="hidden">
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                        <div class="modulo-itinerario relative">
                            <img src="/assets/img/cargador-fb.gif" alt="Cargando" class="img-responsive cargador-fb" />
                            <div class="panel-group panel-group-4" style="height:153px">
                            </div>
                        </div>
                    </div> -->

                    <div class="modulo-itinerario">
                        <div class="panel-group panel-group-4" data-parent="#accordion1">
                            <div class="panel panel-default h124">
                                <div class="mod-mas-opc">
                                    <div class="col-xs-12 col-sm-2 col-md-2 m-p-0 p-20 thumb-resp">
                                        <img class="img-responsive"
                                            src="../images/uploads/patagoniachic_excursiones1464299276.png"
                                            alt="Cabalgata Diaria en el Lago Roca">
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 p-30 medio-resp">
                                        <div class="col-xs-12 col-sm-9 col-md-9 m-p-0 h3-resp">
                                            <h3><a class="collapsed tit-a" data-toggle="collapse"
                                                    data-parent="#accordion1" href="#collapse1">Minitrecking sobre
                                                    el Perito Moreno</a></h3>
                                            <h3><a href="/excursiones-ficha.php?idEx=6" class="tit-b">Minitrecking
                                                    sobre el Perito Moreno</a></h3>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3 widget-resp desaparece">

                                            <div id="TA_socialButtonBubbles181" class="TA_socialButtonBubbles m-t-10">
                                                <ul id="IVH0sN" class="TA_links H05aygjs4Ql">
                                                    <li id="hE7FBdDrvO" class="8zUVFid">
                                                        <a target="_blank"
                                                            href="https://www.tripadvisor.com.ar/Hotel_Review-g312851-d1043599-Reviews-Estancia_Nibepo_Aike-El_Calafate_Province_of_Santa_Cruz_Patagonia.html">
                                                            <img
                                                                src="https://www.tripadvisor.com.ar/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png" /></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-7 col-md-7 m-p-0">
                                            <p class="itinerarios-items h-80"><i
                                                    class="fa oe-icon fa-clock-o desaparece"></i> Turnos
                                                disponibles:<br>
                                                <span>9:00 am a 5:00 pm</span>
                                                <span>12:00 am a 8:00 pm</span>
                                                <span>4:00 pm a 9:00 pm</span>
                                            </p>
                                            <p class="itinerarios-items2">
                                                <span>9:00 am a 5:00 pm</span>
                                                <span>12:00 am a 8:00 pm</span>
                                                <span>4:00 pm a 9:00 pm</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-5 text-right icns-exc pad-0 desaparece">
                                            <a href="" title="Caminata sobre hielo" rel="tooltip"><img
                                                    src="/assets/img/icn-trekking.png" alt="Trekking"
                                                    title="Trekking" /></a>
                                            <a href="" title="Caminata sobre hielo" rel="tooltip"><img
                                                    src="/assets/img/icn-comida.png" alt="Trekking" /></a>
                                            <a href="" title="Caminata sobre hielo" rel="tooltip"><img
                                                    src="/assets/img/icn-iceberg.png" alt="Trekking" /></a>
                                            <a href="" title="Caminata sobre hielo" rel="tooltip"><img
                                                    src="/assets/img/icn-nav.png" alt="Trekking" /></a>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="panel-heading btn-desplegar esconde-esplegar desaparece">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion1"
                                                    href="#collapse1" style="font-size:11px;padding-right:15px;">
                                                    <i class="panel-icon panel-icon-right panel-icon-sort"></i>
                                                    Conocé que incluye, opcionales y más datos de esta excursión.
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xs-12 col-sm-2 col-md-2 m-p-0 centrado oculta-itinerario p-20 pie-fecha-precio-resp">
                                        <div class="modulo-precio-itinerarios">
                                            <div class="itinerarios-precios">
                                                <p class="desaparece"><sup>$</sup><span></span><sup>ARS</sup></p>
                                                <p class="precio-resp"></p>
                                            </div>
                                            <a href="#anclaReserva" class="btn-reservar desaparece pepe2">Reservar</a>
                                            <p class="txt-reservar"><i class="fa oe-icon fa-check verde"></i> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>