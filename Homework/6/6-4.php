<?php
$m=rand(2, 5);
$n=rand(2, 5);
$array=array(array());
$min=array();
$sum=0;
echo "The array:";
echo '<br/>';
for ($i=0; $i<$m; $i++){
	for($j=0;$j<$n;$j++){ 
	   $array[$i][$j]=rand(1,100);
	   echo $array[$i][$j]." ";
	}
	echo '<br/>';
}
echo '<br/>';
for ($i=0; $i<$n; $i++){
	$min[$i]=$array[0][$i];
    for($j=0;$j<$m;$j++){ 
    	
	   	if ($min[$i]>$array[$j][$i]){
	    $min[$i] = $array[$j][$i];
	    }
	}
}
echo '<br/>';
for ($i=0; $i<count($min); $i++) { 
	echo $min[$i].' ';
	$sum+=$min[$i];
}
echo '<br/>';
echo 'The sum is: '.$sum;
?>
