<?php

	session_start();
	include "banco.php";
	include "helpers.php";

	$exibir_tabela = false;
	$disabled = isset($_GET['disabled']) ? $_GET['disabled'] : '';
	$editarOuExcluir = isset($_GET['Cadastrar']) ? $_GET['Cadastrar'] : '';

	if($editarOuExcluir == 'editar' && isset($_GET['nome']) && $_GET['nome'] != '') {
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

		header('Location: tarefas.php');
		die();
	} else if ($editarOuExcluir == 'excluir') {
		remover_tarefa($conexao, $_GET['id']); 
		header('Location: tarefas.php');
		die();
	}

	$tarefas = buscar_tarefa($conexao, $_GET['id']);

	function buscar_tarefa($conexao, $id) {
		$query = "SELECT * FROM tarefas WHERE id = " . $id;

		$resultado = mysqli_query($conexao, $query);

		return mysqli_fetch_assoc($resultado);
	}

	function editar_tarefa($conexao, $tarefa) {

		$query = "UPDATE tarefas SET 
		nome = '{$tarefa['nome']}',
		descricao = '{$tarefa['descricao']}',
		prazo = '{$tarefa['prazo']}',
		prioridade = {$tarefa['prioridade']},
		concluida = {$tarefa['concluida']}
		WHERE id = {$tarefa['id']}
		";

		mysqli_query($conexao, $query);
	}

	function remover_tarefa($conexao, $id) {
		$query = "DELETE FROM tarefas WHERE id = {$id}";
		mysqli_query($conexao, $query);
	}

	include "template.php";
?>