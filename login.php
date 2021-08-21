<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="s1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>
</head>
<body>
<?php
include "head.php";
?>

<h2>Login Form</h2>

<form action="login_process.php" method="post">

  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name='b'>Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <div class="psw">Don't have an account?<a href="signup.php">Register</a></div>  </div>
</form>

</body>
</html>