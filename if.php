<?php
//if else

$promedio = 10;

$tieneFaltas = "Si";

#echo ($promedio >= 7 && $tieneFaltas == "No" )? "Aprobaste la materia " : "Reporbaste la materia ";

if($promedio >= 7 && $tieneFaltas == "No" ){
echo "Aprobaste la materia ";
}else if($tieneFaltas == "Si"){
    echo "Reporbaste por faltas ";
}else {
    echo "Reporbaste la materia ";
}

?>