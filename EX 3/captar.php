<?php
$Numero1=$_POST["Num1"];
$Numero2=$_POST["Num2"];
$calcula=$_POST["operacao"];

$soma=$Numero1+$Numero2;
$subtraçao=$Numero1-$Numero2;
$divisao=$Numero1/$Numero2;
$multiplicacao=$Numero1*$Numero2;

if ($calcula=='soma') {
	echo "Resultado da soma: " .$soma.  "<br>";
}

if ($calcula=='subtracao') {
	echo "Resultado subtração: " .$subtraçao.  "<br>";
}


if ($calcula=='divisao') {
	echo "Resultado da divisão: " .$divisao.  "<br>";
}

if ($calcula=='multiplicacao') {
	echo "Resultado da multiplicação: " .$multiplicacao.  "<br>";
}

