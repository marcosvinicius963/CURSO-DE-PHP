<div class="titulo">Desafio Sorteio</div>

<style>
    h1{
        text-align: center;
    }
</style>

<?php
$nomes = ["Homem-Aranha", "Homem-de-ferro", "Pantera-Negra", "Thor"];

$index = array_rand($nomes);
echo "<h1>$nomes[$index]</h1>";
?>