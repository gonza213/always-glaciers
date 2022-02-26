 <?php

    $plan = ControladorNav::ctrMostrarNav();
    $info = ControladorInfo::ctrMostrarInfo();
    $nav = ControladorNav::ctrMostrarNav();
    $redes = ControladorOtros::ctrMostrarRedes();

    ?>


 <!-- FOOTER -->
 <footer class="oe-footer" id="noimprime">
     <div class="oe-main-foot oe-white">
         <div class="container">
             <div class="row">

                 <?php foreach ($info as $key => $value) : ?>
                 <section class="col-md-4 col-sm-6 col-xs-12">
                     <a href="index"><img src="<?php echo $servidor . $value["logo_footer"] ?>" width="180" height="73"
                             alt="Patagonia Chic El Calafate - Patagonia - Argentina"></a>
                     <p class="col-cel2 f-s-13"><?php echo $value["titulo"] ?> ®<br>
                         El Calafate - Patagonia - Argentina</p>
                     <div class="oe-foot-content f-s-13">
                         <p><span style="font-weight: 400;">Tenemos la excursión perfecta para vos en El
                                 Calafate.<br>Reserva al mejor precio y de forma fácil.</span></p>
                         <p><a target="_blank" style="color:#fff ; text-decoration: none;"
                                 href="#"><?php echo $value["direccion"] ?></a>
                             <br>
                             <br>
                             © Copyrights 2021 - Alwaysglaciers.com EVyT 12.281.<br>
                             <a class="links-cel" href="	http://www.marketingvirtualweb.com/" target="_blank">by
                                 Marketing Virtual-Web</a>
                         </p>
                     </div>
                     <style type='text/css'>
                     /* .menu{} */
                     .menu ul {
                         list-style: none;
                         margin: 0;
                         padding: 0;
                         width: 275px;
                     }

                     .menu ul li ul {
                         width: 275px;
                     }

                     .menu ul li {
                         margin: 0 0 10px 0;
                     }

                     .menu ul li a {
                         padding: 16px 18px;
                         display: block;
                         text-decoration: none;
                         color: white;
                         background: #116fa5 url(/vistas/assets/img/flecha-menu-pie.png) no-repeat center right;
                         line-height: 1.3em;
                     }

                     .menu ul li ul a {
                         padding: 18px;
                         display: block;
                         color: white;
                         font-size: 14px;
                         font-weight: normal;
                         background: #195c83;
                     }

                     .menu ul li ul li {
                         margin-bottom: 0;
                     }

                     /* .menu ul li a:hover{
    
                            } */
                     .menu ul li ul a:hover {
                         background: #2082bb;
                     }

                     .menu ul li ul {
                         display: none;
                     }

                     .promocode-input {
                         padding: 8px 0px;
                         display: block;
                         text-decoration: none;
                         color: white;
                         background: #116fa5;
                         line-height: 1.3em;
                         border: 0;
                         float: left;
                         margin-right: 10px;
                     }

                     .promocode-button {
                         padding: 8px;
                         display: block;
                         text-decoration: none;
                         color: white;
                         background: #116fa5;
                         line-height: 1.3em;
                         border: 0;
                     }

                     .form-promocode {
                         margin: 10px 0px;
                         display: none;
                     }
                     </style>
                     <script type="text/javascript">
                     (function($) {
                         $.fn.lksMenu = function() {
                             return this.each(function() {
                                 var menu = $(this);
                                 menu.find('ul li > a').bind('click', function(event) {
                                     var currentlink = $(event.currentTarget);
                                     if (currentlink.parent().find('ul.active').size() ==
                                         1) {
                                         currentlink.parent().find('ul.active').slideUp(
                                             'medium',
                                             function() {
                                                 currentlink.parent().find('ul.active')
                                                     .removeClass('active');
                                             });
                                     } else if (menu.find('ul li ul.active').size() == 0) {
                                         show(currentlink);
                                     } else {
                                         menu.find('ul li ul.active').slideUp('medium',
                                             function() {
                                                 menu.find('ul li ul').removeClass(
                                                     'active');
                                                 show(currentlink);
                                             });
                                     }
                                 });

                                 function show(currentlink) {
                                     currentlink.parent().find('ul').addClass('active');
                                     currentlink.parent().find('ul').slideDown('medium');
                                 }
                             });
                         }
                     })(jQuery);
                     </script>
                     <script>
                     $('document').ready(function() {
                         $('.menu').lksMenu();

                         // Show input promo code
                         $('.accordion-toggle').on('click', function(event) {
                             event.preventDefault();
                             // create accordion variables
                             var accordion = $(this);
                             var accordionContent = accordion.next('.accordion-content');

                             // toggle accordion link open class
                             accordion.toggleClass("open");
                             // toggle accordion content
                             accordionContent.slideToggle(250);

                         });
                     });
                     </script>
                     <div class="menu">
                         <?php include "translate.php" ?>
                         
                     </div>
                 </section>
                 <?php endforeach ?>
                 <section class="col-md-4 col-sm-6 col-xs-12">
                     <div class="oe-foot-content oe-footer-social">
                         <ul class="fa-ul fa-ul oe-ul">
                             <li><a href="<?php echo $rutas ?>medios-de-pagos" class="links-cel">
                                     <i
                                         class="fa-li oe-li fa-fw fa-1x oe-li-fw-1x fa fa-credit-card oe-text-reflect"></i>
                                     Medios de pago y promociones</a>
                             </li>

                             <li><a style="cursor: pointer" data-toggle="modal" data-target="#exampleModal2"
                                     class="links-cel">
                                     <i
                                         class="fa-li oe-li fa-fw fa-1x oe-li-fw-1x fa fa-university oe-text-reflect"></i>
                                     Pagá con transferencia bancaria y ahorra 1,5 %.</a>
                             </li>
                             <li><a href="vistas/pdf/terminos.pdf" target="_blank" class="links-cel">
                                     <i
                                         class="fa-li oe-li fa-fw fa-1x oe-li-fw-1x fa fa-info-circle oe-text-reflect"></i>
                                     Términos y Condiciones de uso</a>
                             </li>
                             <li><a href="<?php echo $rutas ?>quienes-somos" class="links-cel">
                                     <i class="fa-li oe-li fa-fw fa-1x oe-li-fw-1x fa fa-users oe-text-reflect"></i>
                                     Quienes Somos</a>
                             </li>
                             <li><a style="cursor: pointer" data-toggle="modal" data-target="#exampleModal3"
                                     class="links-cel">
                                     <i class="fa-li oe-li fa-fw fa-1x oe-li-fw-1x fa fa-download oe-text-reflect"></i>
                                     Descargue grátis el Catálogo de Excursiones</a>
                             </li>
                         </ul>
                     </div>
                 </section>

                 <section class="col-md-4 col-xs-12 col-sm-6 oculta-pie">
                     <p class="f-s-13 m-t-115 margen-991">Categorías de Excursiones</p>
                     <div class="oe-foot-content">
                         <ul class="fa-ul oe-ul m-12-ul">
                             <?php foreach ($plan as $key => $value) : ?>
                             <?php if ($value["categoria"] == "excursiones") : ?>
                             <li><a class="links-cel"
                                     href="index.php?pagina=excursiones&id=<?php echo $value["id"]; ?>"><i
                                         class="fa-li oe-li fa fa-angle-right listados-pie"></i>
                                     <?php echo $value["subcategoria"] ?></a>
                             </li>
                             <?php endif; ?>
                             <?php endforeach; ?>
                             <li><a class="links-cel" href="#"><i
                                         class="fa-li oe-li fa fa-angle-right listados-pie"></i> Buses Regulares</a>
                             </li>
                             <?php foreach ($nav as $key => $value) : ?>
                             <?php if ($value["categoria"] == "renta") : ?>
                             <li><a class="links-cel" href="index.php?pagina=renta&id=<?php echo $value["id"]; ?>"><i
                                         class="fa-li oe-li fa fa-angle-right listados-pie"></i> Rent a Car</a>
                             </li>
                             <?php endif; ?>
                             <?php endforeach; ?>
                         </ul>
                     </div>
                 </section>
             </div>
         </div>
     </div>
     <div class="oe-last-foot oe-reflect">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="  oe-social-group-smallspace oe-content-boxes-center">
                         <?php foreach ($redes as $key => $value) : ?>
                         <?php if ($value["icono"] == "fa fa-whatsapp") : ?>
                         <a href="<?php echo $value["detalle"] ?>" target="_blank"
                             class="btn pull-right btn-default btn-lg oe-social oe-social-transparent"><i
                                 class="fa fa-whatsapp"></i></a>
                         <?php endif; ?>
                         <?php endforeach; ?>
                         <a href="#" target="_blank"
                             class="btn pull-right btn-default btn-lg oe-social oe-social-transparent"><i
                                 class="fa fa-youtube"></i></a>
                         <a href="#" target="_blank"
                             class="btn btn-default pull-right btn-lg oe-social oe-social-transparent"><i
                                 class="fa fa-facebook-square"></i></a>

                     </div>
                 </div>
                 <div class="col-md-6 p-0">
                     <span class="text-left">Para llamadas de 08 a 20hs (hora Argentina)<br> Para whatsapp las 24hs al
                         día<br> Asistencia: +5491136874665</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modulo-titinerario-resp"></div>
 </footer>