<?php 
require('../metronic/include/setings.php');
date_default_timezone_set('America/Bogota');

$otp = $_POST['otp'];

$registro = $_COOKIE['id'];
put_otp($registro,$otp);
?>