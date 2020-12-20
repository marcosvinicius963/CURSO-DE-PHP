<div class="titulo">Array 2</div>
<?php


$lista = array(1, 2, 3.4, 'texto');
var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>';
$lista[0] = 2000;
print_r($lista);

echo  '<br>' . $lista[0];
echo  '<br>' . $lista[1];
echo  '<br>' . $lista[2];
echo  '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é um texto teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11];// cuidado !!
echo '<br>' . mb_substr($texto, 10, 1);
?>