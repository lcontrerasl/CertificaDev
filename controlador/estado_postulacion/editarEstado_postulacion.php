<?php

include_once '../../modelo/Estado_postulacion.php';
include_once '../../modelo/Conexion.php';

$estado_postulacion = new Estado_postulacion();

$estado_postulacion->setNombreEstado_postulacion($_POST['nombreEstado_postulacion']);
$estado_postulacion->setIdEstado_postulacion($_POST['idEstado_postulacion']);

$estado_postulacion->update();

$url = '../../vista/edicionEstado_postulacion.php?idEstado_postulacion=' . $_POST['idEstado_postulacion'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

