<?php
/* CBTIS 89
   P30Array11
   Programa que agrega elementos a un array
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/


$array_numerico_indexado = array(1, "Gato", 2, "Perro");

foreach($array_numerico_indexado as $mascota){
   echo $mascota . " <BR>";
}

array_push($array_numerico_indexado, 3, "Caballo");

foreach($array_numerico_indexado as $mascota){
   echo $mascota . " <BR>";
}
?>