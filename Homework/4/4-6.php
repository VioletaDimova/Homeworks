<?php
$count1 = 0;
$n = 10;
while ($count1 < $n) {
	$count2 = 0;
	while ($count2 <= $count1) {
		echo 'a ';
		$count2++;
	}
	echo '<br/>';
	$count1++;
}
?>