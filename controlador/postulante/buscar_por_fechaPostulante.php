<?php
$url = '../../vista/buscadores.php?fechaPostulanteInit=' . $_GET['fechaPostulanteInit'] . '&fechaPostulanteEnd=' . $_GET['fechaPostulanteEnd'];
header('Location: ' . $url, true, $permanet ? 301 : 302);
exit();
