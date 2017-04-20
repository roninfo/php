<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Gerenciador de Tarefas</title>
	<link href='css/tarefas.css' rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>Gerenciador de tarefas</h1>
	<?php include('formulario.php'); ?>

	<?php if ($exibir_tabela) : ?>
		<?php include('tabela.php'); ?>
	<?php endif; ?>

</body>
</html>