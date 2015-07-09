<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>e-Mania</title>
</head>
<body>
<h2> ОНЛАЙН МАГАЗИН е-МАНИЯ </h2>
<?php
	if (isset($_GET['opt'])) {
		$opt=$_GET['opt'];
		if ($opt==1) {
			echo '<font color="green">Успешно закупихте: '.$_SESSION['orderInfo']['products'].' за '.$_SESSION['orderInfo']['total'].'лв</font>';
		}else{
			echo '<font color="orange">Отказахте поръчка: '.$_SESSION['orderInfo']['products'].' за '.$_SESSION['orderInfo']['total'].'лв</font>';
		}
	}else{
	$productsPrices=array('product1'=>489, 'product2'=>141, 'product3'=>86, 'product4'=>188, 'product5'=>110);
	$productsNames=array('product1'=>'Dell Inspiron 3531', 'product2'=>'eBook четец Kindle 6"', 'product3'=>'Слушалки E-Boda The Beat 1000', 'product4'=>'Навигационна система Garmin Nuvi 44LM', 'product5'=>'Таблет Wink One SE');
	if (!empty($_POST)) {
		$products=$_POST['products'];
		$card=$_POST['card'];
		$sum=$_POST['sum'];
		$total=0;
		foreach ($products as $value) {
			$total+=$productsPrices['product'.$value];
		}
		$vProducts='';
		foreach ($products as $value) {
			$vProducts.=$productsNames['product'.$value].',';
		}
		$vProducts=substr($vProducts, 0, -1);
		if ($total > $sum) {
			echo '<font color="red">Нямате достатъчно пари за тази поръчка!</font>';
		}else{
			$overage=$sum-$total;
			echo 'Ще купите: '.$vProducts.'. Оставаща сума:'.$overage.'лв';
			echo '<br/> <a href="3-3_1.php?opt=1">Потвърди</a> | <a href="3-3_1.php?opt=2">Откажи</a>';
			$orderInfo=array('products'=>$vProducts, 'total'=>$total);
			$_SESSION['orderInfo']=$orderInfo;
		}
	}else{
	?>
<form action="3-3_1.php" method="post" accept-charset="UTF-8">
Налични продукти:	
<br/>
<input type="checkbox" name="products[]" value="1"/> Dell Inspiron 3531, 489лв
<br/>
<input type="checkbox" name="products[]" value="2"/>eBook четец Kindle 6", 141лв
<br/>
<input type="checkbox" name="products[]" value="3"/>Слушалки E-Boda The Beat 1000, 86лв
<br/>
<input type="checkbox" name="products[]" value="4"/>Навигационна система Garmin Nuvi 44LM, 188лв
<br/>
<input type="checkbox" name="products[]" value="5"/>Таблет Wink One SE, 110лв 
<br/>
Номер на карта: 
<input type="text" name="card" >
<br/>
Налична сума:
<input type="text" name="sum" >
<br/>
<input type="submit" name="buy" value="Купи"/>
</form>
<?php
	}
	}
?>
</body>
</html>
