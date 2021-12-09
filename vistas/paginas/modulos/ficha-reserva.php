<div class="contenedor-modulos-slider">
    <div class="mod-slider">
        <div class="modulo-itinerario m-t-20 buscador-home">
            <span class="oculto">
                <h6 class="m-t-0 h6-home"><img src="vistas/assets/img/icn-excursion-bco.png" alt="" />
                    Explore
                    El Calafate</h6>
                <p class="p-5 p-b-0">Reserve de forma rápida y sencilla.
                    Experimente las excursiones más emocionantes.</p>
            </span>
            <!-- <form class="col-444 p-5" method="POST" action="<?php echo $rutas; ?>itinerario-listado"> -->
            <form class="col-444 p-5" method="POST">
                <span class="oculto txt-labels f-s-12">Fecha de llegada:</span>
                <div class="box-inputs">
                    <input type="text" class="input-datepicker input-datepicker-col" id="datepickerEntrada"
                        autocomplete="off" name="fecha_ingreso" placeholder="Seleccione fecha de llegada" required><img
                        class="ui-datepicker-trigger oculto" src="vistas/images/icn-calendario.png" alt="" title="">
                </div>
                <span class="oculto txt-labels f-s-12">Fecha de partida:</span>
                <div class="box-inputs">
                    <input type="text" class="input-datepicker input-datepicker-col" id="datepickerSalida"
                        autocomplete="off" name="fecha_salida" placeholder="Seleccione fecha de partida" required><img
                        class="ui-datepicker-trigger oculto" src="vistas/images/icn-calendario.png" alt="" title="">
                </div>
                <div class="text-center m-t-20 m-b-20 m-p-0">
                    <!-- <button type="submit" class="btn oe-btn oe-btn-blue btn-home btn-home-calendario">
                        <span>VER EXCURSIONES</span>
                    </button> -->
                    <button type="button" onclick="noFunciona()" class="btn oe-btn oe-btn-blue btn-home btn-home-calendario">
                        <span>VER EXCURSIONES</span>
                    </button>
                </div>
            </form>

        </div>
        <div class="mod-tarjetas oculto">
            <img class="pull-left" src="vistas/images/uploads/tarjetas-home.png" alt="Pague con tarjetas" />
            <div class="pull-right">Pague en cuotas con cualquier tarjeta</div>
        </div>
    </div>

    <div class="marquesina">
        <div class="cartel">
            <div class="contenttop">
                <div>
                    <style scoped>
                    @media (min-width: 1035px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 1.2 !important;
                        }
                    }

                    @media (max-width: 1034px) and (min-width: 992px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 0.6 !important;
                        }
                    }

                    @media (max-width: 991px) and (min-width: 900px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 1.2 !important;
                        }
                    }

                    @media (max-width: 899px) and (min-width: 769px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 0.6 !important;
                            font-size: 24px !important;
                        }
                    }

                    @media (max-width: 768px) and (min-width: 768px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 1.2 !important;
                            font-size: 24px !important;
                        }
                    }

                    @media (max-width: 767px) and (min-width: 376px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 0.6 !important;
                            font-size: 24px !important;
                        }
                    }

                    @media (max-width: 375px) {
                        .marq_top {
                            vertical-align: top;
                            line-height: 2.8 !important;
                            font-size: 24px !important;
                        }
                    }
                    </style>
                    <span class="marq_top">Reserve</span>
                </div>
            </div>
            <div class="contenttitle">
                <div class="visibletitle">
                    <ul class="ultitle">
                        <li class="ullititle">excursiones</li>
                        <li class="ullititle">buses regulares</li>
                        <li class="ullititle">renta car</li>
                        <li class="ullititle">excursiones</li>
                    </ul>
                </div>
            </div>
            <div class="contentbtn">
                <div>
                    <style scoped>
                    @media (min-width: 641px) {
                        .marq_btn {
                            line-height: 1.5;
                            margin-top: -12px !important;
                        }
                    }

                    @media (max-width: 640px) {
                        .marq_btn {
                            line-height: 1.5;
                            margin-top: -12px !important;
                        }
                    }
                    </style>
                    <span class="marq_btn">al mejor precio en El Calafate</span>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
</div>
</div>