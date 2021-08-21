<?php

require("connn.php");

  
  $name = $_POST['name'];
  

  $email = $_POST['email'];


  $password = $_POST['pass'];
  

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

    $query = "INSERT INTO user(name, email, pass)VALUES('" . $name . "','" . $email . "','" . $password .  "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);

    header('location: head2.php');
  
?>
