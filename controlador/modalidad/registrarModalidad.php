<?php

include_once '../../modelo/Modalidad.php';
include_once '../../modelo/Conexion.php';

$modalidad = new Modalidad();

$modalidad->setNombreModalidad($_POST['nombreModalidad']);

$modalidad->create();

$url = '../../vista/listadoModalidades.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

