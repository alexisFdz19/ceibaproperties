<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/categorias.controlador.php";

require_once "models/rutas.php";
require_once "models/categorias.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();