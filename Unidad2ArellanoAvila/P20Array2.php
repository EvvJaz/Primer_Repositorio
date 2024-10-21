<?php
/* CBTIS 89
   P20Array2
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $nombre = "Elena Melena";
   $array = array(1, 2, 3, "casa", $nombre);

   //Se obtiene el nùmero de elementos
   $longitud = count($array);

   //Recorre todos los elentos
   for($i=0; $i<$longitud; $i++)
   //Se obtiene el valor de cada elemento
   {
      echo $array[$i];
      echo "<br>";
   
   }
?>