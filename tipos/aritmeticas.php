<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 +1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 /4, '<br>';
echo intdiv(7, 4), '<br>';//mostra o valor inteiro
echo round(7 /4), '<br>';//redonda o valor
echo 7 %4, '<br>'; //muito usado parar saber se é pa ou impár
echo 8 % 2, '<br>';//muito usado parar saber se é pa ou impár
echo 7 % 1, '<br>';//muito usado parar saber se é pa ou impár
echo 7 / 0, '<Br>';// da  inf
// echo intdiv(7, 0); # erro!
echo 4 **2, '<br>';//pode colocar até 2 vezes a operação
//Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';//primeiro vem a multiplicação
echo (2 + 3) * 4, '<br>';/*primeiro vem a conta dentro do
parênteses e depois a multiplação*/
echo 2 + 3 * 4 **2, '<br>';
echo ((2 + 3) * 4) ** 2;d//nao entendi essa questão
?>

