<?php

$frecuentes = ControladorFrecuentes::ctrFrecuentes();

?>


<!-- NAVEGADOR -->
<?php

include "modulos/cabecera.php";

?>

<main class="oe-blog oe-blog-width-sidebar" style="padding-top:0;background:#eee;">
    <div>
        <section class="container-fluid alto-gde">
            <div class="oe-banner-holder row alto-gde">
                <div class="oe-white alto-gde">
                    <div class="col-xs-12 oe-cleaner oe-slider-bg alto-gde"
                        style="background-image: url(vistas/assets/img/imagen-glaciar.jpg);">
                        <div class="dark-element alto-gde">
                        </div>
                        <div class="mod-buscador">
                            <h1>Estamos para ayudarte</h1>

                            <?php foreach ($info as $key => $value) :  ?>
                            <div class="datos-contacto">
                                <div class="g-recaptcha" data-sitekey="6LfI2EsUAAAAAN44esrz77c-yECRYF6yMDZBCBqf"
                                    style="margin-left: 25px;" data-badge="bottomright" data-callback='enviarFormulario'
                                    data-size="invisible"></div>
                                <span><i class="fa fa-envelope-o"></i> <a href="#"><span
                                            class="__cf_email__"><?php echo $value["email"] ?></span></a></span>
                                <span><i class="fa fa-mobile f-s-24"></i> <a
                                        href="#"><?php echo $value["telefono"] ?></a></span>
                                <span style="margin-right:0;" class="line-height"><i
                                        class="fa fa-map-marker f-s-18"></i> <span style="color:#fff"><a target="_blank"
                                            rel="noopener noreferrer"
                                            href="https://www.google.com/maps/place/PatagoniaChic+-+Excursiones+en+El+Calafate/@-50.3375733,-72.2621776,15z/data=!4m5!3m4!1s0x0:0xa258fe6a9049a636!8m2!3d-50.3375733!4d-72.2621776"
                                            style="color:#fff;text-decoration:none"><?php echo $value["direccion"] ?></a></span></span>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container p-18-15" style="padding-bottom:70px;">
            <div class="col-md-6 col-xs-12">
                <h2 class="oe-heading-2">Preguntas frecuentes</h2>
                <div class="panel-group panel-group-1" id="accordion1">
                    <?php foreach ($frecuentes as $key => $value) : ?>

                    <div class="panel panel-default" style="background:#fff;">
                        <div class="panel-heading" style="background:#fff;">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1"
                                    href="#pregunta<?php echo $value["id"] ?>" class="collapsed">

                                    <i class="panel-icon panel-icon-left panel-icon-plus"
                                        style="color:#484848;"></i><?php echo $value["pregunta"] ?></a>
                            </h4>
                        </div>
                        <div style="height: 0px;" id="pregunta<?php echo $value["id"] ?>"
                            class="panel-collapse collapse">

                            <div class="panel-body">
                                <p><?php echo $value["respuesta"] ?></p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>

                </div>

            </div>
            <form method="post">
                <div class="col-md-6 col-xs-12">
                    <h2 class="oe-heading-2">Escríbenos tus inquietudes</h2>

                    <div class="faqs-contacto">
                        <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto" style="padding:0;">
                            <input class="form-control input-lg required" name="nombre" placeholder="Nombre" type="text"
                                required>

                        </div>
                        <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto" style="padding:0;">
                            <input class="form-control input-lg required" name="email" placeholder="Email" type="text"
                                required>

                        </div>
                        <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto" style="padding:0;">
                            <input class="form-control input-lg required" name="telefono" placeholder="Teléfono"
                                type="text" required>

                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-12 cel3" style="padding:0;">
                            Consulta <textarea class="form-control textarea-contacto" name="mensaje" rows="7"
                                required></textarea>

                        </div>
                    </div>
                    <button class="btn oe-btn oe-btn-reflect-icon m-btn-contacto" type="submit"
                        style="background-color:#fff;margin-left:0;"><span>ENVIAR</span> <i
                            class="fa fa-arrow-right"></i></button>
                </div>
                <?php
                $enviar = new ControladorContacto();
                $enviar->ctrEnviarMensaje();
                ?>
            </form>


        </div>

    </div>

</main>