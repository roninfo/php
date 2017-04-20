<?php

$dbServidor = '127.0.0.1';
$dbUsuario = 'roninfo';
$dbSenha = 'roninfo';
$dbBanco = 'tarefas';

$conexao = mysqli_connect($dbServidor, $dbUsuario, $dbSenha, $dbBanco);

if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

?>