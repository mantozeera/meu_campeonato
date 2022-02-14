<?php
// Gera a quantidade de confrontos da fase
for($i=0; $i<4; $i++){ // i, corresponde aos 3 primeiros times do array time
    $j = $i+4; // j, corresponde aos 4 ultimos times do array time
    $gols_a = rand(0, 5); // gera aleatoriamente os gols de 0 a 5
    $gols_b = rand(0, 5); // gera aleatoriamente os gols de 0 a 5

    $sql_quartas = "INSERT INTO confronto (
        `id`,
        `fase`,
        `time_a`,
        `time_b`,
        `placar_a`,
        `placar_b`
    )
    VALUES (
        null,
        'quartas',
        '$time[$i]',
        '$time[$j]',
        '$gols_a',
        '$gols_b'
    )";
    $resultado_quartas = $MySQLi->query($sql_quartas) OR trigger_error($MySQLi->error, E_USER_ERROR);
}

$sql = "SELECT * FROM confronto WHERE fase='quartas'";

$k = 0; // atribui 0, o valor do indice que será usado como chave dos arrays dos confrontos

include('complemento.php');