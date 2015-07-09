<?php
$n=5;
$counter = 0; 
for($i=1;$i<=$n;$i++){ 
  if($n % $i==0){ 
    $counter++;
  }
}
if($counter==2){
  print $n." is prime. <br/>";
  }
else {
  print $n." is NOT prime.";
}  
?>