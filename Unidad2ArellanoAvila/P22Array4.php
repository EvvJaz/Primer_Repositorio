<?php
/* CBTIS 89
   P22Array4
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $equipo = array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

   echo "** SELECCIÒN NACIONAL **","<br>","<br>";
   foreach($equipo as $posicion=>$jugador)
   { echo "El jugador " . $jugador . " es el " . $posicion;
     echo "<br>","<br>";
   }
?>