<?php
/* CBTIS 89
   P25Cheque
   Programa que mediante el valor de un cheque imprime cuantos billetes de 1000, 500, 200, 100 y 20 y monedas de 10, 5, 2 y 1 se utilizan en el valor del cheque
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$cheque = 3876;
echo $cheque;
echo "<br>";

$div=$cheque/1000;
$res=$cheque%1000;
echo "billetes de 1000: ", floor($div);
echo "<br>";

$div=$res/500;
$res=$res%500;
echo "billetes de 500: ", floor($div);
echo "<br>";

$div=$res/200;
$res=$res%200;
echo "billetes de 200: ", floor($div);
echo "<br>";

$div=$res/100;
$res=$res%100;
echo "billetes de 100: ", floor($div);
echo "<br>";

$div=$res/50;
$res=$res%50;
echo "billetes de 50: ", floor($div);
echo "<br>";

$div=$res/20;
$res=$res%20;
echo "billetes de 20: ", floor($div);
echo "<br>";

$div=$res/10;
$res=$res%10;
echo "monedas de 10: ", floor($div);
echo "<br>";

$div=$res/5;
$res=$res%5;
echo "monedas de 5: ", floor($div);
echo "<br>";

$div=$res/2;
$res=$res%2;
echo "monedas de 2: ", floor($div);
echo "<br>";

$div=$res/1;
$res=$res%1;
echo "monedas de 1: ", floor($div);
echo "<br>";

?>