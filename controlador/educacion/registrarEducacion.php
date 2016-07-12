<?php

include_once '../../modelo/Educacion.php';
include_once '../../modelo/Conexion.php';

$educacion = new Educacion();

$educacion->setNombreEducacion($_POST['nombreEducacion']);

$educacion->create();

$url = '../../vista/listadoEducaciones.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

