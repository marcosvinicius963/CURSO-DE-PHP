<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);//muito comum constantes seguir este padrão 
echo TAXA_DE_JUROS;//constante não usam dolar 


echo '<br>' .$TAXA_DE_JUROS . '!';//so vai imprimir o "!"

//TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define ('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;

const NOVISSIMA_TAXA = 2.8 +1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __LINE__;
echo '<br>' . __DIR__;
?>