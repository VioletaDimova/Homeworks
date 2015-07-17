<?php
//first
$m=3;
$n=5;
$num=2;
$array=array(array());
for ($i=0; $i<$m; $i++){
	for ($j=0; $j<$n; $j++){
		$array[$i][$j]=$num;
        echo "$num ";
        $num++;
        $num++;
    }
    echo "<br/>";
}
echo "<br/>";
//second
$m=3;
$n=4;
$num=36;
$array=array(array());
for ($i=0; $i<$m; $i++){
	for ($j=0; $j<$n; $j++){
		$array[$i][$j]=$num;
        echo "$num ";
        $num1=$num-3;
        $num=$num1;
    }
    echo "<br/>";
}
echo "<br/>";
//third
$m=4;
$n=5;
$num=1;
$array=array(array());
for ($i=0; $i<$m; $i++){
	for ($j=0; $j<$n; $j++){
		$array[$i][$j]=$num;
        echo "$num ";
        $num1=$num+4;
        $num=$num1;
    }
    $num=$i+2;
    echo "<br/>";
}
?>