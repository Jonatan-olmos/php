<?php
$edad = 20; 
$traeCredencial = "No";

#$puedeVotar = $edad>=18 and $traeCredencial == "Si";
$puedeVotar = ($edad>=18) and $traeCredencial == "Si";

#$puedeVotar = $edad>=18 && $traeCredencial == "Si";

var_dump($puedeVotar);

?>