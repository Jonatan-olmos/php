<?php
//Operadores ternario (operador )? Operador:Operador 
/*
$promedio = 8;
$aprobo = ($promedio >= 7)?"Aprobaste":"Reprobaste";

echo $aprobo
*/

//operador elvis ?:

/*
$promedio = null;

$aprobo = ($promedio)?: 5;

echo $aprobo 
*/
//si la variable esta vacia rompe 

//Operador fusion null??

$promedio = null;

$aprobo = ($promedio)?? 5;

echo $aprobo
?>