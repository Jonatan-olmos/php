<?php
$array = ["marines", "jose","sofia"];
$nombre = "marines";
echo $array[2];
echo $array[1];


foreach($array as $index => $nombre){
    echo "mi nombre es: ",$nombre, "index: $index";
}
?>