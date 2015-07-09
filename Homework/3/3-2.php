<?php
echo "Регистрационна форма <br/>";

if (!empty($_POST["user"]) && !empty($_POST["password"]) && !empty($_POST["e-mail"]) && !empty($_POST["interests"])){
$u=$_POST["user"];
$p=$_POST["password"];
$e=$_POST["e-mail"];
$i=$_POST["interests"];
echo "Здравейте, $u, за пълна регистрация е необходимо потвърждение от посочения е-майл: $e. <br/>";  
if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
    echo "Посоченият ($e) и-мейл е валиден.";
} 
if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
    echo '<div style="color:red;">Посочения и-мейл ('.$e.') НЕ е валиден.</div>';
} 
}   
else {
	echo "ВСИЧКИ ПОЛЕТА СА ЗАДЪЛЖИТЕЛНИ!";
    }
  

?>
<html>
<form action="3-2.php" method="post" accept-charset="UTF-8">
Постребител:
<input type="text" name="user"> <br/>
Парола:
<input type="text" name="password"> <br/>
И-мейл:
<input type="text" name="e-mail"> <br/>
Интереси:	
<input type="checkbox" name="interests" value="movie"/>Кино
<input type="checkbox" name="interests" value="art"/>Изкуство
<input type="checkbox" name="interests" value="music"/>Музика
<input type="checkbox" name="interests" value="sport"/>Спорт
<br/>
<input type="submit" name="send" value="Изпрати"/>
</form>
</html>
