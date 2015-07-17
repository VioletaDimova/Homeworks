<?php
$array=array('56', '30', '-1', '100', '34', '-2');
print_r($array);
function cmp(&$a, &$b){
	if ($a>$b){
		$c=$b;
		$b=$a;
		$a=$c;
	}
}

for ($i=0; $i<count($array)-1; $i++){
	for ($j=0; $j<count($array)-1; $j++){
		cmp ($array[$j], $array[$j+1]);
	}
}
echo "<br/>";
print_r($array);	
?>