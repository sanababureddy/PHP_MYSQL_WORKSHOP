<?php
$servername = "localhost";
$username = "libadmin";
$password = "adminpassword";
$dbname = "digitallibrary";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
