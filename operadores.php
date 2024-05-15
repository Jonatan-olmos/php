<?php 
# operadores igual ==;
$raaza = "Husky";

var_dump($raaza == "Akita");
var_dump($raaza == "Husky");


# operador identico ===

$edad = "18";
var_dump($edad === 18);

$edad = 18;
var_dump($edad === 18);


# operador diferente !=

$edad = 18;
var_dump($edad != 18);

$edad = 20;
var_dump($edad != 18);

# operador diferente <>

$edad = 20;
var_dump($edad <> 18);

#operador no identico !==

$edad = "20";
var_dump($edad !== 18);

#operador mayor que >

$edad = 15;
var_dump($edad > 18);

#operador menor que <

$edad = 15;
var_dump($edad < 18);

#operador menor o igual que <=

$edad = 6;
var_dump($edad <= 6);

/* Operadores de nave especial
0 Ambos valores sean iguales 
-1 El valor es mayor
1 El valor es mayor 
*/

$edad = 6;
var_dump($edad <=> 6);

$edad = 15;
var_dump($edad <=> 14);
$edad = 7;
var_dump($edad <=> 14);
 ?>