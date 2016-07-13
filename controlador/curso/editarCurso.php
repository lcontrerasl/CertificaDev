<?php

include_once '../../modelo/Curso.php';
include_once '../../modelo/Conexion.php';

$curso = new Curso();

$curso->setNombreCurso($_POST['nombreCurso']);
$curso->setIdCurso($_POST['idCurso']);

$curso->update();

$url = '../../vista/edicionCurso.php?idCurso=' . $_POST['idCurso'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

