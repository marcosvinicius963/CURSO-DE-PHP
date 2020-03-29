<div class="titulo">Tipo String</div>
<?php
echo 'eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//concatenação
echo ("Nós também" . ' somos' . '<br>');
echo ("Números é " . 123);
echo '<br>', "Também aceito", " virgulas";


echo '<br>';
echo " 'Teste' " . ' "Teste" ' . ' \'Teste\' ' . " \"Teste\" " . "\\";

print("<br>Também existe essa função print");
print"<br>Também existe essa função print";


//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');//só a primeira letra maiuscula
echo '<br>' . ucwords('todas as palavras');//primeira letras das palvras da frase
echo '<br>' . strlen('Quantas letras?');//qauntas letra tem na palavra
echo '<br>' . substr('Só uma parte mesmo', 7, 6);


?>