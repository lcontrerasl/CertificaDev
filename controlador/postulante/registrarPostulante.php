<?php

include_once '../../modelo/Postulante.php';
include_once '../../modelo/Conexion.php';

$postulante = new Postulante();
$postulante->setNombrePostulante($_POST['nombrePostulante']);
$postulante->setAp_paternoPostulante($_POST['ap_paternoPostulante']);
$postulante->setAp_maternoPostulante($_POST['ap_maternoPostulante']);
$postulante->setRutPostulante($_POST['rutPostulante']);
$postulante->setMailPostulante($_POST['mailPostulante']);
$postulante->setFonoPostulante($_POST['fonoPostulante']);
$postulante->setDireccionPostulante($_POST['direccionPostulante']);
$postulante->setExperienciaPostulante($_POST['experienciaPostulante']);
$postulante->setFechaNacPostulante($_POST['fechaNacPostulante']);
$postulante->setSexo_idSexo($_POST['sexo_idSexo']);
$postulante->setCurso_idCurso($_POST['curso_idCurso']);
$postulante->setComuna_idComuna($_POST['comuna_idComuna']);
$postulante->setModalidad_idModalidad($_POST['modalidad_idModalidad']);
$postulante->setEducacion_idEducacion($_POST['educacion_idEducacion']);
$postulante->setEstado_postulacion_idEstado_postulacion(1);



$postulante->create();

$url = '../../';
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

