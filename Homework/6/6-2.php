<?php
$sum=0;
$sum1=0;
$sum2=0;
$array=array();
for ($i=0; $i<10; $i++){
	$array[$i]=rand(1,100);
	$sum += $array[$i];
	if ($i%2==0){
		$sum1 += $array[$i];
	}
	else {
		$sum2 += $array[$i];
	}
}
print_r($array);
echo "<br/>";
echo "Сумата на всички елементи на масива е $sum.";
echo "<br/>";
echo "Сумата на четните елементи на масива е $sum1.";
echo "<br/>";
echo "Сумата на нечетните елементи на масива е $sum2.";
echo "<br/>";
if ($sum1>$sum2){
	echo "четни > нечетни";
}
else {
	echo "четни < нечетни";
}

?>