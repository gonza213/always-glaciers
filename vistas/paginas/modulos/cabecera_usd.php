<?php

$nav = ControladorNav::ctrMostrarNav();
$info = ControladorInfo::ctrMostrarInfo();

?>

<header class="mainhead header-fixed">
    <div class="oe-header oe-header-float2">
        <div class="container">

            <div class="row">
                <div class="hidden-xs hidden-sm visible-md visible-lg">

                    <div class="col-xs-12 col-md-3 header-main">
                        <h3 class="logo hidden-xs"><a href="<?php echo $rutas ?>">
                                <?php foreach ($info as $key => $value) : ?>
                                <img src="<?php echo $servidor . $value["logo"] ?>" width="110" height="50"
                                    alt="PatagoniaChic">
                                <?php endforeach; ?>
                            </a>
                        </h3>
                        <div class="logo-mobile visible-xs"> <a href="<?php echo $rutas ?>">
                                <?php foreach ($info as $key => $value) : ?>
                                <img src="<?php echo $servidor . $value["logo_footer"] ?>" width="118" height="55"
                                    alt="PatagoniaChic">
                                <?php endforeach; ?>
                            </a></div>
                        <div class="hidden-lg hidden-md resp-header esconde-nav"><a href="javascript:" class="navbtn"><i
                                    class="fa fa-navicon"></i></a></div>

                        <div class="hidden-lg hidden-md hidden-sm offset-canvas-btn"
                            style="position:absolute; top:14px;left:20px;">
                            <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}"><i
                                    class="fa fa-navicon"></i></a>
                        </div>
                    </div>
                    <div class="oe-header-extra clearfix">
                        <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}" id="cd-cart-trigger">
                            <i class="fa fa-shopping-cart" style="font-size:20px;width:10px;margin:5px 0 0 0;"></i>
                            <sup class="label-shopcart label-danger"
                                style="border-radius:50%; -moz-border-radius:50%;-webkit-border-radius:50%;padding:2px 7px;top:2px; display:none;"
                                id="cart_items">0</sup> </a>

                        <div class="hidden-xs desktop-show offset-canvas-btn"
                            style="position: absolute;top: 0px;padding: 0 15px;"><a href="javascript:"
                                data-uk-offcanvas="{target:'#offcanvasMain'}"><i class="fa fa-navicon"></i></a>
                        </div>
                    </div>

                    <div class="visible-md visible-lg col-md-9 menu-header">

                        <nav class="oe-mainmenu">
                            <ul class="oe-menu-dad">

                                <li class="menu-item menu-item-has-child col-1 current-menu-item"><a
                                        href="<?php echo $rutas . "index-usd" ?>">Inicio</a></li>
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
                                <li class="menu-item menu-item-has-child col-1"><a
                                        href="index.php?pagina=renta-usd&id=<?php echo $value["id"]; ?>">Renta Car</a>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </li>
                                <li class="menu-item menu-item-has-child col-1"><a
                                        href="<?php echo $rutas ?>contact">Contacto</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-md-12 resp-nav">

                        <nav class="oe-mobile-menu">
                            <ul class="oe-menu-dad">
                                <li class="menu-item current-menu-item"><a href="index-usd">Inicio</a></li>
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
                                <li class="menu-item menu-item-has-child col-1"><a
                                        href="index.php?pagina=renta-usd&id=<?php echo $value["id"]; ?>">Renta Car</a>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                <li class="menu-item menu-item-has-child col-1"><a
                                        href="<?php echo $rutas ?>contact">Contacto</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="hidden-md hidden-lg visible-xs visible-sm">
                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg p-0-resp">

                        <div class="hidden-lg offset-canvas-btn" style="position:absolute; top:14px;text-align:left;">
                            <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}"><i
                                    class="fa fa-navicon"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-2 col-lg-2 p-0-resp" style="text-align:center;">
                        <div class="visible-xs p-0-resp">
                            <a href="<?php echo $rutas ?>">
                                <?php foreach ($info as $key => $value) : ?>
                                <img src="<?php echo $servidor . $value["logo"] ?>" width="118" height="55"
                                    alt="PatagoniaChic">
                                <?php endforeach; ?>
                            </a>
                        </div>
                        <div class="display-1024 p-0-resp">
                            <a href="<?php echo $rutas ?>"><img src="vistas/assets/img/logo@2x.png" width="118"
                                    height="55" alt="PatagoniaChic"></a>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-3 col-lg-2 clearfix" style="overflow:hidden;text-align:right;">
                        <a href="javascript:" data-uk-offcanvas="{target:'#offcanvasMain'}" id="cd-cart-trigger"
                            class="m-carro">
                            <i class="fa fa-shopping-cart" style="font-size:20px;width:10px;margin:20px 0 0 0;"></i>
                            <sup class="label-shopcart label-danger"
                                style="border-radius:50%; -moz-border-radius:50%;-webkit-border-radius:50%;padding:2px 7px; display:none;"
                                id="cart_items">0</sup> </a>
                    </div>
                </div>
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

            <div class="" id="idiomaSelect2">
                <p class="tit-menu-idioma">Idioma</p>
                <p>
                <p><?php include "translate.php" ?></p>
                </p>

            </div>
            <ul class="uk-nav uk-nav-offcanvas" id="monedaSelect2">
                <li class="menu-item menu-item-has-child col-1"><a href="#">Moneda</a>
                    <ul class="submenu ">
                        <li class="tit-menu-idioma-item"><a href="<?php echo $rutas ?>" class="selectOption">ARS Pesos
                                Argentinos</a>
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
                <li class="menu-item col-1 current-menu-item"><a href="index">Inicio</a></li>
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

                <li class="menu-item col-1"><a href="<?php echo $rutas ?>contact">Contacto</a></li>
            </ul>

            <div class="oe-mtop text-center" style="width:100%;">
                <div class="row text-center">
                    <div style="display:inline-block;margin:0 8px;"><a href="#" target="_blank"><i
                                class="fa fa-lg fa-facebook-square"></i></a></div>
                    <div style="display:inline-block;margin:0 8px;"><a href="#" target="_blank"><i
                                class="fa fa-lg fa-youtube"></i></a></div>
                </div>
            </div>
        </div>
    </div>

</header>