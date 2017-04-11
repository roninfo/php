
<?php
	function linhas($semana) {
		echo "<tr>";

		for ($i = 0; $i <= 6; $i++) {
			if (isset($semana[$i])) {
				if ($i == 0) {
					echo "<td><font color='red'>{$semana[$i]}</font></td>";
				} else if ($i == 6) {
					echo "<td><b>{$semana[$i]}</b></td>";
				} else {
					echo "<td>{$semana[$i]}</td>";
				}
			} else {
				echo "<td></td>";
			}
		}
			
		echo "</tr>";
	}

	function calendario() {
		$dia = 1;
		$semana = array();
		while ($dia <= 31) {
			if (date('d') == $dia) {
				array_push($semana, "<b>".$dia."</b>");
			} else {
				array_push($semana, $dia);
			}

			if (count($semana) == 7) {
				linhas($semana);
				$semana = array();
			}

			$dia++;
		}
		linhas($semana);
	}

	function hello() {
		if (date('H') <= 11) {
			echo "Bom dia!";
		} else if (date('H') <= 17) {
			echo "Boa tarde!";
		} else {
			echo "Boa noite!";
		}
	}
?>

<?php hello(); ?>
<table border="1">
	<tr>
		<td>Dom</td>
		<td>Seg</td>
		<td>Ter</td>
		<td>Qua</td>
		<td>Qui</td>
		<td>Sex</td>
		<td>Sab</td>
	</tr>
	<?php calendario(); ?>
</table>