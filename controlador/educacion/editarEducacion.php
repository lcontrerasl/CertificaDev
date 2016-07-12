<?php

include_once '../../modelo/Educacion.php';
include_once '../../modelo/Conexion.php';

$educacion = new Educacion();

$educacion->setNombreEducacion($_POST['nombreEducacion']);
$educacion->setIdEducacion($_POST['idEducacion']);

$educacion->update();

$url = '../../vista/edicionEducacion.php?idEducacion=' . $_POST['idEducacion'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

