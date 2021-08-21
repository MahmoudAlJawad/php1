<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="topnav">
<?php
  if(isset($_SESSION['name'])) {
  ?>
    <a class="active" href="head.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="logout_porcess.php">logout</a>
  
<?php }else{ 
  ?>
 <a class="active" href="head.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="login.php">login</a>
    <a href="signup.php">signup</a>
    <?php }?>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Top Navigation with Right Aligned Links</h2>
  <p>Some content..</p>

</div>
</body>
</html>