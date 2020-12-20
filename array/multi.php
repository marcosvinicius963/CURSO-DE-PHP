<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Marcos",
        "idade" => 26,
        "naturalidade" => "Maranhão"
    ],

    [
        "nome" => "Vitor",
        "idade" => 25,
        "naturalidade" => "Recife"
        ],
    ];

    print_r($dados);
    echo '<br>' . $dados[0]['idade'];
    echo '<br>' . $dados[1]['idade'];

    $dados[] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do México"
    ];

    echo '<br>';
    print_r($dados);
    echo '<br>' .$dados[2]['idade'];

    $dados[2]["Vizinho"] = "Chaves";//acrecentando 
    echo '<br>';
    print_r($dados[2]);

    unset($dados[1]); //removendo o indice 1
    echo '<br>';
    print_r($dados);
    //var_dump($dados[1000]);