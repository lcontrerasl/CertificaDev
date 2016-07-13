<?php

include_once '../../modelo/Comuna.php';
include_once '../../modelo/Conexion.php';

$comuna = new Comuna();

$comuna->setNombreComuna($_POST['nombreComuna']);
$comuna->setIdComuna($_POST['idComuna']);

$comuna->update();

$url = '../../vista/edicionComuna.php?idComuna=' . $_POST['idComuna'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

