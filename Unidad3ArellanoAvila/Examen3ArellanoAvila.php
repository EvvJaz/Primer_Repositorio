<?php
/* CBTIS 89
   P41Array21
   Programa que almacena el nombre de cuatro personas en un arreglo $alumnos y en otro arreglo multidimensional llamado $calificaciones almacena las calificaciones de cada uno de ellos por medio de filas
   Dbes calcular por medio de ciclos el promedio de cada alumno y guardarlo en el arreglo $promedio de igual manera en el arreglo $status debes almacenar la palabra Aprobado o Reprobado segun corresponta.
   Evolet Jazmín Arellano Àvila
   3ªA Programaciòn Matutino
*/

$alumnos = array("Luz","Fer","Ian","Ale");
$calificaciones = array(
   array(6 ,4, 5),array(7, 9, 8),array(7, 9, 5), array(5, 4, 6));
$promedio = array();
$status = array();

$longitud = count($alumnos);

for($i=0; $i<4; $i++){
   for($j=0; $j<3; $j++) {
}
{$calificaciones[$i][$j]=$j+$j;}
$promedio[$i]=$calificaciones[$i][$j]/3;

if ($promedio[$i]<=5){
$status[$i]="Reprobado";
}
else {
$status[$i]="Aprobado";
}
}

echo "Alumnos   Promedio   Status<br>";
for($i=0; $i<$longitud; $i++){
echo $alumnos[$i]," ----- ",$promedio[$i]," ----- ",$status[$i];
echo "<br>";
}

echo "<br>Calificaciones<br>";
for($i=0; $i<4; $i++) {
   for($j=0; $j<3; $j++) {
      echo $calificaciones[$i][$j]." ";
   }
   echo "<br>";
}