<?php
include('conexao.php');

// Cada vez que for realizado um cadastro novo, o banco de dados é zerado
$sql = "truncate equipes";
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

$equipe = $_POST['equipe'];
for($i=1; $i<9; $i++){ // Repete o script de cadastro para cada equipe
    $sql_equipes = "INSERT INTO equipes (
        `id`,
        `equipe`
    )
    VALUES (
        null,
        '$equipe[$i]'
    )";
    $resultado_equipes = $MySQLi->query($sql_equipes) OR trigger_error($MySQLi->error, E_USER_ERROR);
    echo $equipe[$i] . " Cadastrada com sucesso!!!<br />"; // Mendagem de cadastro com sucesso
} ?>
Redirecionando
<meta http-equiv="refresh" content="5, url=index.php"> <!-- Redireciona em 5 segundos para a index -->
