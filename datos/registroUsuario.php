<?php

$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('CertificaDev', $conexion);
$sql = 'INSERT INTO usuario(nombreUsuario, ap_paternoUsuario, ap_maternoUsuario, rutUsuario, passwordUsuario) VALUE(\'' . $_POST['nombreUsuario'] . '\',\'' . $_POST['ap_paternoUsuario'] . '\',\'' . $_POST['ap_maternoUsuario'] . '\',\''. $_POST['rutUsuario'] . '\',\'' . $_POST['passwordUsuario'] . '\')';
mysql_query($sql);
header('Location: http://localhost/CertificaDev/Datos/listadoUsuarios.php');
die();

