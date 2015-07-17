<?php
$array=array();
$N=rand(5,15);
for ($i=0; $i<$N; $i++){
	$array[$i]=rand(1, 20);
}
print_r($array);
?>