<?php
$x=1;
$y=2;
if ($x<2 && $x>-2 && $y<2 && $y>-2 or $x==2 or $x==-2 or $y==2 or $y==-2){
	echo "Point ($x, $y) <br/>";
	echo "The point is inside K({0,0}, 2).";
}
else {
	echo "Point ($x, $y) <br/>";
	echo "The point is outside K({0,0}, 2).";
}
?>