<?php
/* CBTIS 89
   P38Array18
   Programa que almacena información de 6 personas y dependiendo de su edad los acomodamos en diferentes arreglos. Si es menor de 18 años se debe colocar en el grupo 1, si su edad esta entre los 18 y 49 se debe colocar en el grupo 2 y si tiene mas de 50 años se debe colocar en el grupo 3.
   Evolet Jazmín Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arraynombre = array("Lucy","Mari","Lalo","Lily","Lino","Rosi");
$arrayedad = array(17,30,71,12,26,58);
$arraygrupo1 = array();
$arraygrupo2 = array();
$arraygrupo3 = array();

for ($i=0; $i<count($arraynombre); $i++) {
   if ($arrayedad[$i]<18) {
       $arraygrupo1[]=1; }
   else { $arraygrupo1[]=0; }

   if ($arrayedad[$i]>=18 && $arrayedad[$i]<50) {
       $arraygrupo2[]=1; }
   else { $arraygrupo2[]=0; }

   if ($arrayedad[$i]>50) {
       $arraygrupo3[]=1; }
   else { $arraygrupo3[]=0; }
}

echo "NOMBRE ---- EDAD ---- GRUPO 1 ---- GRUPO 2 ---- GRUPO 3 </P>";
for ($i=0; $i<count($arraynombre); $i++){
echo $arraynombre[$i], " ------------- ". $arrayedad[$i], " ------------- ". $arraygrupo1[$i], " -------------- ". $arraygrupo2[$i], " -------------- ". $arraygrupo3[$i];
echo"<br>";
}