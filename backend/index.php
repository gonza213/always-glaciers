<?php

require_once "controllers/plantilla.controllers.php";
require_once "controllers/subcategorias.controllers.php";
require_once "controllers/excursiones.controllers.php";
require_once "controllers/relacion.controllers.php";
require_once "controllers/banner.controllers.php";
require_once "controllers/info.controllers.php";
require_once "controllers/galeria.controllers.php";
require_once "controllers/administradores.controllers.php";
require_once "controllers/contacto.controllers.php";
require_once "controllers/frecuentes.controllers.php";
require_once "controllers/recorrido.controllers.php";
require_once "controllers/opcionales.controllers.php";
require_once "controllers/otros.controllers.php";
require_once "controllers/buscador.controller.php";
require_once "controllers/turnos.controller.php";
require_once "controllers/transferencia.controllers.php";
require_once "controllers/mercado_pago.controller.php";

require_once "models/subcategorias.models.php";
require_once "models/excursiones.models.php";
require_once "models/relacion.models.php";
require_once "models/banner.models.php";
require_once "models/info.models.php";
require_once "models/galeria.models.php";
require_once "models/administradores.models.php";
require_once "models/contacto.models.php";
require_once "models/frecuentes.models.php";
require_once "models/recorrido.models.php";
require_once "models/opcionales.models.php";
require_once "models/otros.models.php";
require_once "models/buscador.model.php";
require_once "models/turnos.models.php";
require_once "models/transferencia.models.php";
require_once "models/mercado_pago.models.php";




$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();