<div class="titulo">Desafio Equação</div>

<?php

$operA = (6 * (3 + 2)) **2;
$denA = 3 * 2;

$operB = (1 - 5) * (2 - 7);
$denB= 2;

$superiorA =$operA / $denA;
$superiorB = ($operB / $denB) **2;

$supeiror= ($superiorA - $superiorB) **3;
$inferior = 10 ** 3;

$final =$supeiror / $inferior;

echo "O resultado final é " . $final . ".";




?>