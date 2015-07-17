<?php
//first
$m=4;
$n=5;
$num=2;
$array=array(array());
for ($i=0; $i<$m; $i++){
	for ($j=0; $j<$n; $j++){
		$array[$i][$j]=$num;
        echo "$num ";
        $num++;
    }
    echo "<br/>";
}
echo "<br/>";
//second
$m=4;
$n=6;
$num=1;
$array=array(array());
for ($i=0; $i<$m; $i++){
	for ($j=0; $j<$n; $j++){
		$array[$i][$j]=$num;
        echo "$num ";
        $num++;
        $num++;
    }
    $num=2*$i+3;
    echo "<br/>";
}
?>