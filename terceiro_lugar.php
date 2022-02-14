<?php
$i= 1; // i, corresponde ao primeiro time do array
$j = $i+1; // j, corresponde ao segundo time do array

$gols_a = rand(0, 5); // gera aleatoriamente os gols de 0 a 5
$gols_b = rand(0, 5); // gera aleatoriamente os gols de 0 a 5


$sql_terceirolugar = "INSERT INTO confronto (
    `id`,
    `fase`,
    `time_a`,
    `time_b`,
    `placar_a`,
    `placar_b`
)
VALUES (
    null,
    'terceiro_lugar',
    '$perdedor[$i]',
    '$perdedor[$j]',
    '$gols_a',
    '$gols_b'
)";
$resultado_terceiro_lugar = $MySQLi->query($sql_terceirolugar) OR trigger_error($MySQLi->error, E_USER_ERROR);


$sql = "SELECT * FROM confronto WHERE fase='terceiro_lugar'";

$k = 10; // atribui 10, o valor do indice que será usado como chave dos arrays dos confrontos, inicia-se num valor longe do zero para utilizar o mesmo array vencedor e as mesmas rotinas anteriores

include('complemento.php');