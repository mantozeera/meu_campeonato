<?php
// Dados de acesso ao servidor MySQL
$MySQL = array(
	'servidor' => 'localhost',	// Endereço do servidor
	'usuario' => 'root',	// Usuário
	'senha' => '',	// Senha
	'banco' => 'meu_campeonato'		// Nome do banco de dados
);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);
?>