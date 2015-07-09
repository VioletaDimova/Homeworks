<?php
$n=10;
$fr=1;
$sc=1;
echo "First $n fibonacci numbers:<br/>";
echo "$fr <br/>";
echo "$sc <br/>";
for($i=1;$i<=$n;$i++){ 
  $F=$fr+$sc;
  $fr=$sc;
  $sc=$F;
  print $F.'<br>';
}  
?>

