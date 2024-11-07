<?php
/* CBTIS 89
   P37Array17
   Programa que en un ciclo array muestra los numeros positivos y negativos
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arrayNumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arrayPositivo = array();
$arrayNegativo = array();
$sumaPositivos = 0; 
$sumaNegativos = 0; 

for ($i=0; $i<count($arrayNumeros); $i++) {
   if ($arrayNumeros[$i]>=0) {
        $arrayPositivo[]=$arrayNumeros[$i];
        $sumaPositivos+=$arrayNumeros[$i]; }
   else {
        $arrayNegativo[]=$arrayNumeros[$i];
        $sumaNegativos+=$arrayNumeros[$i]; }
}


echo "NÚMEROS POSITIVOS <br>";

for ($i=0; $i<count($arrayPositivo) ; $i++) { 
   echo $arrayPositivo[$i];
   echo "<br>"; 
}



echo "<br>NÚMEROS NEGATIVOS <br> ";

for ($i=0; $i<count($arrayNegativo); $i++) { 
   echo $arrayNegativo[$i];
   echo "<br>"; 
}
echo "<br>SUMA de POSITIVOS: $sumaPositivos<br><br>";
echo "<br>SUMA de NEGATIVOS: $sumaNegativos<br>";

?>