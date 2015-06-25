<?php
$a=5;
$b=15;
$c=-10;

if ($a>$b && $a>$c){
	if ("$b>$c"){
	    echo ("$a, $b, $c");
    }
    else {
        echo ("$a, $c, $b");
    }
}
else if ($b>$a && $b>$c){
	if ($a>$c){
	echo ("$b,$a,$c");
}
    else {
    	echo ("$b,$c,$a");
    } 
}
else{
	if ($b>$a){
		echo ("$c,$b,$a");
	}
	else{
		echo ("$c,$a,$b");
	}		
}
?>
