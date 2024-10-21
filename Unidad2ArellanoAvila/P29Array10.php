<?php
/* CBTIS 89
   P29Array10
   Programa que crea un array imprimiendo los nombres agregados.
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$nombres=array("Luis","Sofia","Pedro","Jamin","Omar","Mia","Tulio","Pepe");
$nombre="Tulio";

for ($i=0; $i<count($nombres); $i++) {
   if ($nombres[$i] == $nombre){
	echo "Este nombre esta en el array: ". $nombre;
   break;
   }
}
?>