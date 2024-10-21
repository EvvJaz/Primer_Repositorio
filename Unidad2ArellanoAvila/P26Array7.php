<?php
/* CBTIS 89
   P26Array7
   Programa que almacena datos en un arreglo y posteriormente los imprime en columnas
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
   foreach($datos2 as $dato){
   echo "$dato ";
   }
   echo "<br>"; 
   }
?>