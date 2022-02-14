<?php

$i= 1; // i, corresponde ao primeiro time do array
$j = $i+1; // j, corresponde ao segundo time do array

$gols_a = rand(0, 5); // gera aleatoriamente os gols de 0 a 5
$gols_b = rand(0, 5); // gera aleatoriamente os gols de 0 a 5


$sql_final = "INSERT INTO confronto (
    `id`,
    `fase`,
    `time_a`,
    `time_b`,
    `placar_a`,
    `placar_b`
)
VALUES (
    null,
    'final',
    '$vencedor[$i]',
    '$vencedor[$j]',
    '$gols_a',
    '$gols_b'
)";
$resultado_final = $MySQLi->query($sql_final) OR trigger_error($MySQLi->error, E_USER_ERROR);


$sql = "SELECT * FROM confronto WHERE fase='final'";

$k = 0; // atribui 0, o valor do indice que será usado como chave dos arrays dos confrontos

include('complemento.php');