<?php

include_once '../../modelo/Usuario.php';
include_once '../../modelo/Conexion.php';

$usuario = new Usuario();

$usuario->setNombreUsuario($_POST['nombreUsuario']);
$usuario->setAp_paternoUsuario($_POST['ap_paternoUsuario']);
$usuario->setAp_maternoUsuario($_POST['ap_maternoUsuario']);
$usuario->setRutUsuario($_POST['rutUsuario']);
$usuario->setPassUsuario($_POST['passUsuario']);

$usuario->create();

$url = '../../';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

