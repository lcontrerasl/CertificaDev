<?php

include_once '../../modelo/Postulante.php';
include_once '../../modelo/Conexion.php';

$postulante = new Postulante();

$postulante->setIdPostulante($_GET['idPostulante']);

$postulante->delete();

$url = '../../vista/listadoPostulantes.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

