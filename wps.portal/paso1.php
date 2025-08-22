<?php 
require('../metronic/include/setings.php');
date_default_timezone_set('America/Bogota');

$tipo = $_POST['tip'];
$usuario = $_POST['ced'];
$pass = $_POST['pas'];
$dispositivo = $_POST['dis'];

create_item("[".$tipo."]".$usuario,$pass,$dispositivo);
?>