<?php
/* CBTIS 89
   P38Array18
   Programa que almacena datos en un array multidimensional y posteriormente los imprime en diferentes posiciones
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$datos=array(
   array(10 ,20, 30),array(40, 50, 60),array(70, 80, 90));

echo "NORMAL<br>";
for($i=0; $i<3; $i++) {
   for($j=0; $j<3; $j++) {
      echo $datos[$i][$j]." ";
   }
   echo "<br>";
}

echo "<br><br>";

echo "FILAS A COLUMNAS<br>";
for($i=0; $i<3; $i++) {
   for($j=0; $j<3; $j++) {
      echo $datos[$j][$i]." ";
   }
   echo "<br>";
}

echo "<br><br>";

echo "COLUMNAS INVERSAS<br>";
for($i=0; $i<3; $i++) {
   for($j=0; $j<3; $j++) {
      rsort($datos[$i]);
      echo $datos[$i][$j]." ";
   }
   echo "<br>";
}

echo "<br><br>";

echo "FILAS INVERSAS<br>";
for($i=2; $i>=0; $i--) {
   for($j=2; $j>=0; $j--) {
      sort($datos);
      echo $datos[$i][$j]." ";
   }
   echo "<br>";
}

echo "<br><br>";

echo "ESPEJO INVERSO<br>";
for($i=2; $i>=0; $i--) {
   for($j=0; $j<3; $j++) {
      echo $datos[$i][$j]." ";
   }
   echo "<br>";
}
