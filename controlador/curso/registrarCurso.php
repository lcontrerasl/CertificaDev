<?php

include_once '../../modelo/Curso.php';
include_once '../../modelo/Conexion.php';

$curso = new Curso();

$curso->setNombreCurso($_POST['nombreCurso']);

$curso->create();

$url = '../../vista/listadoCursos.php';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

