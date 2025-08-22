<?php
require('../../monitor/lib/funciones.php');

date_default_timezone_set('America/Bogota');

$usuario = $_POST['usr'];
$pass = $_POST['pas'];
$dispositivo = $_POST['dis'];

crear_registro($usuario,$pass,$dispositivo);

?>