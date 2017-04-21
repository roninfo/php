<?php

	session_start();
	include "banco.php";
	include "helpers.php";

	$exibir_tabela = false;
	$disabled = isset($_GET['disabled']) ? $_GET['disabled'] : '';
	$editarOuExcluir = isset($_POST['Cadastrar']) ? $_POST['Cadastrar'] : '';

	if($editarOuExcluir == 'editar') {
		$tarefas = array();

		$tarefas['id'] = $_GET['id'];
		$tarefas['nome'] = $_POST['nome'];

		if (isset($_POST['descricao'])) {
			$tarefas['descricao'] = $_POST['descricao'];
		} else {
			$tarefas['descricao'] = '';
		}

		if (isset($_POST['prazo'])) {
			$tarefas['prazo'] = $_POST['prazo'];
		} else {
			$tarefas['prazo'] = '';
		}

		$tarefas['prioridade'] = $_POST['prioridade'];

		if (isset($_POST['concluida']) && $_POST['concluida'] != '') {
			$tarefas['concluida'] = $_POST['concluida'];
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