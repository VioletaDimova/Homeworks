<?php 

$num=14;
$num2=50;
echo "These are the numbers devisible by 3 or 7 in the interval ($num, $num2): ";
echo "</br>";
for($i=$num;$i<=$num2;$i++){
	if (($num%3==0)or($num%7==0)){
		echo "$num ";
	}	
		$num++;
}

?>