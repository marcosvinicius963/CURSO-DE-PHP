<div class="titulo">Mapa</div>
<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.9
);

print_r($dados);
var_dump($dados[0]);
//var_dump($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);


$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);
echo "<br>";
print_r($lista);
echo '<br>';
$lista[] = 'm';
print_r($lista);
echo '<br>';
$lista['vinte'] = 20;
print_r($lista);
?>
