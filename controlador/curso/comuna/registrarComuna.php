<?php

include_once '../../modelo/Comuna.php';
include_once '../../modelo/Conexion.php';

$comuna = new Comuna();

$comuna->setNombreComuna($_POST['nombreComuna']);

$comuna->create();

$url = '../../vista/listadoComunas.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

