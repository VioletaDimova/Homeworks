<?php 
echo "These are the numbers devisible by 3 or 7: ";
echo "</br>";
$num=14;
while($num<50){
	if (($num%3==0)or($num%7==0)){
		echo "$num ";
	}	
		$num++;
}

?>