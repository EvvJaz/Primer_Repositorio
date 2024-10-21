<?php
/* CBTIS 89
   P31Array12
   Programa que ordena de manera ascendente y descendente a un array
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

echo "orden ascendente", "<br>";
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

echo "orden descendente", "<br>";
rsort($arraynumerico);
var_export($arraynumerico);
?>