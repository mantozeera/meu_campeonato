<?php
// unset($vencedor);
// unset($perdedor);

if($placar_a > $placar_b){ // Verifica de o placar do time A é maior que o do time B
    $vencedor[$k] = $time_a; // Atribui vencedor ao time A
    $perdedor[$k] = $time_b; // Atribui perdedor ao time B
    $cor_a = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
} 
if($placar_a < $placar_b){ // Verifica de o placar do time B é maior que o do time A
    $vencedor[$k] = $time_b; // Atribui vencedor ao time B
    $perdedor[$k] = $time_a; // Atribui perdedor ao time A
    $cor_a = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
}
if($placar_a == $placar_b and $pontos[$id_equipe_a] > $pontos[$id_equipe_b]){ // nos casos em que o confronto terminar empatado, 
    // será considerado como primeiro critério de desenpate a quantidade de pontos obtidos até o momento, sendo um ponto para cada gol, e menos 1 para cada gol sofrido
    $vencedor[$k] = $time_a;
    $perdedor[$k] = $time_b;
    $cor_a = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
}
if($placar_a == $placar_b and $pontos[$id_equipe_b] > $pontos[$id_equipe_a]){ // nos casos em que o confronto terminar empatado,
    // será considerado como primeiro critério de desenpate a quantidade de pontos obtidos até o momento, sendo um ponto para cada gol, e menos 1 para cada gol sofrido
    $vencedor[$k] = $time_b;
    $perdedor[$k] = $time_a;
    $cor_a = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
}
if($placar_a == $placar_b and $pontos[$id_equipe_b] == $pontos[$id_equipe_a] and $id_equipe_b < $id_equipe_a){ // se o jogo terminar empatado e quantidade de pontos for a mesma, 
    //será declarado o vencedor o time cadastrado primeiro
    $vencedor[$k] = $time_b;
    $perdedor[$k] = $time_a;
    $cor_a = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
}
if($placar_a == $placar_b and $pontos[$id_equipe_b] == $pontos[$id_equipe_a] and $id_equipe_b > $id_equipe_a){ // se o jogo terminar empatado e quantidade de pontos for a mesma, 
    //será declarado o vencedor o time cadastrado primeiro
    $vencedor[$k] = $time_a;
    $perdedor[$k] = $time_b;
    $cor_a = "#007000"; // cor do vencedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
    $cor_b = "#D60B32"; // cor do perdedor, escolhida para sensibilidade para os tipos mais comuns do daltonismo
}