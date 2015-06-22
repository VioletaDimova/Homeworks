<?php
$e1=6;
$e2=1;
$e3=0;
$e4=1;
$e5=0;
$e6=3;
$e7=8;
$e8=5;
$e9=0;

$a=2*$e1;
$b=4*$e2;
$c=8*$e3;
$d=5*$e4;
$e=10*$e5;
$f=9*$e6;
$g=7*$e7;
$h=3*$e8;
$i=6*$e9;

$SUM=$a+$b+$c+$d+$e+$f+$g+$h+$i;

$OST=$SUM%11;


if ($OST<"10"){
	$e10=$OST;
} else {
	$e10=0;
}	

echo "First nine numbers given: $e1$e2$e3$e4$e5$e6$e7$e8$e9 <br>";
echo "All ten numbers: $e1$e2$e3$e4$e5$e6$e7$e8$e9$e10";

?>