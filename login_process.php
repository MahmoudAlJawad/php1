<?php

require("connn.php");

$name = $_POST['name'];

$psw = $_POST['psw'];




$query = "SELECT `id`, `name` FROM `user` WHERE  name='" . $name . "' AND pass='" . $psw . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
  $error = $$_GET['error'];
  $error = "Enter Correct E-mail and Password Combination";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['name'] = $name;
  $_SESSION['user_id'] = $row['id'];
  header('location: head1.php');
}
?>
