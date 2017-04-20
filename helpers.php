<?php 
	function prioridade($prioridade) {
		$retorno = "";
		switch ($prioridade) {
			
			case 1:
				$retorno = "Baixa";
				break;
			
			case 2:
				$retorno = "Média";
				break;

			case 3:
				$retorno = "Alta";
				break;

			default:
				$retorno = "---";
				break;
		}

		return $retorno;
	}

	function concluido($concluido) {
		$retorno = "";
		switch ($concluido) {
			case 1:
				$retorno = "sim";
				break;
			case 2:
				$retorno = "não";
				break;

			default:
				$retorno = "---";
				break;
		}

		return $retorno;
	}
	
?>