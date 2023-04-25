<?php
$hostname = "Localhost";
$username = "root";
$password = "";
$db_name = "my_store";

$conn = mysqli_connect($hostname, $username, $password, $db_name) or die("database connection failed");
