<?php
/* CBTIS 89
   P35Array16
   Programa que realiza multiples operaciones mediante un array
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$A1 = array (10, 20, 30, 40, 50);
$A2 = array (3, 7, 6, 15, 18);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();

$longitud = count($A1);
   for($i=0; $i<$longitud; $i++)
   {$arraysuma[$i]=$A1[$i]+$A2[$i];
    $arrayresta[$i]=$A1[$i]-$A2[$i];
    $arraymulti[$i]=$A1[$i]*$A2[$i];
    $arraydivi[$i]=$A1[$i]/$A2[$i];
   }

 

echo "SUMA ENTRE ARREGLOS <br>";
   for($i=0; $i<$longitud; $i++){
   echo $A1[$i] . " + ", $A2[$i] . " = ", $arraysuma[$i];
   echo "<br>";
   }
echo "<br>";


echo "RESTA ENTRE ARREGLOS <br>";
   for($i=0; $i<$longitud; $i++){
   echo $A1[$i] . " - ", $A2[$i] . " = ", $arrayresta[$i];
   echo "<br>";
   }
echo "<br>";


echo "MULTIPLICACIÒN ENTRE ARREGLOS <br>";
   for($i=0; $i<$longitud; $i++){
   echo $A1[$i] . " * ", $A2[$i] . " = ", $arraymulti[$i];
   echo "<br>";
   }
echo "<br>";


echo "DIVISIÒN ENTRE ARREGLOS <br>";
   for($i=0; $i<$longitud; $i++){
   echo $A1[$i] . " / ", $A2[$i] . " = ", $arraydivi[$i];
   echo "<br>";
   }
echo "<br>";
?>