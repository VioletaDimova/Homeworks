<?php
$text="PHP code can be simply mixed with HTML code, or it can be used in combination with 
various templating engines and web frameworks. PHP code is usually processed by a PHP 
interpreter, which is usually implemented as a web server's native module or a Common Gateway 
Interface (CGI) executable. After the PHP code is interpreted and executed, the web server 
sends resulting output to its client, usually in form of a part of the generated web page; 
for example, PHP code can generate a web page's HTML code, an image, or some other data. 
PHP has also evolved to include a command-line interface (CLI) capability and can be used 
in standalone graphical applications.";
$text2 = $text;
$num = 0;
while ($num < strlen($text)) {
	switch ($text[$num]) {
		case 'a':
			$text2[$num] = '@';
			break;
		case 'e':
			$text2[$num] = '3';
			break;
		default:
			continue;
			break;
	}
	$num++;
}
echo $text.'<br/> <br/>'.$text2.'<br/> <br/>';
$text3 = $text2;
$num = 0;
while ($num < strlen($text2)) {
	switch ($text2[$num]) {
		case '@':
			$text3[$num] = 'a';
			break;
		case '3':
			$text3[$num] = 'e';
			break;
		default:
			continue;
			break;
	}
	$num++;
}
echo $text3;
?>