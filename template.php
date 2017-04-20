<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Gerenciador de Tarefas</title>
	<link href='css/tarefas.css' rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>Gerenciador de tarefas</h1>
	<form>
		<fieldset>
			<legend>
				Nova tarefa
			</legend>
			<label>Tarefa: <input type="text" name="nome" /></label>

			<label> Descrição: <textarea name="descricao"> </textarea></label>
			<label> Prazo: <input type="text" name="prazo" /></label>
			<fieldset>
				<legend>Prioridade:</legend>
				<label><input type="radio" name="prioridade" value="1" checked />Baixa</label>
				<label><input type="radio" name="prioridade" value="2" />Média</label>
				<label><input type="radio" name="prioridade" value="3" />Alta</label>
			</fieldset>
			<label>Tarefa concluída: <input type="checkbox" name="concluida" value="1" /></label>
			<input type="submit" name="Cadastrar"/>
		</fieldset>
	</form>
	
	<table>
		<tr>
			<th>Tarefas</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluído</th>
		</tr>
		<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa['nome']; ?></td>
				<td><?php echo $tarefa['descricao']; ?></td>
				<td><?php echo $tarefa['prazo']; ?></td>
				<td><?php echo $tarefa['prioridade']; ?></td>
				<td><?php echo $tarefa['concluida']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>