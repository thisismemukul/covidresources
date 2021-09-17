<?php 

$server = "sql201.unaux.com";
$username = "unaux_28474649";
$password = "3n7n74p8";
$dbname = "unaux_28474649_resources";
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "earthquake";

$con = mysqli_connect($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>