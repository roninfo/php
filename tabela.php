<table>
	<tr>
		<th>Tarefas</th>
		<th>Descrição</th>
		<th>Prazo</th>
		<th>Prioridade</th>
		<th>Concluído</th>
		<th>Opções</th>
	</tr>
	<?php foreach ($lista_tarefas as $tarefa) : ?>
		<tr>
			<td><?php echo $tarefa['nome']; ?></td>
			<td><?php echo $tarefa['descricao']; ?></td>
			<td><?php echo convertData($tarefa['prazo']); ?></td>
			<td><?php echo prioridade($tarefa['prioridade']); ?></td>
			<td><?php echo concluido($tarefa['concluida']); ?></td>
			<td>
				<a href="editar.php?id=<?php echo $tarefa['id']; ?>">editar</a>
				<a href="editar.php?disabled=true&id=<?php echo $tarefa['id']; ?>">excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>