<?php
	
	$randNumber = rand(0, 13);
	$factorial = 1;
	for($i = $randNumber; $i > 0; $i--){
		$factorial *= $i;
	}
	echo $factorial;
	
?>