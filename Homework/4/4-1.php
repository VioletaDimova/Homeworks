<?php
$bonus=array('Lili'=>105,'Maria'=>50,'Ivo'=>234,'Martin'=>7,'Andrei'=>32);
echo "These are the monthly bonuses: <br>";

foreach($bonus as $x=>$y){
	$z=max($bonus);
	$t=array_keys($bonus, max($bonus));
	echo "$x:$y <br>";
}
$sec=$bonus['Lili'];
foreach($bonus as $x1=>$y1){
	if ($sec<$y1 && $y1<$z){
	$sec=$y1;
	$t1=array_keys($bonus, $sec);
	}
}
echo "The biggest bonus is <strong> $z </strong>, made by <strong> $t[0]. </strong> <br>";
echo "The second one is <strong> $sec </strong>.";
?>
