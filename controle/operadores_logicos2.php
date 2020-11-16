<div class="titulo">Op. Lógicos</div>

<?php
echo "<p>Negação lógica</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true); //falso

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true and true);
echo "<br>";
var_dump(true and false);
echo "<br>";
var_dump(false && true);
echo "<br>";
//var_dump(false && ?);
var_dump(false && false);
echo "<br>";
var_dump(true && 4 > 3 && 4 < 5);

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || true);
echo "<br>";
var_dump(false || false);
echo "<br>";
var_dump(true or true);
echo "<br>";
var_dump(true or false);
echo "<br>";
var_dump(false or true);
echo "<br>";
var_dump(false or false);


echo "<p class='divisao'>EXEMPLO</p><hr>";

$idade = 80;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioM = ($idade >= 65 && $sexo ==='M');
$criterioF = ($idade >= 60 && $sexo ==='F');

$atingiuCriterio = $criterioM || $critrioF;

$PodeAposentar =$pagouPrevidencia && $atingiuCriterio;

echo "Pode se aposentar -> $PodeAposentar.<br>";

echo "<br>";

if ($idade >= 65 && $sexo ==='M') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 60 && $sexo === 'F') {
    echo "pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco';
}
?>
