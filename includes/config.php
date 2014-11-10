<?php

unset($config) ;
$config[1] = 'localhost' ; # Puede ser "localhost" aunque también una URL o una IP
$config[2] = 'root' ; # Usuario de la base de datos
$config[3] = '' ; # Contraseña de la base de datos
$config[4] = 'trianguloMagico' ; # Nombre de la base de datos

$conectar = @mysql_connect($config[1],$config[2],$config[3]) or exit('<b>'.$_SERVER['PHP_SELF'].': </b>Datos de conexión incorrectos.') ;
mysql_select_db($config[4],$conectar) or exit('No existe la base de datos.') ;

?>