<?php
/* CBTIS 89
   P41Array21
   Programa que almacena en un arreglo llamado $compras el valor de 6 compras, posteriormente en otros arreglos se debe posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones:
   El contenido del arreglo $descuentos se llenara de la siguiente manera:
   Compra menor 300 = 0
   Compra mayor 300 y menor o igual 1000 = 10%
   Compra mayor 1000 y menor o igual 2500 = 15%
   Compra mayor 2500 y menor o igual 5000 = 20%
   Compra mayor 5000 = 25%
   Evolet Jazmín Arellano Àvila
   3ªA Programaciòn Matutino
*/

$compras = array(800, 2700, 1900, 150, 7600, 1000);
$descuentos = array();
$total = array();
$porcentaje = array();

$longitud = count($compras);
   for($i=0; $i<$longitud; $i++){
if ($compras[$i]<300) {
   $porcentaje[$i]="0%";
   $descuentos[$i]=$compras[$i]*0;
   $total[$i]=$compras[$i]-$descuentos[$i]; }

if ($compras[$i]>300 && $compras[$i]<=1000) {
   $porcentaje[$i]="10%";
   $descuentos[$i]=$compras[$i]*0.10;
   $total[$i]=$compras[$i]-$descuentos[$i]; }

if ($compras[$i]>1000 && $compras[$i]<=2500) {
   $porcentaje[$i]="15%";
   $descuentos[$i]=$compras[$i]*0.15;
   $total[$i]=$compras[$i]-$descuentos[$i]; }

if ($compras[$i]>2500 && $compras[$i]<=5000) {
   $porcentaje[$i]="20%";
   $descuentos[$i]=$compras[$i]*0.20;
   $total[$i]=$compras[$i]-$descuentos[$i]; }

if ($compras[$i]>500) {
   $porcentaje[$i]="25%";
   $descuentos[$i]=$compras[$i]*0.25;
   $total[$i]=$compras[$i]-$descuentos[$i]; }
}

echo "Compras -- Descuentos -- Total -- Porcentaje";
echo "<br>";
for($i=0; $i<$longitud; $i++){
   echo $compras[$i], " ---------- ", $descuentos[$i], " ---------- ",$total[$i], " ---------- ", $porcentaje[$i];
   echo "<br>";
   }

?>