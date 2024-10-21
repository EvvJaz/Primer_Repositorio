<?php
/* CBTIS 89
   P21Array3
   Programa que almacena los nombres de 6 personas en un arreglo y posteriormente los imprime por medio de un ciclo for
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $nombre1 = "OsmarBros";
   $nombre2 = "EvvJaz";
   $nombre3 = "Omar chaparro";
   $nombre4 = "LaylaKawai";
   $nombre5 = "Elena Melena";
   $nombre6 = "Anna Banana";
   $arraynombres = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5, $nombre6);

   //Se obtiene el nùmero de elementos
   $longitud = count($arraynombres);

   //Recorre todos los elentos
   for($i=0; $i<$longitud; $i++)
   //Se obtiene el valor de cada elemento
   {
      echo $arraynombres[$i];
      echo "<br>";
   
   }
?>