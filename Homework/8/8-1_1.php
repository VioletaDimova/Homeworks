<?php
//b
function print_array($ol, $li){
	$array=array('Home', 'About', 'Projects', 'Contact');
	$num=count($array);
	echo "<$ol>";
	for ($i=0; $i<$num; $i++){
	   echo "<$li>".$array[$i]."</$li>";
    } 
    echo "</$ol>";  
}
print_array('ol', 'li');
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <?php print_array('ul', 'li'); ?>
  </ul>
</div>
</body>
</html>