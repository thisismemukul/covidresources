<?php
include 'db/config.php';
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }

// $submit = $_POST['post'];
$name = $_POST['name'];
$resources = $_POST['resources'];
$r_name = $_POST['r_name'];
$state = $_POST['stt'];
$city = $_POST['city'];
$day = $_POST['days'];
$quantity = $_POST['quantity'];
$phone = $_POST['phone'];

$entry_date = date('Y/m/d');

if (mysqli_query($con,"CREATE TABLE resources (
    ID int(40) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    fname varchar(255),
    resources varchar(40),
    r_name varchar(40),
    state_name varchar(255),
    city_name varchar(255),
    day varchar(100),
    quantity varchar(100),
    phone varchar(10),
    entry_date DATE,
    aproved char(1)
)")) {
    # code...
echo "string";
}
// if (isset($submit)) {
    if (mysqli_query($con,"insert into resources (fname, resources, r_name, state_name, city_name, day, quantity, phone, entry_date, aproved) 
values ('$name', '$resources', '$r_name', '$state', '$city', '$day', '$quantity', '$phone', '$entry_date', 'N')")) {
    echo '<script type ="text/javascript"> alert("Record Uploaded Successfully!! It will be displayed after Approval");window.location= "index.html"</script>';
}else{
    // code...
    echo '<script type ="text/javascript"> alert("Something went wrong please try again.");window.location= "contribute_resources.html"</script>';
}
// }
// else{
//     echo '<script type ="text/javascript"> alert("Something went wrong please try again.");window.location= "index.html"</script>';
// }
 ?>

