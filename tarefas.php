<?php 

	session_start();
	include "banco.php";
	include "helpers.php";

	$exibir_tabela = true;
	$disabled = false;
	$tarefas = array(
		'id' => 0,
		'nome' => '',
		'descricao' => '',
		'prazo' => '',
		'prioridade' => 1,
		'concluida' => ''
		);

	if(tem_post()) {
		$tarefas = array();
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

		gravar_tarefa($conexao, $tarefas);

		header('Location: tarefas.php');
		die();
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

	function excluir($id) {
		echo "excluindo registro " . $id;
		$query = 'delete from tarefas where id = {$id}';
		mysqli_query($query);
		echo "excluido registro " . $id;
	}

	include "template.php";
?>

