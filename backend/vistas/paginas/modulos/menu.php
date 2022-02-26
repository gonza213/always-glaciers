<?php

$info = ControladorInfo::ctrMostrarInfo();

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 610px;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <?php foreach ($info as $key => $value) : ?>
        <img src="<?php echo $value["logo"] ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $value["titulo"] ?></span>
        <?php endforeach ?>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $_SESSION["imagen"] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION["usuario"] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="inicio" class="nav-link">
                        <i class="nav-icon fa fa-globe"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="info" class="nav-link">
                        <i class="nav-icon fa fa-info" aria-hidden="true"></i>
                        <p>
                            Info
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="administrador" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Administradores
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="banner" class="nav-link">
                        <i class="nav-icon fa fa-picture-o" aria-hidden="true"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="subcategorias" class="nav-link">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>
                            Subcategorías
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="excursiones" class="nav-link">
                        <i class="nav-icon fa fa-heart-o" aria-hidden="true"></i>
                        <p>
                            Excursiones
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-usd" aria-hidden="true"></i>
                        <p>
                            Ventas
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="transferencia" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Transferencia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mercado-pago" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Mercado Pago</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="paypal" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Paypal</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-sitemap" aria-hidden="true"></i>
                        <p>
                            Relacionar excursiones
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="relacion-excursiones" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Excursiones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="relacion-lugares" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Lugares de Intéres</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="relacion-buses" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Buses Regulares</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="relacion-rentas" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Renta Car</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="galeria" class="nav-link">
                        <i class="nav-icon fa fa-picture-o" aria-hidden="true"></i>
                        <p>
                            Galeria de excursiones
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="recorridos" class="nav-link">
                        <i class="nav-icon fa fa-child aria-hidden=" true"></i>
                        <p>
                            Recorridos de excursiones
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="contacto" class="nav-link">
                        <i class="nav-icon fa fa-envelope-square" aria-hidden="true"></i>
                        <p>
                            Contactos
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="frecuentes" class="nav-link">
                        <i class="nav-icon fa fa-question-circle" aria-hidden="true"></i>
                        <p>
                            Preguntas frecuentes
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="opcionales" class="nav-link">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>
                            Opcionales
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="relacion-opcional" class="nav-link">
                        <i class="nav-icon fa fa-sitemap" aria-hidden="true"></i>
                        <p>
                            Relación Opcional
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit" aria-hidden="true"></i>
                        <p>
                             Actualizar items
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="precios" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Precios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="turnos" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Turnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="trip" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>tripAdvisor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dias-reservados" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Dias reservados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="divisas" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Divisas</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="otros" class="nav-link">
                        <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                        <p>
                            Más opciones
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>