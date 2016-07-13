<?php

include_once '../../modelo/Modalidad.php';
include_once '../../modelo/Conexion.php';

$modalidad = new Modalidad();

$modalidad->setNombreModalidad($_POST['nombreModalidad']);
$modalidad->setIdModalidad($_POST['idModalidad']);

$modalidad->update();

$url = '../../vista/edicionModalidad.php?idModalidad=' . $_POST['idModalidad'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

