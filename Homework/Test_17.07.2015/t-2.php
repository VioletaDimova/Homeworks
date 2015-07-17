<?php
$array=array();
$n=rand(3,10);
$first=11;
$sum=0;
echo "<ol>";
for ($i=0; $i<$n; $i++){
	$array[$i]=$first;
	$sum+=$first;
	$first++;
	echo "<li>".$array[$i]."</li>";
}
echo "</ol>";
print_r($array);
echo "<br/> The sum of the elements is $sum.";
?>