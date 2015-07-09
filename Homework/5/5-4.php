<?php
$n=10;
echo '<table border="1">';
for($i=1;$i<=$n;$i++){ 
  echo '<tr>'; 	
  for($j=1;$j<=$i;$j++){ 
  	$l=$i*$j;
  	    echo '<td>'.$i.' * '.$j.' = '.$l.'</td>';
    }
    if ($i != 10) {
    	$t=$n-$i;
		echo '<td colspan="'.$t.'">&nbsp;</td>';
	}
	echo '</tr>';
}
echo '</table>';

?>

