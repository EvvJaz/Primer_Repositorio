<?php
/* CBTIS 89
   P24Array6
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

   $alumnos = array("Christopher"=>"Programaciòn","Felix"=>"Contabilidad","Luis"=>"Mecatronica","Peter"=>"Administraciòn de Recursos Humanos","Jacob"=>"Arquitectura");

   echo "** SELECCIÒN NACIONAL **","<br>","<br>";
   foreach($alumnos as $alumno=>$carrera)
   { echo "El alumno " . $alumno . " es de la carrera " . $carrera . " y estudia en el CBTIS89";
     echo "<br>","<br>";
   }
?>