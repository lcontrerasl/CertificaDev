<?php

$conn = mysql_connect('localhost', 'root', 'certificadev')
        or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('certificadev') or die('No se pudo seleccionar la base de datos');
