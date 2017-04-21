<form method="POST">
	<input type="hidden" name="id" value="<?php echo $tarefas['id']; ?>"/>
	<fieldset>
		<legend>
			Nova tarefa
		</legend>
		<label>Tarefa: 
			<input type="text" name="nome" required
				<?php echo ($disabled) ? 'disabled' : '';?> 
				value="<?php echo $tarefas['nome']; ?>" /></label>

		<label> Descrição: 
			<textarea name="descricao" <?php echo ($disabled) ? 'disabled' : '';?>><?php echo $tarefas['descricao']; ?> 
			</textarea></label>

		<label> Prazo: 
			<input type="date" name="prazo" 
			<?php echo ($disabled) ? 'disabled' : '';?>
			value="<?php echo $tarefas['prazo'];?>"/></label>

		<fieldset>
			<legend>Prioridade:</legend>
			<label><input type="radio" name="prioridade" value="1"
				<?php echo $disabled ? 'disabled' : '';?>
				<?php echo ($tarefas['prioridade'] == 1) ? 'checked' : ''; ?> />Baixa</label>
			<label><input type="radio" name="prioridade" value="2" 
				<?php echo $disabled ? 'disabled' : '';?>
				<?php echo ($tarefas['prioridade'] == 2) ? 'checked' : ''; ?>/>Média</label>
			<label><input type="radio" name="prioridade" value="3" 
				<?php echo $disabled ? 'disabled' : '';?>
				<?php echo ($tarefas['prioridade'] == 3) ? 'checked' : ''; ?>/>Alta</label>
		</fieldset>
		<label>Tarefa concluída: <input type="checkbox" name="concluida" value="1" 
			<?php echo $disabled ? 'disabled' : '';?>
			<?php echo ($tarefas['concluida'] == 1) ? 'checked' : ''; ?>/></label>
		
		<input type="submit" name="Cadastrar" value="<?php if ($disabled) : ?><?php echo 'excluir'; ?><?php else : ?><?php echo ($tarefas['id'] > 0) ? 'editar' : 'cadastrar'; ?><?php endif; ?>"/>

		<?php if (isset($_GET['id']) && $_GET['id'] > 0) : ?>
			<input type="button" name="voltar" value="voltar" 
			onclick="window.location='tarefas.php'" />
		<?php endif;?>
	</fieldset>
</form>