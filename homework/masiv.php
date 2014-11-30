<?php
		 // 0 1 2 3
$array = [5,7,9,8,7,  54,23,76,789,5,8,345,34,76,3,6,54,34,13,12];
echo implode(", ", $array);
echo "<br />";
sort($array);
echo implode(", ", $array);
echo "<br />";


?>