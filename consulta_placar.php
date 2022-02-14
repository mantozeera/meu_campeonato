<?php
// Fazer a leitura no banco de dados do nome e ordem de cadastro de cada equipe
$sql_a = "SELECT * FROM equipes WHERE id='$time_a'";
    $resultado_a = $MySQLi->query($sql_a) OR trigger_error($MySQLi->error, E_USER_ERROR);
    while($componente_a = $resultado_a -> fetch_object()){
        $equipe_a = $componente_a -> equipe; //Nome da equipe
        $id_equipe_a = $componente_a -> id; // Ordem de cadastro da equipe
        $pontos[$id_equipe_a] += $placar_a - $placar_b; // Calculo da contagem de pontos devido ao confronto
    }


$sql_b = "SELECT * FROM equipes WHERE id='$time_b'";
    $resultado_b = $MySQLi->query($sql_b) OR trigger_error($MySQLi->error, E_USER_ERROR);
    while($componente_b = $resultado_b -> fetch_object()){
        $equipe_b = $componente_b -> equipe;//Nome da equipe
        $id_equipe_b = $componente_b -> id;// Ordem de cadastro da equipe
        $pontos[$id_equipe_b] += $placar_b - $placar_a;// Calculo da contagem de pontos devido ao confronto
    }