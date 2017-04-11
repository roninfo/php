<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
</head>
<body>
	<h1>Gerenciador de tarefas</h1>
	<form>
		<fieldset>
			<legend>
				Nova tarefa
			</legend>
			<label>Tarefa: <input type="text" name="nome"></label>
			<input type="submit" name="Cadastrar">
		</fieldset>
	</form>
	<?php 

		$lista_tarefas = array();

		if(isset($_GET['nome'])) {
			$lista_tarefas[] = $_GET['nome'];	
		}
		
	?>

</body>
</html>