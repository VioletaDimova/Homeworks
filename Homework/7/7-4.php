<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="row col-xs-8 col-xs-offset-2">	
    <br/> 
<?php
$n=8;
$num=8;
$lett='A';
for ($i=0; $i<$n; $i++){
	for ($j=0; $j<$n; $j++){
		if (($i%2==0 && $j%2!=0) or ($i%2!=0 && $j%2==0)){
		     echo '<div class="col-xs-1 bg-primary">&nbsp</div>';
		} 
		else{
             echo '<div class="col-xs-1 bg-danger">&nbsp</div>';
		}  
		if ($j==0){
			 echo "$num";
			 $num--;
		}		
	}
	echo '<br/>'; 
}
for ($j=0; $j<$n; $j++){ 
    echo '<div class="col-xs-1">'.$lett.'</div>';
	$lett++;
		     }
?>
</div>
</body>
</html>