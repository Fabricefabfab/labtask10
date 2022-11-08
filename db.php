<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "bc2fdbe3d9fb92";
$password = "3f1ab0a9";
$db = "heroku_0d961f286c98afb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
