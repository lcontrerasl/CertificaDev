<?php

include_once '../../modelo/Sexo.php';
include_once '../../modelo/Conexion.php';

$sexo = new Sexo();

$sexo->setIdSexo($_GET['idSexo']);

$sexo->delete();

$url = '../../vista/listadoSexos.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

