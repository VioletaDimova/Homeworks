<?php
$a=5;
$b=7;
$p=$a*$b;
echo "a=$a, b=$b <br/>";
if ($p%2==0){
	echo "a*b=$p=even";
}
else{
	echo "a*b=$p=odd";
}
echo "<br/>";
if ($a%2==0 or $b%2==0){
	echo "a*b=$p=even";
}
else {
	echo "a*b=$p=odd";
}
?>