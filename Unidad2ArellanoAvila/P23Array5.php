<?php
/* CBTIS 89
   P23Array5
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $frutas = array("manzana"=>"25","mango"=>"40","limòn"=>"35","naranja"=>"20","platano"=>"22","maracuya"=>"54","fresa"=>"76","kiwi"=>"83");

   echo "** FRUTERÌA LINOS **","<br>","<br>";
   foreach($frutas as $fruta=>$precio)
   { echo "El kilo de " . $fruta . " cuesta " . $precio;
     echo "<br>","<br>";
   }
?>