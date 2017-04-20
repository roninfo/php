<form>
	<input type="hidden" name="id" value="<?php echo $tarefas['id']; ?>"/>
	<fieldset>
		<legend>
			Nova tarefa
		</legend>
		<label>Tarefa: <input type="text" name="nome" /></label>

		<label> Descrição: <textarea name="descricao"> </textarea></label>
		<label> Prazo: <input type="date" name="prazo" /></label>
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