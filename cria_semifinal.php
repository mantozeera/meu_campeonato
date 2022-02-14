<?php

shuffle($vencedor); // Embaralha os times para um novo sorteio da nova fase

// Gera a quantidade de confrontos da fase
for($i=0; $i<2; $i++){ // i, corresponde aos 2 primeiros times do array time
    $j = $i+2; // j, corresponde aos 2 ultimos times do array time

    $gols_a = rand(0, 5); // gera aleatoriamente os gols de 0 a 5
    $gols_b = rand(0, 5); // gera aleatoriamente os gols de 0 a 5


    $sql_semi = "INSERT INTO confronto (
        `id`,
        `fase`,
        `time_a`,
        `time_b`,
        `placar_a`,
        `placar_b`
    )
    VALUES (
        null,
        'semi-final',
        '$vencedor[$i]',
        '$vencedor[$j]',
        '$gols_a',
        '$gols_b'
    )";
    $resultado_semi = $MySQLi->query($sql_semi) OR trigger_error($MySQLi->error, E_USER_ERROR);
}

$sql = "SELECT * FROM confronto WHERE fase='semi-final'";

$k = 0; // atribui 0, o valor do indice que será usado como chave dos arrays dos confrontos

include('complemento.php');