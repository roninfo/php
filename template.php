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
				<label><input type="radio" name="propriedade" value="baixa" checked />Baixa</label>
				<label><input type="radio" name="propriedade" value="media" />Média</label>
				<label><input type="radio" name="propriedade" value="alta" />Alta</label>
			</fieldset>
			<label>Tarefa Concluída: <input type="checkbox" name="Concluída" value="sim" /></label>
			<input type="submit" name="Cadastrar"/>
		</fieldset>
	</form>
	
	<table>
		<tr>
			<th>Tarefas</th>
		</tr>
		<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>