<?php

$dia = $_GET['fecha'];

$planes = ControladorPlanes::ctrMostrarPlanes();

?>

<?php include "modulos/cabecera.php" ?>


<main class="oe-blog oe-blog-width-sidebar bg-eee itinerario" style="margin-top: 100px !important">
    <div>
        <section class="container oe-main-content p-t-0">
            <div class="row">

                <div class="col-xs-12 col-sm-3 col-md-3 display-responsive columna-data">
                    <div class="form-group" style="margin-top: 10px">
                        <input type="text" id="buscador2" class="form-control" placeholder="Busqueda..." style="border-left: 3px solid #000; ">
                    </div>

                    <div class="modulo-itinerario p-5 m-t-20">
                        <h6 class="m-t-0">
                            <div style="display: inline-block; margin-top: -10px;">
                                <svg style="vertical-align: middle;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 224 224" width="28px" height="28px">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,224v-224h224v224z" fill="none"></path>
                                        <g fill="#1c79b5">
                                            <g id="surface1">
                                                <path d="M53.76,0c-4.9,0 -8.96,4.06 -8.96,8.96v8.96h-26.88c-4.9,0 -8.96,4.06 -8.96,8.96v76.16c-0.0175,1.61 0.8225,3.115 2.2225,3.9375c1.4,0.805 3.115,0.805 4.515,0c1.4,-0.8225 2.24,-2.3275 2.2225,-3.9375v-31.36h188.16v134.4h-188.16v-35.84c0.0175,-1.61 -0.8225,-3.115 -2.2225,-3.9375c-1.4,-0.805 -3.115,-0.805 -4.515,0c-1.4,0.8225 -2.24,2.3275 -2.2225,3.9375v35.84c0,4.9 4.06,8.96 8.96,8.96h188.16c4.9,0 8.96,-4.06 8.96,-8.96v-179.2c0,-4.9 -4.06,-8.96 -8.96,-8.96h-26.88v-8.96c0,-4.9 -4.06,-8.96 -8.96,-8.96h-8.96c-4.9,0 -8.96,4.06 -8.96,8.96v8.96h-80.64v-8.96c0,-4.9 -4.06,-8.96 -8.96,-8.96zM53.76,8.96h8.96v26.88h-8.96v-12.6875c0.0875,-0.49 0.0875,-0.98 0,-1.4525zM161.28,8.96h8.96v12.6875c-0.0875,0.49 -0.0875,0.98 0,1.4525v12.74h-8.96zM17.92,26.88h26.88v8.96c0,4.9 4.06,8.96 8.96,8.96h8.96c4.9,0 8.96,-4.06 8.96,-8.96v-8.96h80.64v8.96c0,4.9 4.06,8.96 8.96,8.96h8.96c4.9,0 8.96,-4.06 8.96,-8.96v-8.96h26.88v35.84h-188.16zM75.32,99.1725c-1.82,-0.035 -3.4825,1.0325 -4.2175,2.695c-0.7175,1.68 -0.35,3.6225 0.9275,4.935l22.12,23.1175h-80.71c-1.61,-0.0175 -3.115,0.8225 -3.9375,2.2225c-0.805,1.4 -0.805,3.115 0,4.515c0.8225,1.4 2.3275,2.24 3.9375,2.2225h78.5575l-19.9675,20.8775c-1.715,1.8025 -1.6625,4.6375 0.1225,6.335c1.8025,1.715 4.6375,1.6625 6.335,-0.1225l26.18,-27.37c1.295,-0.49 2.275,-1.5225 2.695,-2.8175l2.3975,-2.5025l-31.255,-32.69c-0.8225,-0.875 -1.9775,-1.4 -3.185,-1.4175z">
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
                                <input type="text" id="fechaLlegada" class="input-datepicker input-datepicker-col" placeholder="Seleccione fecha de llegada" readonly />
                            </div>
                            <span class="txt-labels f-s-12" style="font-weight:600">Fecha de partida:</span>
                            <div class="box-inputs">
                                <input type="text" id="fechaSalida" class="input-datepicker input-datepicker-col" placeholder="Seleccione fecha de partida" readonly />
                            </div>
                        </form>

                    </div>

                    <div id="promociones">
                        <div class="modulo-itinerario-col">
                            <a href="https://www.patagoniachic.com/medios-de-pago" target="_blank"><img class="img-responsive" src="vistas/images/tarjetas-1.png" alt="Ver promociones 12 cuotas sin interés"></a>
                        </div>
                    </div>

                    <div id="itinerario" style="display: none">
                        <div class="modulo-itinerario-col">
                            <h6>Mi itinerario</h6>
                            <div class="timeline">
                                <dl>
                                </dl>
                            </div>
                            <a href="/reserva/datos-personales.html" class="btn oe-btn oe-btn-blue btn-home btn-home-calendario btn-carro btn-100" style="margin:20px 0 5px 0;">
                                <span class="btn-carro">Comprar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 display-responsive p-5">


                    <div class="modulo-itinerario titulo-azul-resp">
                        <div class="encabezados-itinerario" style="height: 80px !important">
                            <div class="row">
                                <div class="col-sm-2">
                                    <span style="color: #fff">Fechas seleccionadas: </span>
                                </div>
                                <div class="col-sm-10">

                                    <a href="index.php?pagina=itinerario-listado&fecha=<?php echo $_COOKIE['Entrada'] ?>" class="btn btn-warning btn-sm fppal">
                                        <span id="fechaPpal"></a>
                                    </button>
                                    <span id="fechasBtn">

                                    </span>
                                </div>
                            </div>

                        </div>
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
                    <?php  foreach ($planes as $key => $value) : ?>
                        <?php if ($value['category'] == 'Excursion') : ?>
                       

                            <div class="modulo-itinerario itemBody">
                                <div class="panel-group panel-group-4" data-parent="#accordion1">
                                    <div class="panel panel-default h124">
                                        <div class="mod-mas-opc">
                                            <div class="col-xs-12 col-sm-3 col-md-3 m-p-0 p-20 thumb-resp">
                                                <img class="img-responsive" src="backend/<?php echo $value['banner'] ?>" style="height: 30vh" alt="<?php echo $value['titulo'] ?>">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 p-30 medio-resp">
                                                <div class="col-xs-12 col-sm-9 col-md-9 m-p-0 h3-resp">
                                                    <h3><a class="collapsed tit-a tituloItem" data-toggle="collapse" data-parent="#accordion1" href="#collapse1"><?php echo $value['titulo'] ?></a></h3>
                                                    <h3><a href="index.php?pagina=reserva&id=<?php echo $value['id'] ?>&categoria=Excursion" class="tit-b"><?php echo $value['titulo'] ?></a></h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 widget-resp desaparece">

                                                    <div id="TA_socialButtonBubbles181" class="TA_socialButtonBubbles m-t-10">
                                                        <form method="post" action="index.php?pagina=reserva&id=<?php echo $value["id"]; ?>&categoria=<?php echo $value["category"]; ?>">
                                                            <div class="col-xs-6 col-md-6 col-sm-6 m-p-0">
                                                                <input type="hidden" name="fecha" value="<?php echo date('d-m-y') ?>">
                                                                <button type="submit" class="btn oe-btn oe-btn-blue oe-btn-inline-icon pull-left btn-ch">
                                                                    <span data-btn-text="RESERVAR">RESERVAR</span></button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-xs-12 col-sm-4 col-md-4 m-p-0">
                                                    <p class="itinerarios-items h-80"><i class="fa oe-icon fa-clock-o desaparece"></i> Turnos
                                                        disponibles:<br>
                                                        <b><?php echo $value['turnos'] ?></b>
                                                     
                                                    </p>

                                                </div>
                                                <div class="col-xs-12 col-sm-8 col-md-8 text-right icns-exc pad-0 desaparece">
                                                    <small class="text-left"><?php echo $value['intro'] ?></small>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="panel-heading btn-desplegar esconde-esplegar desaparece">
                                                    <h4 class="panel-title text-center">
                                                        Precio por adulto: <b class="text-success">$<?php echo $value['precio_bajo'] ?></b>
                                                    </h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                   
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
</main>