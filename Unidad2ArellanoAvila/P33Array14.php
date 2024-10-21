<?php
/* CBTIS 89
   P33Array14
   Programa que ordena de manera ascendente y descendente a un array
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arraynombres = array("Osmar","Felix","Evelyn","Farid","Jocelyn","Minho");
echo "orden ascendente";
foreach($arraynombres as $nombres){
echo $nombres . " <br>";}

echo "<p>";

array_push($arraynombres, "Evolet", "Jazmìn", "Ruka", "Jisoo");
unset($arraynombres [0.4]);

echo "orden descendente";
rsort($arraynombres);

echo "<br>","<br>";
$longitud = count($arraynombres);

   for($i=0; $i<$longitud; $i++)
   {
      echo $arraynombres[$i];
      echo "<br>";  
   }
      echo $longitud;
?>