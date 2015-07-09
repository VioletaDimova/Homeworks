<?php
if (!empty($_GET["event"]) && !empty($_GET["town"])){
$e=$_GET["event"];
$t=$_GET["town"];
    if ($e=="movie" && $t=="Sofia"){
    	echo "Отвътре навън";
    }

    if ($e=="theater" && $t=="Plovdiv"){
    	echo "Възвишение";
    }
    if ($e=="exhibition" && $t=="Varna"){
    	echo "Варна Фото Фест 2015";
    }
    if ($e=="concert" && $t=="Burgas"){
    	echo "Dubfire";
    }
    
    if (($e=="movie" && $t=="Plovdiv") or ($e=="movie" && $t=="Varna") or ($e=="movie" && $t=="Burgas") or 
    	($e=="theater" && $t=="Sofia") or ($e=="theater" && $t=="Varna") or ($e=="theater" && $t=="Burgas") or
    	($e=="exhibition" && $t=="Plovdiv") or ($e=="exhibition" && $t=="Plovdiv") or ($e=="exhibition" && $t=="Burgas") or
    	($e=="concert" && $t=="Plovdiv") or ($e=="concert" && $t=="Varna") or ($e=="concert" && $t=="Sofia")) {
    	echo "Няма събития за показване.";
    }
    
}
else {
	echo "ИЗБЕРЕТЕ СЪБИТИЕ И ГРАД!";
    }

?>
<html>
<form action="3-1.php" method="get" accept-charset="UTF-8">
Събитие:	
<input type="radio" name="event" value="movie"/>Кино
<input type="radio" name="event" value="theater"/>Театър
<input type="radio" name="event" value="exhibition"/>Изложба
<input type="radio" name="event" value="concert"/>Концерт
<br/>
Град:
<select name="town">
<option value="Sofia">София</option>
<option value="Plovdiv">Пловдив</option>
<option value="Varna">Варна</option>
<option value="Burgas">Бургас</option>
</select>
<br/>
<input type="submit" name="send" value="Покажи"/>
</form>
</html>
