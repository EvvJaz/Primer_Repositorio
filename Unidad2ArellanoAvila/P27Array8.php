<?php
/* CBTIS 89
   P27Array8
   Programa que crea un array con números del 1 al 100. Después, en un ciclo FOR muestra solo los números pares.
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$numeros = array();
for ($i=1; $i<=100; $i++){
   $numeros[]=$i;
}
echo "PARES";
echo "<br>";
foreach ($numeros as $numero){
if ($numero%2==0){
echo $numero . "\n";
}
}
echo "<br>","<br>";
echo "IMPARES";
echo "<br>";
foreach ($numeros as $numero){
if ($numero%2!=0){
echo $numero . "\n";
}
}
?>