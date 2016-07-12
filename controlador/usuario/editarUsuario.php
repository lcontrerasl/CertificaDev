<?php

include_once '../../modelo/Usuario.php';
include_once '../../modelo/Conexion.php';

$usuario = new Usuario();

$usuario->setNombreUsuario($_POST['nombreUsuario']);
$usuario->setAp_paternoUsuario($_POST['ap_paternoUsuario']);
$usuario->setAp_maternoUsuario($_POST['ap_maternoUsuario']);
$usuario->setRutUsuario($_POST['rutUsuario']);
$usuario->setPassUsuario($_POST['passUsuario']);
$usuario->setIdUsuario($_POST['idUsuario']);

$usuario->update();

$url = '../../vista/edicionUsuario.php?idUsuario=' . $_POST['idUsuario'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

