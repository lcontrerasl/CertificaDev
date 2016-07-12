<?php

include_once '../../modelo/Sexo.php';
include_once '../../modelo/Conexion.php';

$sexo = new Sexo();

$sexo->setNombreSexo($_POST['nombreSexo']);

$sexo->create();

$url = '../../vista/listadoSexos.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

