<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "resources";
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "earthquake";

$con = mysqli_connect($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>