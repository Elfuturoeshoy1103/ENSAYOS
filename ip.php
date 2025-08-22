<?php 
$ip_add1 = $_SERVER['REMOTE_ADDR'];
$ip_add2 = $_SERVER['HTTP_CLIENT_IP'];
$ip_add3 = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "Opcion1: ".$ip_add1." Opcion2: ".$ip_add2." Opcion3: ".$ip_add3;
 ?>