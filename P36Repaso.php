<?php
/* CBTIS 89
   P36Repaso
   Programa que repasa un ciclo array y for mediante la venta de cargadoresy sus precios
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/
echo "CARGADORES ANTES MANEJADOS <br><br>";

$arrayproductos = array("USB-C","Micro USB","USB tipo A","USB tipo B");

sort($arrayproductos);
foreach($arrayproductos as $cargadores){
echo $cargadores . "<br>";}

echo "<br>";

echo "(DEBIDO A SU POCA VENTA UNOS FUERON RETIRADOS Y SE AGREGARON NUEVOS) <br><br>";

array_push($arrayproductos, "Lightning","Inalambrico");
unset($arrayproductos [2.3]);

echo "CARGADORES AHORA MANEJADOS";
sort($arrayproductos);

echo "<br><br>";
$longitud = count($arrayproductos);

   for($i=0; $i<$longitud; $i++)
   {
      echo $arrayproductos[$i];
      echo "<br>";  
   }

      echo "<br>";
      echo "Ahora manejamos ", $longitud . " con sus respectivos precios: <br>(los anteriores precios no tienen registro)<br><br>";

$arrayproductos = array("USB-C"=>"100","Micro USB"=>"60","Lightning"=>"100","Inalambrico"=>"200");

//sort($arrayproductos);
foreach($arrayproductos as $cargador=>$precio)
{ echo $cargador . " cuesta " . $precio . "<br>";
}

?>