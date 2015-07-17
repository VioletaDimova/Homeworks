<?php
$arr=array(array());
function print_arr($arr){
	$M=rand(2, 5);
    $N=rand(2, 5);
	echo "M=$M, N=$N <br/>";
	echo '<table border="1">';
	for ($i=0; $i<$M; $i++){
		echo '<tr>';
		for($j=0;$j<$N; $j++){
			echo '<td>';
			$num=rand(1, 10);
			$arr[$i][$j]=$num;
			echo 'a['.$i.']['.$j.']='.$num.' ';
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
print_arr($arr);
?>