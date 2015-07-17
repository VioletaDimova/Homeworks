<?php
$arr1=array('5 ', '100 ', '13 ', '25 ', '1');
$arr2=array('8 ', '52 ', '3 ', '46 ', '13' );
function print_array($arr1){
	$sum=0;
	$num=count($arr1);
	echo "The numbers of the array are: ";
	for ($i=0; $i<$num; $i++){
		print_r($arr1[$i]);
		if ($i%2==0){
			$sum+=$arr1[$i];
		}
	}
echo "<br/>";	
echo "The sum is $sum <br/>";						
}
print_array($arr1);
print_array($arr2);

?>