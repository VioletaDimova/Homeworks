<?php
$arr1=array('5 ', '100 ', '13 ', '25 ', '1');
$arr2=array('8 ', '52 ', '3 ', '46 ', '-2', '23');
print_r($arr1);
echo "<br/>";
print_r($arr2);
echo "<br/>";
function sum_array($arr1, $arr2){
	$arrSum=array();
	$num1=count($arr1);
	$num2=count($arr2);
	if ($num1==$num2){
		for ($i=0; $i<$num1; $i++){
			$arrSum[$i]=$arr1[$i]+$arr2[$i];
		}
    }
    if ($num1>$num2){
    	$t=$num1-$num2;
		for ($i=0; $i<$num2; $i++){
			$arrSum[$i]=$arr1[$i]+$arr2[$i];
		}
		for ($i=0; $i<$t; $i++){
			$arrSum[$num2]=$arr1[$num2];
			$num2++;
		}
    }
    if ($num1<$num2){
    	$t=$num2-$num1;
		for ($i=0; $i<$num1; $i++){
			$arrSum[$i]=$arr1[$i]+$arr2[$i];
		}
		for ($i=0; $i<$t; $i++){
			$arrSum[$num1]=$arr2[$num1];
			$num1++;
		}
    }
	print_r($arrSum);		
}
sum_array($arr1, $arr2);
?>