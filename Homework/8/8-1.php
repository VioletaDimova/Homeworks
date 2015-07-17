<?php
//a
function print_num(){
	$fr=42;
	$ls=11;
    $num=$fr-$ls+1;
    for ($i=0; $i<$num; $i++){
	    echo "$fr ";
	    $fr--;
    }
}
print_num();
?>
<h4> <?php print_num(); ?> </h4>
<label style="color:blue"> <?php print_num(); ?> </label>



