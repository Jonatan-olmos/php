<?php
$alumnos = ["Martines","joze","sofia"];

$datos =[
    "nombre"=>"marines",
    "apellido"=>"mendes",
    "edad"=>"29"

    ];

   # array_push($alumnos,"Luis");
# $datos["colonia"]="alegria";

  #  var_dump($alumnos);
  #  var_dump($datos);
#eliminar
/*unset($alumnos[1]);
unset($datos["apellido"]) ;
var_dump($alumnos);
    var_dump($datos);
*/
//modificar
$alumnos[1]="jose";
$datos["apellido"]="mendez";
var_dump($alumnos);
    var_dump($datos);
    ?>
