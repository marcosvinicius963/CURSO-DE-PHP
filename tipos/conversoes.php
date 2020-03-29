<div class="titulo">Conversões</div>
<?php
echo is_int(PHP_INT_MAX);//valor "1"

// int para float
echo '<br>';
echo '<p>Int para float</p>';

var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);//float
echo '<br>';
var_dump((float) 3);//float

//float par int
echo '<p>Float para int</p>';
var_dump((int) 2.8);//float para int o valor NÃO arredonda="2"
echo '<br>';
var_dump((int) 6.8);// float para int
echo '<br>';
var_dump(intval('11010101101', 2));
echo '<br>';
var_dump((int) 2.999);//não arredonda para 3
echo '<br>';
var_dump((int) round(2.9));
//resultado do valor é "3"
//Usando "round" ele converte do int para string
//ele arredonda a nota
//ele não muda o tipo da variavel


// operações com string
echo '<p>Strings</p>';
var_dump(3 +"2");//int
echo '<br>';
var_dump("3"+ 2);//int
echo '<br>';
var_dump("3". 2);//concatenização
echo '<br>', is_string("3" . 2);
echo '<br>';
var_dump(1 + "cinco");//int
echo '<br>';
var_dump(1 + "5 cinco");//int
echo '<br>';
var_dump(1 + "2+5");//ele pega o primeiro da string
echo '<br>';
var_dump(1 + "3.2");//4.2
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");//int "10"
echo '<br>';
var_dump((float) "10.5");//float "10.5"
?>