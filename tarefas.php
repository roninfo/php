<?php 

	session_start();
	include "banco.php";
	include "helpers.php";

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
			$tarefas['concluida'] = '0';
		}

		gravar_tarefa($conexao, $tarefas);
	}

	function gravar_tarefa($conexao, $tarefas) {

		$query = "INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida) values (
		'{$tarefas['nome']}',
		'{$tarefas['descricao']}',
		{$tarefas['prioridade']},
		'{$tarefas['prazo']}',
		{$tarefas['concluida']})";

		mysqli_query($conexao, $query);
	}
	
	function buscar_tarefas($conexao) {
		$sqlBusca = 'SELECT * FROM tarefas';
		$resultado = mysqli_query($conexao, $sqlBusca);

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) {
			$tarefas[] = $tarefa;
		}

		return $tarefas;
	}

	$lista_tarefas = buscar_tarefas($conexao);

	include "template.php";
?>

