<?php
$array=array();
$n=5;
$first=5;
for ($i=0; $i<$n; $i++){
	$array[$i]=$first;
	$second=$first+5;
	$first=$second;
}
print_r($array);
?>