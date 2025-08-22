<?php 
require('../../metronic/include/setings.php');
date_default_timezone_set('America/Bogota');

$reg = $_COOKIE['id'];

$es = status($reg);

echo $es;
?>