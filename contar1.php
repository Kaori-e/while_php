<?php
	$numero = $_POST['numero'];
	$numero = intval($numero);

	$i=0;

	while ($i<=$numero) {
		echo " A contagem esta em $i   <br>";

		$i++;
	}

?>