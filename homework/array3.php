<?php

$array = [1,2,3,4,5];
shuffle($array);
echo implode(", ", $array);
echo "<br />";
echo $array[2];

?>