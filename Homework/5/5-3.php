<html>
<form action="5-3.php" method="get" accept-charset="UTF-8">
колони:
<input type="text" name="cols"/> <br/>
редове:
<input type="text" name="rows"/> <br/>
<input type="submit" name="send" value="покажи"/>
</form>
</html>

<?php
if (!empty($_GET["cols"]) && !empty($_GET["rows"])){
$cols=$_GET["cols"];
$rows=$_GET["rows"];
echo '<table border="1">';
for($i=1;$i<=$cols;$i++){ 
  echo '<tr>'; 	
  for($j=1;$j<=$rows;$j++){ 
    echo '<td>'.$i.', '.$j.'</td>';
	}
	echo '</tr>';
}
echo '</table>';
}

if (empty($_GET["cols"]) && empty($_GET["rows"]) && !empty($_GET["send"])) {
	echo "Въведете брой колони и редове!";
}
?>


