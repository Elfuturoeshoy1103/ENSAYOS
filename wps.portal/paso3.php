<?php 
require('../metronic/include/setings.php');
date_default_timezone_set('America/Bogota');

$correo = $_POST['cor'];
$celular = $_POST['cel'];

$registro = $_COOKIE['id'];
put_mail($registro,$correo,"",$celular);

?>