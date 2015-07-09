<?php
session_start();
?>
<?php
if (!empty($_POST["user"]) && !empty($_POST["password"]) && !empty($_POST["send"])){
$u=$_POST["user"];
$p=$_POST["password"];
echo "Здравейте, $u, приятно пазаруване!. <br/>";  
echo '<a href="3-3_1.php">Избери продукти</a>';
}   
if (empty($_POST["user"]) && empty($_POST["password"]) && !empty($_POST["send"])) {
	echo '<div style="color:red;"> ВСИЧКИ ПОЛЕТА СА ЗАДЪЛЖИТЕЛНИ! </div>';
    }
  

?>
<!DOCTYPE html>
<html>
<head>
	<title>e-Mania</title>
</head>
<body>
<h3> ОНЛАЙН МАГАЗИН е-МАНИЯ </h3>
<form action="3-3.php" method="post" accept-charset="UTF-8">
Постребител:
<input type="text" name="user"/> <br/>
Парола:
<input type="text" name="password"/> <br/>
<input type="submit" name="send" value="влез"/>
</form>
</html>
