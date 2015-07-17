<?php
//a
echo '<table border="1">';
$x=5;
$array=array(array());
for($i=0;$i<3;$i++){ 
  echo "<tr>"; 	
  for($j=0;$j<4;$j++){ 
    echo "<td>$x</td>";
    $array[$i][$j]=$x;
    $x++;
	}
	echo "</tr>";
}
echo "</table>";
print_r($array);
echo "<br/>";
//b
echo '<table border="1">';
$y=1;
for($i=0;$i<4;$i++){ 
  echo "<tr>";
  if ($i==0){ 	
    for($j=0;$j<4;$j++){ 
      echo "<td>$y</td>";
      $array[$i][$j]=$y;
      $y++;
    }
  }  
  else if ($i==1){
    $y=-8;
    for($j=0;$j<4;$j++){ 
    echo "<td>$y</td>";
    $array[$i][$j]=$y;
    $y++;
    }
  }
  else if ($i==2){
    $y=10;
    for($j=0;$j<4;$j++){ 
    echo "<td>$y</td>";
    $array[$i][$j]=$y;
    $y++;
    }
  }
  else if ($i==3){
    $y=-26;
    for($j=0;$j<4;$j++){ 
    echo "<td>$y</td>";
    $array[$i][$j]=$y;
    $y++;
    }
  }  
  echo "</tr>";
}
echo "</table>";
print_r($array);
echo "<br/>";
//c
echo '<table border="1">';
$x=1;
$array=array(array());
for($i=0;$i<4;$i++){ 
  echo "<tr>";  
  $m=$i+1;
  for($j=0;$j<$m;$j++){ 
    echo "<td>$x</td>";
    $array[$i][$j]=$x;
    $x++;
  }
  $x=1;
  for($j>$m;$j<4;$j++){
    echo "<td>0</td>";
    $array[$i][$j]=0;
  }
  echo "</tr>";
}
echo "</table>";
print_r($array);
echo "<br/>";
//d
$array = array(array());
$spiral = array(array(0,0), array(0,1), array(0,2), array(0,3), array(1,3), array(2,3), array(3,3), array(3,2), 
  array(3,1), array(3,0), array(2,0), array(1,0), array(1,1), array(1,2), array(2,2), array(2,1));
$x=1;
for ($i=0; $i < count($spiral); $i++) { 
  $array[$spiral[$i][0]][$spiral[$i][1]]=$x;
  $x++;
}
echo '<table border="1">';
for ($i=0; $i<4 ; $i++) {
  echo '<tr>';
  for ($j=0; $j<4 ; $j++) {
    echo '<td>'.$array[$i][$j].'</td>';
  }
  echo '</tr>';
}
echo '</table>';
print_r($array);
?>