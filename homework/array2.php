<?php
$array = [];
for($i = 0; $i < 10; $i++){
	$array[] = rand(0, 100);
}
echo implode(", ",$array);

$minValue = $array[0];
for($i = 1; $i < count($array); $i++){
	if($array[$i] < $minValue){
		$minValue = $array[$i];
	}
}
echo "<br />";
echo $minValue;
?>