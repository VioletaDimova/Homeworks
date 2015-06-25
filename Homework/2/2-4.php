<?php
$a=5;
$b=-2;
$p=$a+$b;
echo "a = $a, b = $b <br/>";
if ($p>=0){
	echo "a + b = $p = possitive";
}
else {
	echo "a + b = $p = negative";
}
echo "<br/>";
if ($a>=$b){
	if ($a>=0){
	echo "a + b = $p = possitive";	
	}
	else{
		echo "a + b = $p = negative";
	}
}	
else{
	if ($b>=0){
		echo "a + b = $p = possitive";	
	}
	else{
		echo "a + b = $p = negative";
	}
}
?>