<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location: login.php');
}
session_destroy();
header('location: logout.php');
?>