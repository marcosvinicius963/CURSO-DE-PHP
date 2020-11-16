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


echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
echo "<br>";
var_dump(true xor false);
echo "<br>";
var_dump(false xor true);
echo "<br>";
var_dump(false xor false);
echo "<br>";


var_dump(true != true);
echo "<br>";
var_dump(true != false);
echo "<br>";
var_dump(false != true);
echo "<br>";
var_dump(false != false);
echo "<br>";



?>
