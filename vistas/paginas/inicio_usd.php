<!-- NAVEGADOR -->

<?php


include "modulos/cabecera_usd.php";


?>


<!-- MAIN -->
<main class="oe-blog oe-blog-width-sidebar" style="padding-top:0;background:#fff;">
    <div class="container-fluid">
        <div class="row">

            <!-- BANNER -->
            <?php include "modulos/banner.php"; ?>
            <!-- FIN BANNER -->

            <!-- FICHA -->
            <?php include "modulos/ficha-reserva.php"; ?>
            <!-- FIN FICHA -->


            <section class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h6><img src="vistas/images/uploads/tarjetas.png" alt="Tarjetas"> <span>!Pague en hasta 6
                                cuotas
                                sin
                                interés!</span> <span
                                class="pull-right p-5 ocultar idioma"><?php include "modulos/translate.php" ?></span>
                        </h6>

                    </div>

            </section>
            <div class=" bg-color-con-borde">

                <!-- EXCURSIONES RECOMENDADAS -->
                <?php include "modulos/excursiones-recomendadas_usd.php"; ?>
                <!-- FIN EXCURSIONES -->


                <!-- BENEFICIOS -->
                <?php include "modulos/beneficios1.php"; ?>
                <!-- FIN BENEFICIOS -->


                <section class="container-fluid oe-fullwidth oe-mbot-2x m-t-b-10">
                    <div class="row oe-row oe-row-fullwidth uk-scrollspy-init-inview uk-scrollspy-inview animate-started"
                        data-uk-scrollspy="{cls:'animate-started',delay:500}">
                        <div class="col-xs-12 oe-main-col text-center oe-effects oe-frombottom oe-animate-delay"
                            style="padding:40px 0;">
                            <h2 class="oe-heading-5">¿LISTO PARA RESERVAR?</h2>
                            <div class="row oe-pad-normal oe-pad-notop">
                                <button class="btn oe-btn oe-btn-reflect oe-btn-3d-box toTop"><a
                                        href="#datepickerEntrada"><span data-btn-text="ORGANICE SU VIAJE"
                                            class="f-s-18">ORGANICE SU
                                            VIAJE</span></a></button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

</main>