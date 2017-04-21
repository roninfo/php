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
		if (!isset($data)) {
			return '---';
		}

		$dataMySql = '';

		$aux = explode("-", $data);

		$dataMySql = "{$aux[2]}/{$aux[1]}/{$aux[0]}";

		return $dataMySql;
	}
	
	function convertDataToAmericano($data) {
		if (!isset($data)) {
			return '';
		}

		$dataMySql = '';

		$aux = explode("/", $data);

		$dataMySql = "{$aux[2]}-{$aux[1]}-{$aux[0]}";

		return $dataMySql;
	}

	function tem_post() {
		return (count($_POST) > 0) ? true : false; 
	}

	function validarData($data) {
		$regex = "/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/";
		$resultado = preg_match($regex, $data);

		if (!$resultado) {
			return false;
		}

		$dados = explode('-', $data);

		$resultdo = checkdate($dados[1], $dados[2], $dados[0]);

		return $resultado;
	}
?>