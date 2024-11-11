<?php
/* CBTIS 89
   P40Array18
   Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
   En el $arreglo1 van los números pares, en el $arreglo2 van los números impares, en el $arreglo3 va la suma de los números correspondientes al mismo índice.
   Evolet Jazmín Arellano Àvila
   3ªA Programaciòn Matutino
*/

$array1 = array();
$array2 = array();
$array3 = array();

for ($i=150; $i<=201; $i++){
   if ($i%2==0)
      {$array1[]=$i;}
   else {$array2[]=$i;}
}

for ($i=0; $i<=25; $i++){
   $array3[]=$array1[$i]+$array2[$i];
}

echo "Array1 ----- Array2 ----- Array3";
echo "<br>";
for ($i=0; $i<=25; $i++){
echo $array1[$i]. " --------- ". $array2[$i]. " --------- ". $array3[$i];
echo "<br>";
}

?>