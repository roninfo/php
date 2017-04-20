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
			case 0:
				$retorno = "não";
				break;

			default:
				$retorno = "---";
				break;
		}

		return $retorno;
	}

	function convertData($data) {
		$dataMySql = '';

		$aux = explode("-", $data);

		$dataMySql = "{$aux[2]}/{$aux[1]}/{$aux[0]}";

		return $dataMySql;
	}
	
?>