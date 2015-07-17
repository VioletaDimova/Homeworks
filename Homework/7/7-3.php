
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="btn-group">
  <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Programming <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="7-3.php?lang=php">PHP</a></li>
    <li><a href="7-3.php?lang=js">JavaScript</a></li>
    <li><a href="7-3.php?lang=java">Java</a></li>
  </ul>
</div>
<?php
if (!empty($_GET["lang"])){
$lang=$_GET["lang"];	
if ($lang=="php"){
	echo "PHP is a scripting language designed to fill the gap between 
	SSI (Server Side Includes) and Perl, intended for the Web environment. 
	Its principal application is the implementation of Web pages having 
	dynamic content. PHP has gained quite a following in recent times, and 
	it is one of the frontrunners in the Open Source software movement. 
	Its popularity derives from its C-like syntax, and its simplicity. The 
	newest version of PHP is 5.5 and it is heavily recommended to always use 
	the newest version for better security, performance and of course features.
    If you've been to a website that prompts you to login, you've probably 
	encountered a server-side scripting language. Due to its market saturation, 
	this means you've probably come across PHP. PHP was designed by Rasmus Lerdorf 
	to display his resume online and to collect data from his visitors.";
}
else if ($lang=="js"){
	echo "JavaScript is the programming language of HTML and the Web. 
	Programming makes computers do what you want them to do.
	JavaScript is easy to learn.
	This tutorial will teach you JavaScript from basic to advanced.";
}
else if ($lang=="java"){
	echo "Java is a general-purpose computer programming language that is concurrent, 
	class-based, object-oriented, and specifically designed to have as few 
	implementation dependencies as possible. It is intended to let application 
	developers".'"write once, run anywhere"'." (WORA), meaning that compiled Java 
	code can run on all platforms that support Java without the need for recompilation.
	Java applications are typically compiled to bytecode that can run on any Java virtual
	machine (JVM) regardless of computer architecture. As of 2015, Java is one of the
	most popular programming languages in use, particularly for 
    client-server web applications, with a reported 9 million developers.[citation 
	needed] Java was originally developed by James Gosling at Sun Microsystems (
	which has since been acquired by Oracle Corporation) and released in 1995 as a 
    core component of Sun Microsystems' Java platform. The language derives much of 
	its syntax from C and C++, but it has fewer low-level facilities than either of them.";
}
}
?>
</body>
</html>