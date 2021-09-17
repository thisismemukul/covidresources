<?php
session_start();
include 'db/config.php';
$database = mysqli_select_db($con,'resources');
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }

$email = $_POST['email'];
$pass = $_POST['pass'];

$email = stripcslashes($email);
$pass = stripcslashes($pass);

$email = mysqli_real_escape_string($con,$email);
$pass = mysqli_real_escape_string($con,$pass);


if (mysqli_query($con,"CREATE TABLE loginadmin (
    ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    email varchar(255),
    pass varchar(255)

)")) {
    # code...
echo "string";
}


$result = mysqli_query($con,"select * from loginadmin where email = '$email' and pass = '$pass'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);

if ($row['email'] == $email && $row['pass'] == $pass) {
    $_SESSION['email']=$email;

    echo '<script type ="text/javascript"> alert("login Successfully!! welcome ");window.location= "admin.php"</script>';

}else{
    // code...
    echo '<script type ="text/javascript"> alert("Either Email or Password is incorrect");window.location= "login.php"</script>';
}
 ?>