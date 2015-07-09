<?php
function prima($n){
  for($i=1;$i<=$n;$i++){ 
          $counter = 0; 
          for($j=1;$j<=$i;$j++){ 
                if($i % $j==0){ 
                      $counter++;
                }
          }
        if($counter==2){
               print $i." is prime <br/>";
        }
    }
} 

prima(100);
$n = 17;
$i = 2;
$check = true;
while ($i < $n) {
	if ($n % $i == 0) {
		$check = false;
		break;
	}
	$i++;
}
if ($check == true) {
	echo $n.' is prime!';
}else{
	echo $n.' isn'."'t prime!";
}

?>