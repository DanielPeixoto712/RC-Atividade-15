<?php
$Numero1=$_POST["Num1"];
$Numero2=$_POST["Num2"];

function som($num1, $num2){
	$soma=0;
	$soma=$num1+$num2;

}
echo "Resultado da soma: " .soma.  "<br>";

$subtraçao=$Numero1-$Numero2;
$divisao=$Numero1/$Numero2;
$multiplicacao=$Numero1*$Numero2;




echo "Resultado subtração: " .$subtraçao.  "<br>";
echo "Resultado da divisão: " .$divisao.  "<br>";
echo "Resultado da multiplicação: " .$multiplicacao.  "<br>";