<div class="titulo">Varáveis</div>
<?php
$numeroA =13;
$numeroB =13;
//A criação de uma várivel no php é obrigatoriamente começar pelo dolar "$"
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';
$somaDosNumeros = $numeroA + $numeroB;

echo $somaDosNumeros;
echo '<br>';

echo isset($somaDosNumeros);


unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);


$Variavel =10;
echo $Variavel, '<br>';

$Variavel ="Agora sou uma string!";
echo $Variavel, '<br>';



// Nomes de variável
$var ='valida';
$var2 ='valida';
$VAR4 ='valida';
$_var4 ='valida';
$vâr5 ='valida'; //evitar!!
//$6var ='invalida;
//$%var7 ='invalida;
// $var8% ='invalida;

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);

?>