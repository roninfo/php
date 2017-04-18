<?php 

	session_start();

	if(isset($_GET['nome']) && $_GET['nome'] != '') {
		$tarefas = array();
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
			$tarefas['concluida'] = 'não';
		}

	}
	
	$_SESSION['lista_tarefas'][] = $tarefas;
	

	if (isset($_SESSION['lista_tarefas'])) {
		$lista_tarefas = $_SESSION['lista_tarefas'];
	} else {
		$lista_tarefas = array();
	}

	include "template.php";
?>

