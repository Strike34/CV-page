<?php
$host  = "localhost";
$user  = "root";
$password = "";
$db_name = "datetime";
$con = mysqli_connect($host, $user, $password, $db_name);  
$sql = "SELECT date, time, title, text FROM datetime";
$result = $con->query($sql);
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Portfolio</title>
<link rel="stylesheet" href="resetport.css">
<link rel="stylesheet" href="stylezaebal.css">
<script src="script.js"></script>
</head>
<body>
<header>
<nav>
    <h1 class="title"><span>My</span>Portfolio</h1>
    <ul>
    <h1> The result page! </h1>

<div id="results">
 <div id="resultss">   
    <?php while($row = $result->fetch_assoc()){?>
 <h4> <?php echo "Date: " . $row["date"]; ?>  </h4>
  
  <h4> <?php echo " -Time: " . $row["time"]; ?></h4>
 
  <h4> <?php echo " Title: " . $row["title"]; ?> </h4>
 
  <h4> <?php echo " Text: " . $row["text"]; ?> </h4>
  
  
  <hr id="hrr">
 
 <?php }?>
    </div>
</div>

</nav>
</header>
</body>

</html>
