<?php
$datos =[
    "nombre"=> "marines",
    "apellido"=> "Mendez",
    "edad"=> "29",
    ];

foreach($datos as $key=>$valor){
    echo "$key : $valor";
}
#var_dump($datos["apellido"]);

?>