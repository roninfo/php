<?php

	session_start();
	include "banco.php";
	include "helpers.php";

	$exibir_tabela = false;

	if(isset($_GET['nome']) && $_GET['nome'] != '') {
		$tarefas = array();

		$tarefas['id'] = $_GET['id'];
		$tarefas['nome'] = $_GET['nome'];

		if (isset($_GET['descricao'])) {
			$tarefas['descricao'] = $_GET['descricao'];
		} else {
			$tarefas['descricao'] = '';
		}

		if (isset($_GET['prazo'])) {
			$tarefas['prazo'] = $_GET['prazo'];
		} else {
			$tarefas['prazo'] = '';
		}

		$tarefas['prioridade'] = $_GET['prioridade'];

		if (isset($_GET['concluida']) && $_GET['concluida'] != '') {
			$tarefas['concluida'] = $_GET['concluida'];
		} else {
			$tarefas['concluida'] = '0';
		}

		editar_tarefa($conexao, $tarefas);
	}

	$tarefas = buscar_tarefa($conexao, $_GET['id']);

	function buscar_tarefa($conexao, $id) {
		$query = "SELECT * FROM tarefas WHERE id = {$id}";

		$resultado = mysqli_query($conexao, $query);

		return mysqli_fetch_assoc($resultado);
	}

	include "template.php";
?>