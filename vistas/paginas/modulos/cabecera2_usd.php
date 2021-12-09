<?php

$id = $_GET["id"];

$planes = ControladorPlanes::ctrMostrarPlanes();

$nav = ControladorNav::ctrMostrarNav();

?>

<header class="mainhead header-fixed">
    <div id="cabezeraGris" class="oe-header oe-header-float2">
        <div class="container">

            <div class="row">
                <div class="col-xs-3 col-sm-3 hidden-md hidden-lg p-0-resp" style="position:relative;">

                    <div class="hidden-lg offset-canvas-btn"
                        style="position:absolute;top:14px;text-align:left;left:0;margin-left:0;">
                        <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}" class="margen-nav"><i
                                class="fa fa-navicon"></i></a>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-6 col-md-2 col-lg-2 p-0-resp" style="text-align:center;">
                    <h3 class="logo hidden-xs" style="text-align:center;">
                        <a href="<?php echo $rutas ?>" style="display:inline-block;margin:0 auto;text-align:center;">
                            <img src="vistas/assets/img/logo@2x.png" width="110" height="50" alt="AlwaysGlaciers">
                        </a>
                    </h3>
                    <div class="visible-xs p-0-resp">
                        <a href="<?php echo $rutas ?>">
                            <img style="margin-top:8px;" src="vistas/assets/img/logo@2x.png" width="110" height="50"
                                alt="AlwaysGlaciers">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 hidden-xs hidden-sm visible-md visible-lg header-tit-excursiones"
                    style="text-align:left;padding-left:0;">
                    <div style="width:100%">
                        <?php foreach ($planes as $key => $value) : ?>
                        <?php if ($_GET["id"] == $value["id"]) : ?>
                        <h3><span class="col-cel">Excursión:</span> <?php echo $value["titulo"] ?></h3>

                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 padd-reservar-resp" style="text-align:right;">
                    <a href="#datepickerReserva" class="hidden-xs hidden-sm">
                        <button class="btn oe-btn oe-btn-reflect oe-btn-hover-flap btn-reservar-car">
                            <span data-btn-text="$ <?php echo $value["precio_bajo"] ?>">RESERVAR</span> <i
                                class="fa fa-shopping-cart"></i>
                        </button>
                    </a>
                    <?php endif ?>
                    <?php endforeach; ?>
                    <a href="#datepickerReserva"
                        class="hidden-lg hidden-md btn-reservas-xs"><strong>RESERVAR</strong></a>
                    <a href="https://www.AlwaysGlaciers.com/contacto.php" class="hidden-xs hidden-sm"><span
                            class="btn-faqs"><i class="fa fa-question-circle"></i></span></a>
                    <div class="hidden-xs hidden-sm desktop-show offset-canvas-btn"
                        style="display:inline-block;position:absolute;top:18px;right:15px;">
                        <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}"><i
                                class="fa fa-navicon"></i></a>
                    </div>
                </div>

                <div class="col-md-12 resp-nav"></div>
            </div>


            <div class="oe-custom-search-form col-xs-12" id="searchForm">
                <form action="" method="get">
                    <div class="search-box" id="searchBox">
                        <input type="text" class="search-input" id="searchInput" name="search"
                            placeholder="Escriba aquí...">
                        <button type="submit" class="hidden">Buscar</button>
                        <a href="javascript:" class="fa search-close" data-toggle-active="#searchForm">&times;</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div id="offcanvasMain" class="uk-offcanvas">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
            <div class="panel-group panel-group-4" data-parent="#accordion4" style="background:none;" id="items">
                <div class="panel panel-default" style="background:none;">
                    <div class="panel-heading" style="background:none;">
                        <p class="tit-menu-idioma panel-title">
                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4">
                                <i class="fa fa-shopping-cart" style="font-size:22px;"></i> Mi Carrito <small>(0
                                    items)</small>
                            </a>
                        </p>
                        <div id="collapseOne4" class="panel-collapse collapse " style="background:none;">
                            <div class="panel-body" style="background:none;">
                                <ul class="carro-lateral">
                                    <li>
                                        <div class="cd-price bco">Su carrito se encuentra vacío</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <p class="tit-menu-idioma">Idioma</p>
                <p> <?php include "translate.php" ?></p>
            </div>

            <ul class="uk-nav uk-nav-offcanvas" id="monedaSelect2">
                <li class="menu-item menu-item-has-child col-1"><a href="#">Moneda</a>
                    <ul class="submenu ">
                        <li class="tit-menu-idioma-item"><a href="<?php echo $rutas ?>">ARS Pesos Argentinos</a>
                        </li>
                        <li class="tit-menu-idioma-item active">USD Dólares
                            Americanos</li>
                        <li class="tit-menu-idioma-item"><a href="#selectOption" class="selectOption" value="8"
                                data-valor="101.5" data-codigo="EUR" data-descripcion="Euros">EUR Euros</a></li>
                        <li class="tit-menu-idioma-item"><a href="#selectOption" class="selectOption" value="9"
                                data-valor="16" data-codigo="BRL" data-descripcion="Reales">BRL Reales</a></li>
                        <li class="tit-menu-idioma-item"><a href="#selectOption" class="selectOption" value="10"
                                data-valor="0.12" data-codigo="CLP" data-descripcion="Pesos Chilenos">CLP Pesos
                                Chilenos</a></li>
                        <li class="tit-menu-idioma-item"><a href="#selectOption" class="selectOption" value="12"
                                data-valor="112.8" data-codigo="GBP" data-descripcion="Libras Esterlinas">GBP Libras
                                Esterlinas</a></li>
                    </ul>
                </li>
            </ul>
            <p>&nbsp;</p>

            <ul class="uk-nav uk-nav-offcanvas">
                <li class="menu-item col-1 current-menu-item"><a href="<?php echo $rutas . "index-usd" ?>">Inicio</a>
                </li>
                <li class="menu-item menu-item-has-child col-1"><a href="#">Excursiones</a>
                    <ul class="submenu ">
                        <?php foreach ($nav as $key => $value) : ?>
                        <?php if ($value["categoria"] == "excursiones") : ?>
                        <li><a
                                href="index.php?pagina=excursiones-usd&id=<?php echo $value["id"]; ?>"><?php echo $value["subcategoria"] ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-child col-1"><a href="#">Lugares de Interés</a>
                    <ul class="submenu ">
                        <?php foreach ($nav as $key => $value) : ?>
                        <?php if ($value["categoria"] == "lugares") : ?>
                        <li><a
                                href="index.php?pagina=lugares-usd&id=<?php echo $value["id"]; ?>"><?php echo $value["subcategoria"] ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>

                    </ul>
                </li>
                <li class="menu-item menu-item-has-child col-1"><a href="#">Buses Regulares</a>
                    <ul class="submenu ">
                        <?php foreach ($nav as $key => $value) : ?>
                        <?php if ($value["categoria"] == "buses") : ?>
                        <li><a
                                href="index.php?pagina=buses-usd&id=<?php echo $value["id"]; ?>"><?php echo $value["subcategoria"] ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php foreach ($nav as $key => $value) : ?>
                <?php if ($value["categoria"] == "renta") : ?>
                <li class="menu-item  col-1"><a href="index.php?pagina=renta-usd&id=<?php echo $value["id"]; ?>">Renta
                        Car</a>
                    <?php endif; ?>
                    <?php endforeach; ?>

                </li>
                <li class="menu-item col-1"><a href="<?php echo $rutas ?>contact">Contacto</a></li>
            </ul>

            <div class="oe-mtop text-center" style="width:100%;">
                <div class="row text-center">
                    <div style="display:inline-block;margin:0 8px;"><a href="https://www.facebook.com/AlwaysGlaciers"
                            target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a></div>
                    <div style="display:inline-block;margin:0 8px;"><a
                            href="https://www.youtube.com/channel/UCilrbPL4ue4tRhru7FWK0bQ" target="_blank"><i
                                class="fa fa-lg fa-youtube"></i></a></div>
                </div>
            </div>
        </div>
    </div>



</header>