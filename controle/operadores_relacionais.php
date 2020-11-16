<div class="titulo">Operadores relacionais</div>

<?php
var_dump(1 == 1);//true
echo '<br>';
var_dump(1 > 1); //false
echo '<br>';
var_dump(1 >= 1); //true
echo '<br>';
var_dump(4 < 23); //true
echo '<br>';
var_dump(1 <= 1); //true
echo '<br>';
var_dump(1 != 1); //false 
echo '<br>';
var_dump(1 <> 1); //false
echo '<br>';

echo '<br>';
echo 'outro metodo abaixo <br>';
echo '<br>';

var_dump(111 == '111'); //true
echo '<br>';
var_dump(111 === '111'); //false
echo '<br>';
var_dump(111 != '111');  //false
echo '<br>';
var_dump(111 !== '111'); //true


echo "<h6>Relacionais no If/Else</h6>";
$idade = 500;
if($idade <= 18 ){
    echo "Menor de idade = $idade anos ";
} else if($idade <= 65){
    echo "Adulto = $idade anos";
} else {
    echo "Terceira idade = $idade anos";
}










?>