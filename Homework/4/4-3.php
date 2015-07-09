<?php
$some_text="PHP is a server-side scripting language created in 
1995 and designed for web development but also used as a general-purpose 
programming language. As of January 2013, PHP was installed on more than 
240 million websites (39% of those sampled) and 2.1 million web servers. 
Originally created by Rasmus Lerdorf in 1994, the reference implementation 
of PHP (powered by the Zend Engine) is now produced by The PHP Group. While 
PHP originally stood for Personal Home Page, it now stands for PHP: Hypertext 
Preprocessor, which is a recursive backronym.";
$in_colours=explode(' ', $some_text);
$counter=1;
echo '<div style="background-color: #A8A8A8;">';
foreach ($in_colours as $val) {
  if ($counter == 1) {
    echo '<span style="color: white;">'.$val.'</span> ';
  } elseif ($counter == 2) {
    echo '<span style="color: green;">'.$val.'</span> ';
  } elseif ($counter == 3) {
    echo '<span style="color: red;">'.$val.'</span> ';
    $counter = 0;
  }
  $counter++;
}
echo '</div>';
?>
