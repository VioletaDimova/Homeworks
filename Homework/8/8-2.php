<?php
function odd_even($num1, $num2){
    $outc=$num1*$num2;
    if ($outc%2==0){
    	echo "$num1*$num2=$outc - even <br/>";
    }
    else{
    	echo "$num1*$num2=$outc - odd <br/>";
    }
}
$n=3;
for ($i=0; $i<$n; $i++){
	$num1=rand(1,10);
    $num2=rand(1,10);
    odd_even($num1, $num2);
}
?>