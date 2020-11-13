<?php
$Numero1=$_POST["Num1"];
$Numero2=$_POST["Num2"];


$soma=$Numero1+$Numero2;
$subtraçao=$Numero1-$Numero2;
$divisao=$Numero1/$Numero2;
$multiplicacao=$Numero1*$Numero2;


function soma($Numero1, $Numero2){
	$soma=0;
	$soma=$Numero1+$Numero2;
	return $soma;

}


function sub($Numero1, $Numero2){
	$subtraçao=0;
	$subtraçao=$Numero1-$Numero2;
	return $subtraçao;
}



function div($Numero1, $Numero2){
	$divisao=0;
	$divisao=$Numero1/$Numero2;
	return $divisao;
}


function mult($Numero1, $Numero2){
	$multiplicacao=0;
	$multiplicacao=$Numero1*$Numero2;
	return $multiplicacao;
}

echo "Resultado da soma: " .soma($Numero1, $Numero2). "<br>" ;

echo "Resultado da subtração: " .sub($Numero1, $Numero2). "<br>";

echo "Resultado da divisão: " .div($Numero1, $Numero2). "<br>";

echo "Resultado da multiplicação: " .mult($Numero1, $Numero2).  "<br>";