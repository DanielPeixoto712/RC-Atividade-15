<?php
$Numero1=$_POST["Num1"];
$Numero2=$_POST["Num2"];
$Numero3=$_POST["Num3"];
$Numero4=$_POST["Num4"];
$Numero5=$_POST["Num5"];
$Numero6=$_POST["Num6"];
$Numero7=$_POST["Num7"];
$Numero8=$_POST["Num8"];
$Numero9=$_POST["Num9"];
$Numero10=$_POST["Num10"];



$soma=$Numero1+$Numero2+$Numero3+$Numero4+$Numero5+$Numero6+$Numero7+$Numero8+$Numero9+$Numero10;
$media=($Numero1+$Numero2+$Numero3+$Numero4+$Numero5+$Numero6+$Numero7+$Numero8+$Numero9+$Numero10)/10;

echo "Resultado da soma: " .$soma. "<br>";

echo "Resultado da média: " .$media;
