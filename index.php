<?php

require_once "controllers/plantilla.controllers.php";
require_once "controllers/rutas.controllers.php";
require_once "controllers/banner.controllers.php";
require_once "controllers/planes.controllers.php";
require_once "controllers/nav.controllers.php";
require_once "controllers/relacion.controllers.php";
require_once "controllers/info.controllers.php";
require_once "controllers/relacion_2.controllers.php";
require_once "controllers/galeria.controllers.php";
require_once "controllers/contacto.controllers.php";
require_once "controllers/frecuentes.controllers.php";
require_once "controllers/recorrido.controllers.php";
require_once "controllers/reservas.controllers.php";
require_once "controllers/moneda.controllers.php";
require_once "controllers/opcionales.controllers.php";
require_once "controllers/otros.controllers.php";
require_once "controllers/turnos.controller.php";
require_once "controllers/transferencia.controller.php";
require_once "controllers/carrito.controllers.php";


require_once "models/banner.models.php";
require_once "models/planes.models.php";
require_once "models/nav.models.php";
require_once "models/relacion.models.php";
require_once "models/info.models.php";
require_once "models/relacion_2.models.php";
require_once "models/galeria.models.php";
require_once "models/contacto.models.php";
require_once "models/frecuentes.models.php";
require_once "models/recorrido.models.php";
require_once "models/reservas.models.php";
require_once "models/moneda.models.php";
require_once "models/opcionales.models.php";
require_once "models/otros.models.php";
require_once "models/turnos.models.php";
require_once "models/trasnferencia.models.php";
require_once "models/carrito.models.php";

require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();