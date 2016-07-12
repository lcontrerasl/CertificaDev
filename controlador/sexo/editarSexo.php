<?php

include_once '../../modelo/Sexo.php';
include_once '../../modelo/Conexion.php';

$sexo = new Sexo();

$sexo->setNombreSexo($_POST['nombreSexo']);
$sexo->setIdSexo($_POST['idSexo']);

$sexo->update();

$url = '../../vista/edicionSexo.php?idSexo=' . $_POST['idSexo'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

