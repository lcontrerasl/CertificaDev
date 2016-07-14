<?php

include_once '../../modelo/Estado_postulacion.php';
include_once '../../modelo/Conexion.php';

$estado_postulacion = new Estado_postulacion();

$estado_postulacion->setNombreEstado_postulacion($_POST['nombreEstado_postulacion']);

$estado_postulacion->create();

$url = '../../vista/listadoEstado_postulaciones.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

