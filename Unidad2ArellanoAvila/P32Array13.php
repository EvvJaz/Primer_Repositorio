<?php
/* CBTIS 89
   P32Array13
   Programa que ordena de manera ascendente y descendente a un array
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arraynumerico = array("Camisa", "Pantalón", "Cinturón", "Gorra","Calcetines");
foreach($arraynumerico as $ropa){
echo $ropa . " <br>";}

echo "<br>";
echo "orden ascendente", "<br>";
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

echo "orden descendente", "<br>";
rsort($arraynumerico);
var_export($arraynumerico);
?>