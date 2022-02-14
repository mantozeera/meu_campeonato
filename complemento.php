<?php

$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

while($componente = $resultado -> fetch_object()){ // Escreve todas as linhas da tabela resultado dentro de uma array
    $k++; // Incrementa o indice do confronto
    $placar_a = $componente -> placar_a; // Lê o placar do time a
    $placar_b = $componente -> placar_b; // Lê o placar do time b
    $time_a = $componente -> time_a; // Lê o time a
    $time_b = $componente -> time_b; // Lê o time b

    include('consulta_placar.php'); // rotina de consulta do placar
    include('define_vencedor.php'); // rotena de definição do vencedor

    echo "<font color='$cor_a'>$equipe_a <span class='placar'>$placar_a</span></font> 
    <font class='xx'>x</font> <font color='$cor_b'><span class='placar'>$placar_b</span> $equipe_b</font> <br />"; // Escreve o resultado do confronto na tela
    // echo "<br />$equipe_a $pontos[$time_a] Pontos <br />";
    // echo "$equipe_b $pontos[$time_b] Pontos <br />";
    }