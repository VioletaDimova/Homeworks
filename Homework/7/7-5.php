<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="jquery-1.11.3.min.js"></script>
</head>
<?php
$site=array(array());
      
    $site[0][0]="Google";
    $site[0][1]="The most-used search engine on the World Wide Web.";
    $site[0][2]="Developed by: Larry Page & Sergey Brin";
    $site[0][3]="Users: more than three billion searches each day";
    $site[0][4]="Technology: Python, C++";
    $site[0][5]="https://upload.wikimedia.org/wikipedia/commons/a/aa/Logo_Google_2013_Official.svg";

    
    $site[1][0]="Facebook";
    $site[1][1]="An online social networking service headquartered in Menlo Park, California.";
    $site[1][2]="Developed by: Mark Zuckerberg";
    $site[1][3]="Users: 1.44 billion monthly active";
    $site[1][4]="Technology: C++, PHP (as HHVM) and D language";
    $site[1][5]="https://upload.wikimedia.org/wikipedia/commons/7/7c/Facebook_New_Logo_%282015%29.svg";
    
    
    $site[2][0]="You tube";
    $site[2][1]="А video-sharing website headquartered in San Bruno, California, United States.";
    $site[2][2]="Developed by: Steve Chen and Chad Hurley";
    $site[2][3]="Users: 800 million unique users a month";
    $site[2][4]="Technology: Python and proprietary JavaScript";
    $site[2][5]="https://upload.wikimedia.org/wikipedia/commons/0/06/YouTube_logo_2013.svg";
    
    
    $site[3][0]="Wikipedia";
    $site[3][1]="A free-access, free-content Internet encyclopedia, supported and hosted by the non-profit Wikimedia Foundation.";
    $site[3][2]="";
    $site[3][3]="Users: 72,592 active editors (May 2015), 25,724,291 total accounts.";
    $site[3][4]="Technology: PHP";
    $site[3][5]="https://upload.wikimedia.org/wikipedia/en/8/80/Wikipedia-logo-v2.svg";
    
    
    $site[4][0]="Amazon";
    $site[4][1]="Тhe largest Internet-based retailer in the United States.";
    $site[4][2]="Developed by: Jeff Bezos";
    $site[4][3]="";
    $site[4][4]="Technology: C++ and Java";
    $site[4][5]="https://upload.wikimedia.org/wikipedia/commons/6/62/Amazon.com-Logo.svg";
  


?>

<body>
<h3> Popular web sites </h3>  
<div class="list-group">
  <a href="7-5.php?site1=google" class="list-group-item active"><?php echo $site[0][0]; ?></a>
  <a href="7-5.php?site1=facebook" class="list-group-item"><?php echo $site[1][0]; ?></a>
  <a href="7-5.php?site1=youtube" class="list-group-item"><?php echo $site[2][0]; ?></a>
  <a href="7-5.php?site1=wikipedia" class="list-group-item"><?php echo $site[3][0]; ?></a>
  <a href="7-5.php?site1=amazon" class="list-group-item"><?php echo $site[4][0]; ?></a>
</div>
  <?php
  if (!empty($_GET["site1"])){
    $site1=$_GET["site1"];
    echo "<br/>";
    if ($site1=="google"){
       for ($j=0; $j<5; $j++){  
        echo $site[0][$j]." ";
        echo "<br/>";
      }
      echo '<img src=" '.$site[0][5].' " height=' ."10% ".  '>';
   }  
      
    if ($site1=="facebook"){
       for ($j=0; $j<5; $j++){  
        echo $site[1][$j]." ";
        echo "<br/>";
      }
      echo '<img src="'.$site[1][5].' " height=' ."10% ".  '>';
    } 
      
    if ($site1=="youtube"){
       for ($j=0; $j<5; $j++){  
        echo $site[2][$j]." ";
        echo "<br/>";
      }
      echo '<img src="'.$site[2][5].' " height=' ."10% ".  '>';
    } 
      
    if ($site1=="wikipedia"){
       for ($j=0; $j<5; $j++){  
        echo $site[3][$j]." ";
        echo "<br/>";
      }
      echo '<img src="'.$site[3][5].' " height=' ."10% ".  '>';
    } 
      
    if ($site1=="amazon"){
       for ($j=0; $j<5; $j++){  
        echo $site[4][$j]." ";
        echo "<br/>";
      }
      echo '<img src="'.$site[4][5].' " height=' ."10% ".  '>';
    } 
  }   
  ?> 
</body>
</html>


