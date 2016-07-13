<?php

session_start();

include_once '../../modelo/Conexion.php';
include_once '../../modelo/Usuario.php';

$usuario = new Usuario();
$usuarios = $usuario->read('*', '', 'AND rutUsuario = \'' . $_POST['rutUsuario'] . '\' AND passUsuario = \'' . $_POST['passUsuario'] . '\'');
$usuario = $usuarios[0];

$_SESSION['usuarioConectado'] = $usuario;

if (count($usuarios) > 0) {
    $url = '../../vista/';
    header('Location: ' . $url, true, $permanet ? 301 : 302);
    exit();
} else {
    $url = '../../';
    header('Location: ' . $url, true, $permanet ? 301 : 302);
    exit();
}

