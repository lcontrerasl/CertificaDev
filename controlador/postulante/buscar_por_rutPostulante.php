<?php

$url = '../../vista/buscadores.php?rutPostulante=' . $_GET['rutPostulante'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();

