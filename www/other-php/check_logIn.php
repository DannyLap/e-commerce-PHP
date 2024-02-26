<?php
session_start();

var_dump($_SESSION);
if (isset($_SESSION['user_connected'])) {
    echo "<h2 class='display-3 text-black'>Hello,!</h2>";
} else {
    echo "<h2 class='display-3 text-black'>Hello, lol !</h2>";
    //header("Location: /www/login.php");
    //exit;
}