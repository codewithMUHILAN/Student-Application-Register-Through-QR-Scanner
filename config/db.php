<?php
$servername = "localhost";
$database = "u883356064_test_db";
$username = "u883356064_test_db";
$password = "Muhilanswe#66196";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>