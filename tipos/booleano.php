<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE; //converte pra 1 (VERDADEIRO)
echo '<br>';
echo FALSE; //falso
    
echo '<br>' . var_dump(true); //"var_dump"(detalhe de uma variavel);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool)0);//apenas zero é false dos números
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)-1);
echo '<br>' . var_dump((bool)0.0);
echo '<br>' . var_dump((bool)000000000.1);
echo '<br>' . var_dump((bool)""); // CONVERTE PARA FALSO
echo '<br>' . var_dump((bool)" ");// CONVERTE PARA VERDADEIRO ("TRUE")
echo '<br>' . var_dump((bool)"0"); //FALSE
echo '<br>' . var_dump((bool)"00");// VERDADEIRO
echo '<br>' . var_dump((bool)"false");//VERDADEIRO
echo '<br>' . var_dump(!!"false");
echo '<br>' . var_dump(!"false");

echo "Olá Mundo"
?>